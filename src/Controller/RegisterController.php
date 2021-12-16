<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{

    private $passwordEncoder; //declaration de variable 

    public function __construct(UserPasswordHasherInterface $passwordEncoder) // le contructeur permet de construir une variable et de l associer a une classe permettant de l utiliser plus bas
    {
        $this->passwordEncoder = $passwordEncoder; // simplification de la variable 
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request): Response // injection de request afin de recuperer les données du formulaire
    {
        $user = new User(); // nouvelle instance de user (objet)
        $form = $this->createForm(RegisterType::class, $user); // creation du formulaire d'inscription registerClass et ajout du paramettres user
        $form->handleRequest($request); // ont retrouve request 
        if ($form->isSubmitted() && $form->isValid()) { // si le formulaire et soumis et valide 

            $user = $form->getData();


            $em = $this->getDoctrine()->getManager(); // em contient desormait la methode doctrine afin de pouvoir enregistrer en bdd.
            $user->setPassword(
                $this->passwordEncoder->hashPassword($user, $user->getPassword()) // permet de hacher le mot de passe et demande 2 arguments .
            );
            $em->persist($user); // prepare la variable
            $em->flush(); // envoi la variable en bdd
            $this->addFlash('success', 'Bravo vous étes desormais inscrit !'); // message flash apres insertion.
        }

        return $this->render('register/register.html.twig', [
            'form' => $form->createView(), // variable form envoyer a la vue twig le creatView permet de créé une vue du formulaire.
        ]);
    }
}
