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
        $__internal_9d1f316bfd660b548aed638af3820d7dde6a5d8fbe25369f2d3e7045c2dca143 = $this->env->getExtension("native_profiler");
        $__internal_9d1f316bfd660b548aed638af3820d7dde6a5d8fbe25369f2d3e7045c2dca143->enter($__internal_9d1f316bfd660b548aed638af3820d7dde6a5d8fbe25369f2d3e7045c2dca143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1f316bfd660b548aed638af3820d7dde6a5d8fbe25369f2d3e7045c2dca143->leave($__internal_9d1f316bfd660b548aed638af3820d7dde6a5d8fbe25369f2d3e7045c2dca143_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc66e335da0dc358ec5d5bd6d0fce51d7aa549190408ceb9cfe1434392d3de2b = $this->env->getExtension("native_profiler");
        $__internal_dc66e335da0dc358ec5d5bd6d0fce51d7aa549190408ceb9cfe1434392d3de2b->enter($__internal_dc66e335da0dc358ec5d5bd6d0fce51d7aa549190408ceb9cfe1434392d3de2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_dc66e335da0dc358ec5d5bd6d0fce51d7aa549190408ceb9cfe1434392d3de2b->leave($__internal_dc66e335da0dc358ec5d5bd6d0fce51d7aa549190408ceb9cfe1434392d3de2b_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
