<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VynilController
{
    #[Route("/")]
    public function homepage()
    {
        return new Response("Welcome to my fancy vynil store!");
    }

    #[Route("/browse/{slug}")]
    public function browse(string $slug = null)
    {
        $title = "All genres";

        if ($slug) {
            $title = str_replace('-', ' ', $slug);
        }

        return new Response($title);
    }
}
