<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(UserRepository $userRepository): JsonResponse
    {
        $users = $userRepository->findAll();
        foreach ($users as $user) {
            dd($user->getId());
        }

        return new JsonResponse('it works');
    }
}
