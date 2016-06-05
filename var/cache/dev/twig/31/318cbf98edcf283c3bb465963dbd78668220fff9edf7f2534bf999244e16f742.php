<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f055c75995877453da96011c674e63498c0d11635b8ab54d24a681d65712c88c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_ecdb351ba177e9e86dc7eaa167c1ce8f47fa64e652897a18869a0a0202bfbecf = $this->env->getExtension("native_profiler");
        $__internal_ecdb351ba177e9e86dc7eaa167c1ce8f47fa64e652897a18869a0a0202bfbecf->enter($__internal_ecdb351ba177e9e86dc7eaa167c1ce8f47fa64e652897a18869a0a0202bfbecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecdb351ba177e9e86dc7eaa167c1ce8f47fa64e652897a18869a0a0202bfbecf->leave($__internal_ecdb351ba177e9e86dc7eaa167c1ce8f47fa64e652897a18869a0a0202bfbecf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb96e9846d3c0aa63f0e7f3ca57778b7257abf73f8e8051761d63544401ade5d = $this->env->getExtension("native_profiler");
        $__internal_fb96e9846d3c0aa63f0e7f3ca57778b7257abf73f8e8051761d63544401ade5d->enter($__internal_fb96e9846d3c0aa63f0e7f3ca57778b7257abf73f8e8051761d63544401ade5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_fb96e9846d3c0aa63f0e7f3ca57778b7257abf73f8e8051761d63544401ade5d->leave($__internal_fb96e9846d3c0aa63f0e7f3ca57778b7257abf73f8e8051761d63544401ade5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
