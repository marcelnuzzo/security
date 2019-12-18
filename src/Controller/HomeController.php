<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/install", name="secu_install")
     */
    public function install()
    {
        return $this->render('home/installation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

        /**
     * @Route("/commande", name="secu_com")
     */
    public function command()
    {
        return $this->render('home/commandes.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
