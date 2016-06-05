<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e5c0c023a586bdb060a9eca74e82fddad16e7d6bd582db5c707d74e4dea0377a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2c06758200c844b4a0879f1e2788395c38e6998097236a625ac3ef35645f1ade = $this->env->getExtension("native_profiler");
        $__internal_2c06758200c844b4a0879f1e2788395c38e6998097236a625ac3ef35645f1ade->enter($__internal_2c06758200c844b4a0879f1e2788395c38e6998097236a625ac3ef35645f1ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c06758200c844b4a0879f1e2788395c38e6998097236a625ac3ef35645f1ade->leave($__internal_2c06758200c844b4a0879f1e2788395c38e6998097236a625ac3ef35645f1ade_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c6cb37b941281bc5b7b344cdb373e504a895c512aee832891f27b3602f8cb85 = $this->env->getExtension("native_profiler");
        $__internal_9c6cb37b941281bc5b7b344cdb373e504a895c512aee832891f27b3602f8cb85->enter($__internal_9c6cb37b941281bc5b7b344cdb373e504a895c512aee832891f27b3602f8cb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9c6cb37b941281bc5b7b344cdb373e504a895c512aee832891f27b3602f8cb85->leave($__internal_9c6cb37b941281bc5b7b344cdb373e504a895c512aee832891f27b3602f8cb85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
