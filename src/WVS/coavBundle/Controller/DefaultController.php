<?php

namespace WVS\coavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WVScoavBundle:Default:index.html.twig');
    }
}
