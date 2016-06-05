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
        $__internal_ba318b570aea4eadaf5944812e64ce99dbc5e48aa8c59d823fb95100bcb03744 = $this->env->getExtension("native_profiler");
        $__internal_ba318b570aea4eadaf5944812e64ce99dbc5e48aa8c59d823fb95100bcb03744->enter($__internal_ba318b570aea4eadaf5944812e64ce99dbc5e48aa8c59d823fb95100bcb03744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba318b570aea4eadaf5944812e64ce99dbc5e48aa8c59d823fb95100bcb03744->leave($__internal_ba318b570aea4eadaf5944812e64ce99dbc5e48aa8c59d823fb95100bcb03744_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5612a6e831abfa704736107edcee27486580288778d7920eb8e218c2cfe52153 = $this->env->getExtension("native_profiler");
        $__internal_5612a6e831abfa704736107edcee27486580288778d7920eb8e218c2cfe52153->enter($__internal_5612a6e831abfa704736107edcee27486580288778d7920eb8e218c2cfe52153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5612a6e831abfa704736107edcee27486580288778d7920eb8e218c2cfe52153->leave($__internal_5612a6e831abfa704736107edcee27486580288778d7920eb8e218c2cfe52153_prof);

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
