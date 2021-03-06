<?php
/**
 * Created by PhpStorm.
 * User: Java
 * Date: 5.4.2018
 * Time: 17:53
 */

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */

    public function homepage()
    {
        return $this->render("article/homepage.html.twig");
//        return new Response('OMG! My first page already! WOOO!');
    }


    /**
     * @Route("/news/{slug}", name="article_show")
     */

    public function show($slug)
    {
        dump($slug, $this);

        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all - asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'slug' => $slug,
            'comments' => $comments,
        ]);
    }
    /**
     * @Route("news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */

    public function toggleArticleHeart($slug, LoggerInterface $logger){
         //TODO - actually heart/unheart the article!

        $logger->info('Article is being hearted');

        return new JsonResponse(['hearts' => rand(5, 100)]);
    }

}


//
// /**
// * @Route("/")
// */
//
//    public function homepage()
//    {
//        return new Response('OMG! My first page already! WOOO!');
//    }


//    /**
//     * @Route("/news/why-asteroids-taste-like-bacon")
//     */
//
//    public function show()
//    {
//        return new Response('Future page to show one space article!');
//    }


///**
// * @Route("/news/{slug}")
// */
//
//public function show($slug)
//{
//    return new Response(sprintf('Future page to show the article %s', $slug));
//}
