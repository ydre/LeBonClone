<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_0dc2b44a0d24ee3fb94ba0b258b7e518259e6d311466a0115e2728a09c5f84ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_3f9b141ecc910f4637c5d65dd8b5b51ef2587edd5bf7279a489aeb768466c1e3 = $this->env->getExtension("native_profiler");
        $__internal_3f9b141ecc910f4637c5d65dd8b5b51ef2587edd5bf7279a489aeb768466c1e3->enter($__internal_3f9b141ecc910f4637c5d65dd8b5b51ef2587edd5bf7279a489aeb768466c1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f9b141ecc910f4637c5d65dd8b5b51ef2587edd5bf7279a489aeb768466c1e3->leave($__internal_3f9b141ecc910f4637c5d65dd8b5b51ef2587edd5bf7279a489aeb768466c1e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_437432bbbf87e86336f6092cd2b01b13c46e0516f17c5cc9be2b5190b3392d23 = $this->env->getExtension("native_profiler");
        $__internal_437432bbbf87e86336f6092cd2b01b13c46e0516f17c5cc9be2b5190b3392d23->enter($__internal_437432bbbf87e86336f6092cd2b01b13c46e0516f17c5cc9be2b5190b3392d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_437432bbbf87e86336f6092cd2b01b13c46e0516f17c5cc9be2b5190b3392d23->leave($__internal_437432bbbf87e86336f6092cd2b01b13c46e0516f17c5cc9be2b5190b3392d23_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
