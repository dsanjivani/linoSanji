<?php
namespace AppBundle\linito;

class linito {

    public $remainder5;
    public $remainder3;
    public $remainder3_5;
    public $number;

    function checkRemainder() {
        for($i=1;$i<=100;$i++) {

            $this->remainder5   = $this->calcRemainder($i,5);
            $this->remainder3   = $this->calcRemainder($i,3);
            $div3_5 = $this->addRemainder($this->remainder5,$this->remainder3);
            $this->remainder3_5 = $this->addRemainder ($div3_5,1);
            $this->number = $i;
            $this->returnAnswer($this);
            echo "<br>";
        }
        return;
    }

    function calcRemainder($number,$param)
    {
        return $number % $param;
    }

    function addRemainder($number3,$number5)
    {
        return $number3 + $number5;
    }

    function returnAnswer($result)
    {
        switch ($result) {
            case ($result->remainder3_5 == 0 ):
                echo sprintf("%s\n","Linianos");
                break;
            case ($result->remainder5 == 0):
                echo sprintf("%s\n","IT");
                break;
            case ($result->remainder3==0):
                echo sprintf("%s\n","Linio");
                break;
            default:
                echo sprintf("%s\n",$result->number);
        }
    }
}