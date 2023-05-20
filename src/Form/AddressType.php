<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label'=> 'Your address name',
                'attr'=>[
                    'placeholder' => 'Address name'
                ]
            ])
            ->add('firstname', TextType::class,[
                'label'=> 'Your firstname',
                'attr'=>[
                    'placeholder' => 'Firstname'
                ]
            ])
            ->add('lastname', TextType::class,[
                'label'=> 'Your lastname',
                'attr'=>[
                    'placeholder' => 'Lastname'
                ]
            ])
            ->add('company', TextType::class,[
                'label'=> 'Your company',
                'attr'=>[
                    'placeholder' => 'Company (facultatif)'
                ]
            ])
            ->add('address', TextType::class,[
                'label'=> 'Your address',
                'attr'=>[
                    'placeholder' => 'Address here'
                ]
            ])
            ->add('postal', TextType::class,[
                'label'=> 'Your postal',
                'attr'=>[
                    'placeholder' => 'Postal here'
                ]
            ])
            ->add('city', TextType::class,[
                'label'=> 'Your city',
                'attr'=>[
                    'placeholder' => 'City'
                ]
            ])
            ->add('country', CountryType::class,[
                'label'=> 'Your country',
                'attr'=>[
                    'placeholder' => 'Country'
                ]
            ])
            ->add('phone', TelType::class,[
                'label'=> 'Your phone number',
                'attr'=>[
                    'placeholder' => 'Phone number here'
                ]
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Valid',
                'attr' =>[
                    'class'=>'btn-block btn-info'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
