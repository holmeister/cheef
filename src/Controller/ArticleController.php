<?php
/**
 * Created by PhpStorm.
 * User: Java
 * Date: 5.4.2018
 * Time: 17:53
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }
}