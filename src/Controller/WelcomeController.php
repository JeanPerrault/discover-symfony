<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function hello()
    {
        $name = 'Jean';

        // On peut dumper une variable comme var_dump
        dump($name);

        return $this->render('Welcome/hello.html.twig',[
            'name' => $name
        ]);

        return new Response('<html><body>Hello '.$name.'</body></html>');
      
;    }
}