<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VynilController extends AbstractController
{
    #[Route("/")]
    public function homepage()
    {
        return new Response("Welcome to my fancy vynil store!");
    }
}
