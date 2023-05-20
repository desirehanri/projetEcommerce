<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/account/password', name: 'app_account_password')]
    public function index(Request $request, UserPasswordHasherInterface $encoder): Response
    {
        $notificationS = null;
        $notificationE = null;
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class,$user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $old_pass = $form->get("old_password")->getData();

            if ($encoder->isPasswordValid($user,$old_pass)) {
                $new_pwd = $form->get('new_password')->getData();
                $password = $encoder->hashPassword($user,$new_pwd);
                $user->setPassword($password);

                $this->entityManager->persist($user);
                $this->entityManager->flush();
                $notificationS = "Successful";
            }else{
                $notificationE = "Error";
            }
        }

        return $this->render('account/mdp.html.twig',[
            'form' => $form->createView(),
            'notifS' => $notificationS,
            'notifE' => $notificationE,
        ]);
    }
}
