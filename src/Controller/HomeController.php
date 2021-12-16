<?php

namespace App\Controller;     // Ceci et le namesace 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;     // Le use importe nous donne acces a des methode et fonction que nous importons dans ce controlleur .
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // cett extention Route nous permet d'utilisez dans ce controlleur le systeme de route de symfony.

class HomeController extends AbstractController     // Notre HomeController etant de Abstract controller qui lui meme contien d'inombrable methode relatif au controller .
{
    /**
     * @Route("/", name="home")       // la Route indiquer appel via (l'URL) la fonction ci-dessous . ! ANNOTATION ! comprenant deux parametres pour l'instant 
     */
    public function homePage(): Response     // Response indique que cette fonction renvoi une reponse en locurence un return .
    {
        return $this->render('home/homeStore.html.twig', [     // Le render et une fonction qui renvoi une vue twig 'home/homeStore.html.twig' dans le dossier template .
            'controller_name' => 'HomeController',     // Nous injecton une variable intituler homeController qui et appelable par l'intituler controller_name .
        ]);
    }
}
