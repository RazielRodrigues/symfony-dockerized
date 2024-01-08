<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VynilController extends AbstractController
{
    #[Route("/")]
    public function homepage()
    {
        return $this->render(
            "vynyl/homepage.html.twig",
            ['tracks' => [
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
                ['name' => 'aaa', 'artist' => 'bob marley'],
            ]]
        );
    }

    #[Route("/browse/{genre}")]
    public function browse(string $genre = null)
    {
        if ($genre) {
            $genre = str_replace('-', ' ', $genre);
        } else {
            $genre = "All genres";
        }

        return $this->render("vynyl/browse.html.twig", [
            'genre' => $genre
        ]);
    }
}
