<?php

namespace SocialProBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    public function showUsersAction(){
       // $userManager = $this->get('fos_user.user_manager');
        $users = $this->getDoctrine()->getRepository('SocialProBundle:Admin')->findAll();
        //return $this->render("SocialProBundle:Admin:newteams.html.twig", array('use' => $users));
    }
}

