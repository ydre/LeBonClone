<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_90db45e21cb2009251d3e4220c5f071e54c6ce937f729f24117f06aa5fc02e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_e4d503474d15f820ed56bbc16153f0458e4282ab003126f25e402a8778c06522 = $this->env->getExtension("native_profiler");
        $__internal_e4d503474d15f820ed56bbc16153f0458e4282ab003126f25e402a8778c06522->enter($__internal_e4d503474d15f820ed56bbc16153f0458e4282ab003126f25e402a8778c06522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d503474d15f820ed56bbc16153f0458e4282ab003126f25e402a8778c06522->leave($__internal_e4d503474d15f820ed56bbc16153f0458e4282ab003126f25e402a8778c06522_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e817095d6b48104b662602a805dc55e923bb0b77de24107953197f98bdf5cd6 = $this->env->getExtension("native_profiler");
        $__internal_2e817095d6b48104b662602a805dc55e923bb0b77de24107953197f98bdf5cd6->enter($__internal_2e817095d6b48104b662602a805dc55e923bb0b77de24107953197f98bdf5cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2e817095d6b48104b662602a805dc55e923bb0b77de24107953197f98bdf5cd6->leave($__internal_2e817095d6b48104b662602a805dc55e923bb0b77de24107953197f98bdf5cd6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
