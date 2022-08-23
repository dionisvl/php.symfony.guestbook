<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/conference', name: 'app_conference')]
    public function jsonTest(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ConferenceController.php',
        ]);
    }


    #[Route('/hello/{name}', name: 'homepage')]
    public function index(string $name = ''): Response
    {
        $greet = '';
        if ($name) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }

        return new Response(<<<EOF
        <html>
            <body>
            $greet
                <img src="/images/under-construction.gif" />
            </body>
        </html>
        EOF
        );
    }
}
