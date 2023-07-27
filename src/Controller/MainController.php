<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route(path: '/', name: 'default_page', methods: ['GET'])]
    public function home(): Response
    {
        $number = random_int(0, 100);

       // sans twig : 
        // return new Response('<html><body>Lucky number: '.$number.'</body></html>');

        // avec twig
        return $this->render(
            // le chemin du fichier twig
            'Main/home.html.twig',
            // les informations/variables nécessaire à la génération de la vue
            [
                "lucky_number" => $number
            ]
        );  
    }
}