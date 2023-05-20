<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,[
                "disabled" => true
            ])
            /*->add('roles')*/
            ->add('firstname', TextType::class,[
                "disabled" => true
            ])
            ->add('lastname', TextType::class,[
                "disabled" => true
            ])
            ->add('old_password',PasswordType::class,[
                'label' => "Current password",
                'mapped' => false,
                'attr' => [
                    'placeholder' => " Your current Password"
                ]
            ])
            ->add('new_password', RepeatedType::class,[
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message' => "Password not identical",
                'required' => true,
                'first_options' => [
                    'label'=> 'Your new password',
                    'attr' => [
                        'placeholder' => "Your new password"
                        ]
                ],
                'second_options' =>[
                    'label' => 'Confirm your new password',
                    'attr' => [
                        'placeholder' => "Confirm your new password"
                        ]
                    ]

            ])
            ->add('submit', SubmitType::class,[
                'label' => "Update"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
