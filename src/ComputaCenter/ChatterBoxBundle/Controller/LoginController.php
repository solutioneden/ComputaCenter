<?php

namespace ComputaCenter\ChatterBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Login Controller
 * @package ComputaCenter\ChatterBoxBundle\Controller
 */

class LoginController extends Controller
{
    /**
     * @Route("/", name="_login")
     * @Template("ChatterBoxBundle:Login:index.html.twig")
     */
    public function indexAction() {
        $post = "Hello World";
        return array('post'=>$post);
    }
}
