<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * This route is behind an authenticated firewall in security.yaml
     * 
     * @Route("/api/stuff", name="api")
     */
    public function index(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

    /**
     * This route is behind an authenticated firewall in security.yaml
     *
     * @Route("/admin", name="api_admin")
     */
    public function admin(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'Admin',
        ]);
    }
}
