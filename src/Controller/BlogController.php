<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        $repo=$this->getDoctrine()->getRepository(Article::class);
        $articles=$repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles'=>$articles

        ]);
    }

    /**
     * @Route ("/",name="home")
     */

    public function home()
    {
        return $this->render('blog/home.html.twig',
            ['title'=>"hellooooo",'age'=>31]);
    }
}
