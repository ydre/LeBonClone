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
        $__internal_928eedc704a9479c8d53faa939a1d85dee0482f3f44c1ca0567ffacbb1863d1b = $this->env->getExtension("native_profiler");
        $__internal_928eedc704a9479c8d53faa939a1d85dee0482f3f44c1ca0567ffacbb1863d1b->enter($__internal_928eedc704a9479c8d53faa939a1d85dee0482f3f44c1ca0567ffacbb1863d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        // line 2
        $context["page_title"] = "profil";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928eedc704a9479c8d53faa939a1d85dee0482f3f44c1ca0567ffacbb1863d1b->leave($__internal_928eedc704a9479c8d53faa939a1d85dee0482f3f44c1ca0567ffacbb1863d1b_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2c61afdb2067f1089607dc50a4443fb3b2d02ce3c526bedb46bdf7d44111201 = $this->env->getExtension("native_profiler");
        $__internal_d2c61afdb2067f1089607dc50a4443fb3b2d02ce3c526bedb46bdf7d44111201->enter($__internal_d2c61afdb2067f1089607dc50a4443fb3b2d02ce3c526bedb46bdf7d44111201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 5)->display($context);
        
        $__internal_d2c61afdb2067f1089607dc50a4443fb3b2d02ce3c526bedb46bdf7d44111201->leave($__internal_d2c61afdb2067f1089607dc50a4443fb3b2d02ce3c526bedb46bdf7d44111201_prof);

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
        return array (  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% set page_title = "profil" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
