<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'attr' => ['placeholder' => 'Entrez votre prénom']
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'attr' => ['placeholder' => 'Entrez votre nom']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => ['placeholder' => 'Entrez votre email']
            ])
            ->add('password', RepeatedType::class, [
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 30
                ]),
                'type' => passwordType::class,
                'invalid_message' => 'les mots de passe ne correspondent pas.',
                'required' => true,
                'first_options' => [
                    'label' => 'Entrez votre mot de passe',
                    'attr' => ['placeholder' => 'Entrez votre mot de passe']
                ],
                'second_options' => [
                    'label' => 'Confirmez votre mot de passe',
                    'attr' => ['placeholder' => 'Confirmez votre mot de passe']
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Inscription',
                'attr' => ['class' => 'btn-primary btn btn-block']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
