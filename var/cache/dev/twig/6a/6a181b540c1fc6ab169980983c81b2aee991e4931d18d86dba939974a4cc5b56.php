<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_0dc2b44a0d24ee3fb94ba0b258b7e518259e6d311466a0115e2728a09c5f84ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_ede32b035ac5d87115b8b7207c6b5db32f88cfcc8de0a2db603686aa3562d245 = $this->env->getExtension("native_profiler");
        $__internal_ede32b035ac5d87115b8b7207c6b5db32f88cfcc8de0a2db603686aa3562d245->enter($__internal_ede32b035ac5d87115b8b7207c6b5db32f88cfcc8de0a2db603686aa3562d245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede32b035ac5d87115b8b7207c6b5db32f88cfcc8de0a2db603686aa3562d245->leave($__internal_ede32b035ac5d87115b8b7207c6b5db32f88cfcc8de0a2db603686aa3562d245_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6f492c3d34eec27d24042bb19a221553f1bbdc7fc080ac8c9124f5da8f81eea = $this->env->getExtension("native_profiler");
        $__internal_a6f492c3d34eec27d24042bb19a221553f1bbdc7fc080ac8c9124f5da8f81eea->enter($__internal_a6f492c3d34eec27d24042bb19a221553f1bbdc7fc080ac8c9124f5da8f81eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a6f492c3d34eec27d24042bb19a221553f1bbdc7fc080ac8c9124f5da8f81eea->leave($__internal_a6f492c3d34eec27d24042bb19a221553f1bbdc7fc080ac8c9124f5da8f81eea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
