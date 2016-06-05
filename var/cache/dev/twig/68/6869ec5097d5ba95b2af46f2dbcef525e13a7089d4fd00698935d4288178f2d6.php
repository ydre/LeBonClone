<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_04ba3ee13c6b9fed2952d51a3c63dab8009a8a87f9ad57ad270fb88656873618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2ae44492c60a444d03296961dd04b00d65ea577c461addfac60b1e16c418de07 = $this->env->getExtension("native_profiler");
        $__internal_2ae44492c60a444d03296961dd04b00d65ea577c461addfac60b1e16c418de07->enter($__internal_2ae44492c60a444d03296961dd04b00d65ea577c461addfac60b1e16c418de07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae44492c60a444d03296961dd04b00d65ea577c461addfac60b1e16c418de07->leave($__internal_2ae44492c60a444d03296961dd04b00d65ea577c461addfac60b1e16c418de07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_563434ce59a3621f072aa95972450febb83554139918be49b82ca1023b09c612 = $this->env->getExtension("native_profiler");
        $__internal_563434ce59a3621f072aa95972450febb83554139918be49b82ca1023b09c612->enter($__internal_563434ce59a3621f072aa95972450febb83554139918be49b82ca1023b09c612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_563434ce59a3621f072aa95972450febb83554139918be49b82ca1023b09c612->leave($__internal_563434ce59a3621f072aa95972450febb83554139918be49b82ca1023b09c612_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
