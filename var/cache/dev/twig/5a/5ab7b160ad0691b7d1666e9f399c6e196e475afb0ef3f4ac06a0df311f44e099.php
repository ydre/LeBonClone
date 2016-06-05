<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fef8b69aae1b3cc86b2fdfe97bec97abdc21be86b1e7b880097d5d6ac901ec89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_abcfac1cb5fd6d4955d652e3bbeb991afbb868f1d154bc0da68f631a2917776e = $this->env->getExtension("native_profiler");
        $__internal_abcfac1cb5fd6d4955d652e3bbeb991afbb868f1d154bc0da68f631a2917776e->enter($__internal_abcfac1cb5fd6d4955d652e3bbeb991afbb868f1d154bc0da68f631a2917776e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abcfac1cb5fd6d4955d652e3bbeb991afbb868f1d154bc0da68f631a2917776e->leave($__internal_abcfac1cb5fd6d4955d652e3bbeb991afbb868f1d154bc0da68f631a2917776e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6dc2de33cc3473687cbf7716bf9c8d802d86ef4997656fcebb1fb576a0355de = $this->env->getExtension("native_profiler");
        $__internal_b6dc2de33cc3473687cbf7716bf9c8d802d86ef4997656fcebb1fb576a0355de->enter($__internal_b6dc2de33cc3473687cbf7716bf9c8d802d86ef4997656fcebb1fb576a0355de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b6dc2de33cc3473687cbf7716bf9c8d802d86ef4997656fcebb1fb576a0355de->leave($__internal_b6dc2de33cc3473687cbf7716bf9c8d802d86ef4997656fcebb1fb576a0355de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
