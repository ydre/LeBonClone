<?php

namespace CategorieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CategorieBundle\Entity\Categorie;
use CategorieBundle\Form\CategorieType;

/**
 * Offre controller.
 *
 */
class CategorieController extends Controller
{


    public function categorie_listAction(){

        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('CategorieBundle:Categorie')->findAll();
        return $this->render('CategorieBundle:categorie:index.html.twig',array(
                'categories' => $categories
            ));
    }

     public function categorie_newAction(Request $request){

        $categories = new Categorie();
        $form = $this->createForm('CategorieBundle\Form\CategorieType', $categories);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($categories);
            $em->flush();

       
         return $this->render('CategorieBundle:categorie:new.html.twig', array(
                'categories' => $categories,
                'form'=> $form->createView()
            ));
        }

         return $this->render('CategorieBundle:categorie:new.html.twig', array(
                'categories' => $categories,
                'form'=> $form->createView()
            ));
     }
}
