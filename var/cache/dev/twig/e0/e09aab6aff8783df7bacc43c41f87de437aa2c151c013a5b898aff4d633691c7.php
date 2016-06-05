<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b14946116623ba69dc2aa73d94566f5ffea8417c11714b33546c2903777a09a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f5bf244d23b270c0c7374e0b9e5635e8662857e620bbed4cd2a373d897303f3 = $this->env->getExtension("native_profiler");
        $__internal_5f5bf244d23b270c0c7374e0b9e5635e8662857e620bbed4cd2a373d897303f3->enter($__internal_5f5bf244d23b270c0c7374e0b9e5635e8662857e620bbed4cd2a373d897303f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f5bf244d23b270c0c7374e0b9e5635e8662857e620bbed4cd2a373d897303f3->leave($__internal_5f5bf244d23b270c0c7374e0b9e5635e8662857e620bbed4cd2a373d897303f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1de3a5669cc7f66e47bb560b9e17eaf4fe8b3601ad654b73c9f33c20d4fc32a = $this->env->getExtension("native_profiler");
        $__internal_f1de3a5669cc7f66e47bb560b9e17eaf4fe8b3601ad654b73c9f33c20d4fc32a->enter($__internal_f1de3a5669cc7f66e47bb560b9e17eaf4fe8b3601ad654b73c9f33c20d4fc32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f1de3a5669cc7f66e47bb560b9e17eaf4fe8b3601ad654b73c9f33c20d4fc32a->leave($__internal_f1de3a5669cc7f66e47bb560b9e17eaf4fe8b3601ad654b73c9f33c20d4fc32a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
