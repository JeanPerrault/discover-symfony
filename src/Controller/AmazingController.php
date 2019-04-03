<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AmazingController extends AbstractController
{
    /**
     * @Route("/amazing", name="amazing")
     * @param Request $request
     *
     */
    public function myRoute(Request $request)
    {

    }
}