<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
    * @Route("/hello/{nome}", name="homepage")
    */
    public function index(string $nome = ''): Response
    {
        // return $this->render('conference/index.html.twig', [
        //     'controller_name' => 'ConferenceController',
        // ]);
        $greet = '';
        if ($nome) {
            $greet = sprintf('<h1>Olá %s!</h1>', htmlspecialchars($nome));
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
