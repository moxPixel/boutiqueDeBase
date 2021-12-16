<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
             // similaire au texteType ,emailType etc mais pour les classe de easy admin
            TextField::new('name'),
            TextField::new('subtitle'),
            SlugField::new('slug')->setTargetFieldName('name'), 
            TextareaField::new('description'),
            ImageField::new('picture')
            ->SetBasePath('assets/uploads/') // destination du fichier image
            ->setUploadDir('public/assets/uploads/') // destination final du fichier image
            ->setUploadedFileNamePattern('[randomhash].[extension]') //selection de l extention du fichier ET GENERATION D'UNE CHAINE DE CARACTERE
            ->setRequired(false), 
            MoneyField::new('price')->setCurrency('EUR'), // selection du type de monnay
            AssociationField::new('category'), // alez dans entity category et faire un __toString pour retouner une chaine de caracteres 
           
        ];
    }
    
}
