<?php

namespace DL\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DLProjetBundle:Default:index.html.twig');
    }
}
