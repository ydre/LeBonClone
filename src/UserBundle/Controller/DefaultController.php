<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function listAction(User $user)
    {	

    	$em = $this->getDoctrine()->getManager();
    	$offres = $em->getRepository('OffreBundle:Offre')->findBy(array(
    		'user' => $user));

    	return $this->render('UserBundle:Default:list.html.twig', array(
    			'user' => $user,
    			'offres' => $offres
    		));

    }
}
