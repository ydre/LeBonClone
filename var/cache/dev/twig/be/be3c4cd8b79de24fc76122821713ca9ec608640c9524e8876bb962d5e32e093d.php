<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_b9f127dee0868a6287ace44e97b289265f1fd5b74a2a67da32bd0b760c4afb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_03843cdca25e365040eb9ef8ac33b8be256187b5c86608de7cf5069e06714d9d = $this->env->getExtension("native_profiler");
        $__internal_03843cdca25e365040eb9ef8ac33b8be256187b5c86608de7cf5069e06714d9d->enter($__internal_03843cdca25e365040eb9ef8ac33b8be256187b5c86608de7cf5069e06714d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03843cdca25e365040eb9ef8ac33b8be256187b5c86608de7cf5069e06714d9d->leave($__internal_03843cdca25e365040eb9ef8ac33b8be256187b5c86608de7cf5069e06714d9d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8feaf2e5e91f79c2f5c40fd6a784e2266be5935a0b4545e4e23533d6f920bca1 = $this->env->getExtension("native_profiler");
        $__internal_8feaf2e5e91f79c2f5c40fd6a784e2266be5935a0b4545e4e23533d6f920bca1->enter($__internal_8feaf2e5e91f79c2f5c40fd6a784e2266be5935a0b4545e4e23533d6f920bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8feaf2e5e91f79c2f5c40fd6a784e2266be5935a0b4545e4e23533d6f920bca1->leave($__internal_8feaf2e5e91f79c2f5c40fd6a784e2266be5935a0b4545e4e23533d6f920bca1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
