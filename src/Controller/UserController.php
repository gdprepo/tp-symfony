<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     * @Route("/user/{id<\d+>}", name="user_details")
     */
    public function details(User $user = null, CategoryRepository $categoriesBdd): Response
    {
        $user = $user ?? $this->getUser();

        if( ! $user ) {
            return $this->redirectToRoute('login');
        }

        $categories = $categoriesBdd->getCategories();


        return $this->render('user/details.html.twig', [
            'user' => $user,
            'categories' => $categories,
        ]);
    }
}
