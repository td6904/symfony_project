<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'name' => 'Tyler',
            'surname' => 'Onion'
        ]);
    }

    #[Route('/sayHello/{name}/{surname}', name: 'say.hello')]
    public function sayHello(Request $request, $name, $surname): Response
    {
        return $this->render('first/hello.html.twig', [
            'name' => $name,
            'surname' => $surname
        ]);
    }
}