<?php

namespace NPEduFestival\CEFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NPEduFestivalCEFBundle:Default:index.html.twig', array());
    }
}
