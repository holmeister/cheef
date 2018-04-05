<?php
/**
 * Created by PhpStorm.
 * User: Java
 * Date: 5.4.2018
 * Time: 17:53
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{

    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        return new Response(sprintf('Future page to show the article %s', $slug));
    }

//    /**
//     * @Route("/news/why-asteroids-taste-like-bacon")
//     */
//
//    public function show()
//    {
//        return new Response('Future page to show one space article!');
//    }

}