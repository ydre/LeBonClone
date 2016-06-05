<?php
namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


Class RegistrationType extends AbstractType{  

	public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add("nom")
                ->add("prenom");
    }  
      public function getParent(){
        return 'fos_user_registration';
    }   
     public function getName(){
        return 'user_registration';
    }
}