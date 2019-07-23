<?php
use AppBundle\linito;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class linioTest extends WebTestCase
{
    private $linioApp;
    /** @test */
    public function prepare($remainder35=0,$remainder5=0,$remainder3=0,$number=0)
    {
        self::bootKernel();
        // returns the real and unchanged service container
        $container = self::$kernel->getContainer();
        $this->linioApp = $container->get('app.lintoapp');

        $testMultiple3   = $this->linioApp->calcRemainder(3,3);
        $this->assertEquals(0,$testMultiple3);
        $this->linioApp->remainder3 =$remainder3;

        $testMultiple5   = $this->linioApp->calcRemainder(10,10);
        $this->assertEquals (0,$testMultiple5);
        $this->linioApp->remainder5 = $remainder5;

        $testMultiple3_5 = $this->linioApp->addRemainder($remainder3,$remainder5);
       // $this->assertEquals (0,$testMultiple3_5);
        $this->linioApp->remainder3_5 = $remainder35;
    }

    public function testReturnRemainder35() {

        self::bootKernel();
        // returns the real and unchanged service container
        $container = self::$kernel->getContainer();
       // $linioApp = $container->get('app.linioapp');
        $this->prepare(0,0,0,15);
        $this->expectOutputString("Linianos\n");
        $this->linioApp->returnAnswer($this->linioApp);
    }

    public function testReturnRemainder5() {

        self::bootKernel();
        // returns the real and unchanged service container
        $container = self::$kernel->getContainer();
       // $linioApp = $container->get('app.linioapp');
        $this->prepare(1,0,1,50);
        $this->expectOutputString("IT\n");
        $this->linioApp->returnAnswer($this->linioApp);
    }

}
