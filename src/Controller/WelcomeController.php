<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        return $this->render('welcome/index.html.twig');
    }
    /**
     * @Route(
     *      "/hello/{name}",
     *      name="hello",
     *      requirements={"name":"^[a-z]{3,8}$"}
     * )
     */
    public function hello($name = 'jean')
    {
        

        // On peut dumper une variable comme var_dump
        dump($name);

        return $this-> render('Welcome/hello.html.twig',[
            'name' => ucfirst($name)
        ]);

        
      
    }
}