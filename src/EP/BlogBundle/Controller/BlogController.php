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


class BlogController extends Controller{

    public function indexAction($page)
    {
        if($page < 1)
        {
            throw $this->createNotFoundException("Page inexistante (page = ". $page .")");
        }
        return $this->render('EPBlogBundle:Blog:index.html.twig', array ('page' => $page, 'articles' => array()));
    }

    public function voidAction($id)
    {
        return $this->render('EPBlogBundle:Blog:voir.html.twig', array('id' => $id));
    }

    public function menuAction($nombre)
    {
        $liste = array(
            ['id' => 2, 'titre' => 'Mon dernier weekend'],
            ['id' => 5, 'titre' => 'Sortie de Symfony 2'],
            ['id' => 9, 'titre' => 'Test']
        );

        return $this->render('EPBlogBundle:Blog:menu.html.twig', array(
            'liste_articles' => $liste
        ));
    }

    public function ajouterAction()
    {

    }

    public function modifierAction($id)
    {
        return $this->render('EPBlogBundle:Blog:modifier.html.twig');
    }

    public function supprimerAction($id)
    {
        return $this->render('EPBlogBundle:Blog:supprimer.html.twig');
    }



} 