<?php

namespace Lykion\LykionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LykionLykionBundle:Default:index.html.twig', array('name' => $name));
    }
}
