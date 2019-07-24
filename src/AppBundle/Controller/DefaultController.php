<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/linio")
     */
    public function numberAction()
    {
        $linioCheck = $this->get('app.lintoapp');
        $linioCheck->checkRemainder();
        return new Response();
    }
}
