<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home(Request $request, LoggerInterface $logger)
    {
        dump($request);

        // equivalent à $_GET['toto'] ou $_POST['toto']
        dump($request->query->get('toto', 10));

        // est ce que c'est une requete AJAX ?
        dump($request->isXmlHttpRequest());

        //methode de la requete
        dump($request->isMethod('POST'));

        // ecrire un log
        $logger->info('L\'utilisateur a supprimé un truc', ['produit'=>2]);

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