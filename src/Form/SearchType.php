<?php

namespace App\Form;

use App\Classe\Search;
use App\Entity\Genre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('string',TextType::class,[
                'label'=>'Rechercher',
                'required'=>false,
                'attr'=>[
                    'placeholder' => "Votre recherche..."
                ]
            ])
            ->add('genres', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' => Genre::class,
                'multiple' => true,
                'expanded' => true
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Filtrer',
                'attr' =>[
                    'class' => 'btn-block btn-info'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Search ::class,
            'method' => 'GET', #Afin que les donnee de formulaires transitent par l'url
            'csrf_protection' =>false,
        ]);
    }

    public function getBlockPrefix()
    {
        return "";
    }
}