<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 12/01/14
 * Time: 17:12
 */

namespace EP\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class BlogController {

    public function voirAction($id)
    {
        return new Response("Affichage de l'article d'id : ". $id ."");
    }

} 