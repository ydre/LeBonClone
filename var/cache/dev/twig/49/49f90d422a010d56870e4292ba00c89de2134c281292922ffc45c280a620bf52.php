<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_aa3b736ba5e85a6955f6c341cc052c5d65d8c383de349a050def74af5496e42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5ae0d6af7f5f25fc52cbcbae98219ea813513659f66b0bca0a7ddf850b56a35c = $this->env->getExtension("native_profiler");
        $__internal_5ae0d6af7f5f25fc52cbcbae98219ea813513659f66b0bca0a7ddf850b56a35c->enter($__internal_5ae0d6af7f5f25fc52cbcbae98219ea813513659f66b0bca0a7ddf850b56a35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 2
        $context["page_title"] = "édition du profil";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae0d6af7f5f25fc52cbcbae98219ea813513659f66b0bca0a7ddf850b56a35c->leave($__internal_5ae0d6af7f5f25fc52cbcbae98219ea813513659f66b0bca0a7ddf850b56a35c_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02ead9e5515fe97f29c30fe69436d738c3c7ebd3b245f19ce0e0afa7b55a3a07 = $this->env->getExtension("native_profiler");
        $__internal_02ead9e5515fe97f29c30fe69436d738c3c7ebd3b245f19ce0e0afa7b55a3a07->enter($__internal_02ead9e5515fe97f29c30fe69436d738c3c7ebd3b245f19ce0e0afa7b55a3a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 5)->display($context);
        
        $__internal_02ead9e5515fe97f29c30fe69436d738c3c7ebd3b245f19ce0e0afa7b55a3a07->leave($__internal_02ead9e5515fe97f29c30fe69436d738c3c7ebd3b245f19ce0e0afa7b55a3a07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% set page_title = "édition du profil" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
