<?php

namespace EP\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/hello/{name}")
     */
    public function indexAction($name)
    {
        return $this->render('EPBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
