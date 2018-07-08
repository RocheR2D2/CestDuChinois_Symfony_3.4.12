<?php

namespace SecuriteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/connexion")
     */
    public function connexionAction()
    {
        return $this->render('securite/connexion.html.twig');
    }

    /**
     * @Route("/inscription")
     */
    public function inscriptionAction()
    {
        return $this->render('securite/inscription.html.twig');
    }
}
