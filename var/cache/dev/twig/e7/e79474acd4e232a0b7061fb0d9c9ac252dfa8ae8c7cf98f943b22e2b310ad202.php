<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_986f3f9986dcf3bc87613dc5e7e80ff56010791becaf8b2ae60924dcaf529c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_4892c98abfdc68130f6d5ef4bf5352f66d49e8c49304fe631ff107955777a1cf = $this->env->getExtension("native_profiler");
        $__internal_4892c98abfdc68130f6d5ef4bf5352f66d49e8c49304fe631ff107955777a1cf->enter($__internal_4892c98abfdc68130f6d5ef4bf5352f66d49e8c49304fe631ff107955777a1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4892c98abfdc68130f6d5ef4bf5352f66d49e8c49304fe631ff107955777a1cf->leave($__internal_4892c98abfdc68130f6d5ef4bf5352f66d49e8c49304fe631ff107955777a1cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bed7284e10f0d7afc12d3b1479bedaabe8196aa4246aaa756f7ab6606f83516 = $this->env->getExtension("native_profiler");
        $__internal_1bed7284e10f0d7afc12d3b1479bedaabe8196aa4246aaa756f7ab6606f83516->enter($__internal_1bed7284e10f0d7afc12d3b1479bedaabe8196aa4246aaa756f7ab6606f83516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1bed7284e10f0d7afc12d3b1479bedaabe8196aa4246aaa756f7ab6606f83516->leave($__internal_1bed7284e10f0d7afc12d3b1479bedaabe8196aa4246aaa756f7ab6606f83516_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
