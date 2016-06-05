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
        $__internal_58ad0141657a7b88391fc9bade6614c73f6733b09c2c43e54f5b2ddc8c2a1ba6 = $this->env->getExtension("native_profiler");
        $__internal_58ad0141657a7b88391fc9bade6614c73f6733b09c2c43e54f5b2ddc8c2a1ba6->enter($__internal_58ad0141657a7b88391fc9bade6614c73f6733b09c2c43e54f5b2ddc8c2a1ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ad0141657a7b88391fc9bade6614c73f6733b09c2c43e54f5b2ddc8c2a1ba6->leave($__internal_58ad0141657a7b88391fc9bade6614c73f6733b09c2c43e54f5b2ddc8c2a1ba6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae126a40efe2992532f88464ab2917ef45865728c34c9a848a1bbdeb78d940f6 = $this->env->getExtension("native_profiler");
        $__internal_ae126a40efe2992532f88464ab2917ef45865728c34c9a848a1bbdeb78d940f6->enter($__internal_ae126a40efe2992532f88464ab2917ef45865728c34c9a848a1bbdeb78d940f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ae126a40efe2992532f88464ab2917ef45865728c34c9a848a1bbdeb78d940f6->leave($__internal_ae126a40efe2992532f88464ab2917ef45865728c34c9a848a1bbdeb78d940f6_prof);

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
