<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    public function __construct()
    {
            $table=[
                ["name"=>"iPhone X", "slug"=>"iphone-x","description"=>"un iPhone de 2017"],
                ["name"=>"iPhone XR", "slug"=>"iphone-xs","description"=>"un iPhone de 2018"],
                ["name"=>"iPhone XS", "slug"=>"iphone-xr","description"=>"un iPhone de 2018"]
            ];
    }


    /**
     * @Route("/product/ramdom", name="ramdom")
     */
    public function ramdom()
    {
        return $this-> render('Product/ramdom.html.twig');
    }


    /**
     * @Route("/product", name="product")
     */
    public function list()
    {
        return $this-> render('Product/list.html.twig');
    }

    /**
     * @Route("/product/{slug}", name="slug")
     */
    public function slug($slug='iphone')
    {
        return $this-> render('Product/slug.html.twig');
    }
}