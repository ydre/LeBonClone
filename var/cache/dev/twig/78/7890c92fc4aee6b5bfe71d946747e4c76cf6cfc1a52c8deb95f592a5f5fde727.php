<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_17d862d235120c85267ffcdf7ec7a82090cae664c2c6d77c7029428d3cfa2e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f15e62602f4548fee5dac95a581ec8991f1e627e30409c5aa0b5331d095cec76 = $this->env->getExtension("native_profiler");
        $__internal_f15e62602f4548fee5dac95a581ec8991f1e627e30409c5aa0b5331d095cec76->enter($__internal_f15e62602f4548fee5dac95a581ec8991f1e627e30409c5aa0b5331d095cec76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15e62602f4548fee5dac95a581ec8991f1e627e30409c5aa0b5331d095cec76->leave($__internal_f15e62602f4548fee5dac95a581ec8991f1e627e30409c5aa0b5331d095cec76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3e801dddd13d9292bf4d279ea520f30caa57c79dad4018dd1e587e32dc4328c = $this->env->getExtension("native_profiler");
        $__internal_e3e801dddd13d9292bf4d279ea520f30caa57c79dad4018dd1e587e32dc4328c->enter($__internal_e3e801dddd13d9292bf4d279ea520f30caa57c79dad4018dd1e587e32dc4328c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e3e801dddd13d9292bf4d279ea520f30caa57c79dad4018dd1e587e32dc4328c->leave($__internal_e3e801dddd13d9292bf4d279ea520f30caa57c79dad4018dd1e587e32dc4328c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
