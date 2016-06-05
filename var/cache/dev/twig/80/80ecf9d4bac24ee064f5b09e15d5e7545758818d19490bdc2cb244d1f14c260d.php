<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_947e5d9233ad7519ccfbcf85756799bda3f938fab0104c8fdf911d0c49db6e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_83c845a43ba7b4b74cf6b0354d4f1d5098e815cdfccc6151019980e34a3c9611 = $this->env->getExtension("native_profiler");
        $__internal_83c845a43ba7b4b74cf6b0354d4f1d5098e815cdfccc6151019980e34a3c9611->enter($__internal_83c845a43ba7b4b74cf6b0354d4f1d5098e815cdfccc6151019980e34a3c9611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c845a43ba7b4b74cf6b0354d4f1d5098e815cdfccc6151019980e34a3c9611->leave($__internal_83c845a43ba7b4b74cf6b0354d4f1d5098e815cdfccc6151019980e34a3c9611_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b591f40269c267617c6ae43a4a18d8a697ea021566b86236a97c12ab07ab4b03 = $this->env->getExtension("native_profiler");
        $__internal_b591f40269c267617c6ae43a4a18d8a697ea021566b86236a97c12ab07ab4b03->enter($__internal_b591f40269c267617c6ae43a4a18d8a697ea021566b86236a97c12ab07ab4b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b591f40269c267617c6ae43a4a18d8a697ea021566b86236a97c12ab07ab4b03->leave($__internal_b591f40269c267617c6ae43a4a18d8a697ea021566b86236a97c12ab07ab4b03_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
