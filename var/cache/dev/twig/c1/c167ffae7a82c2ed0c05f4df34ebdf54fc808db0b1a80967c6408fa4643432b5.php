<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e76fe1fdd63d844647318c181fbba904f593d288da853d8e7ff1df806bfd1319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_0658bbb241f6001a884bb05ecc9455ae266b87c73762721b153c572fe6bc3446 = $this->env->getExtension("native_profiler");
        $__internal_0658bbb241f6001a884bb05ecc9455ae266b87c73762721b153c572fe6bc3446->enter($__internal_0658bbb241f6001a884bb05ecc9455ae266b87c73762721b153c572fe6bc3446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        $context["page_title"] = "profil";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0658bbb241f6001a884bb05ecc9455ae266b87c73762721b153c572fe6bc3446->leave($__internal_0658bbb241f6001a884bb05ecc9455ae266b87c73762721b153c572fe6bc3446_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c73c07fa2e0959c5715d27e67e579ba9368c6284bd5a9fbde8b7d2813f947374 = $this->env->getExtension("native_profiler");
        $__internal_c73c07fa2e0959c5715d27e67e579ba9368c6284bd5a9fbde8b7d2813f947374->enter($__internal_c73c07fa2e0959c5715d27e67e579ba9368c6284bd5a9fbde8b7d2813f947374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 5)->display($context);
        
        $__internal_c73c07fa2e0959c5715d27e67e579ba9368c6284bd5a9fbde8b7d2813f947374->leave($__internal_c73c07fa2e0959c5715d27e67e579ba9368c6284bd5a9fbde8b7d2813f947374_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
