<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_947e5d9233ad7519ccfbcf85756799bda3f938fab0104c8fdf911d0c49db6e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_834de5877ad7da077036d116b51647c73216a88b2b13ca292ed0b0637f97c37a = $this->env->getExtension("native_profiler");
        $__internal_834de5877ad7da077036d116b51647c73216a88b2b13ca292ed0b0637f97c37a->enter($__internal_834de5877ad7da077036d116b51647c73216a88b2b13ca292ed0b0637f97c37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_834de5877ad7da077036d116b51647c73216a88b2b13ca292ed0b0637f97c37a->leave($__internal_834de5877ad7da077036d116b51647c73216a88b2b13ca292ed0b0637f97c37a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d2659083f8e3e2ee9947f6ff9d0b6838d80432c461330c63145a11e593a4dff = $this->env->getExtension("native_profiler");
        $__internal_0d2659083f8e3e2ee9947f6ff9d0b6838d80432c461330c63145a11e593a4dff->enter($__internal_0d2659083f8e3e2ee9947f6ff9d0b6838d80432c461330c63145a11e593a4dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0d2659083f8e3e2ee9947f6ff9d0b6838d80432c461330c63145a11e593a4dff->leave($__internal_0d2659083f8e3e2ee9947f6ff9d0b6838d80432c461330c63145a11e593a4dff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
