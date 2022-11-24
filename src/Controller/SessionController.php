<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {

        //session_start()
        $session = $request->getSession();
        if($session->has('nbVisited')) {
        $nbreVisited = $session->get('nbVisited') + 1;
        } else {
            $nbreVisited =1;
        } $session->set('nbVisited', $nbreVisited);

        return $this->render('session/index.html.twig');
    }
}