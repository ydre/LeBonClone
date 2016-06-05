<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_c26a16f861197a5adb234885fb2db464d0583d1d61e6d8053fe21237adac9bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a4b72e229fdaba61cd96f68f43d558ca44c48701195f707075ac180c5fbd71a1 = $this->env->getExtension("native_profiler");
        $__internal_a4b72e229fdaba61cd96f68f43d558ca44c48701195f707075ac180c5fbd71a1->enter($__internal_a4b72e229fdaba61cd96f68f43d558ca44c48701195f707075ac180c5fbd71a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b72e229fdaba61cd96f68f43d558ca44c48701195f707075ac180c5fbd71a1->leave($__internal_a4b72e229fdaba61cd96f68f43d558ca44c48701195f707075ac180c5fbd71a1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f732011f9c6448267f24c698a95fee016be2c25cfe97ee31fa9483ebaf535f98 = $this->env->getExtension("native_profiler");
        $__internal_f732011f9c6448267f24c698a95fee016be2c25cfe97ee31fa9483ebaf535f98->enter($__internal_f732011f9c6448267f24c698a95fee016be2c25cfe97ee31fa9483ebaf535f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f732011f9c6448267f24c698a95fee016be2c25cfe97ee31fa9483ebaf535f98->leave($__internal_f732011f9c6448267f24c698a95fee016be2c25cfe97ee31fa9483ebaf535f98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
