<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_687fd3f80c5f386be468b1b8b29ca3d85fd6eafcfd5357edcb50b310e1219fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_5e6a3503cd84f83c039bf6ed5a6dc4b0d828b711757b66dd9c8a21f5ddac4d3a = $this->env->getExtension("native_profiler");
        $__internal_5e6a3503cd84f83c039bf6ed5a6dc4b0d828b711757b66dd9c8a21f5ddac4d3a->enter($__internal_5e6a3503cd84f83c039bf6ed5a6dc4b0d828b711757b66dd9c8a21f5ddac4d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e6a3503cd84f83c039bf6ed5a6dc4b0d828b711757b66dd9c8a21f5ddac4d3a->leave($__internal_5e6a3503cd84f83c039bf6ed5a6dc4b0d828b711757b66dd9c8a21f5ddac4d3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b575a80e6d5a858910096c335b452bbef4b1e57992491c28befbcc2ddd21666 = $this->env->getExtension("native_profiler");
        $__internal_2b575a80e6d5a858910096c335b452bbef4b1e57992491c28befbcc2ddd21666->enter($__internal_2b575a80e6d5a858910096c335b452bbef4b1e57992491c28befbcc2ddd21666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_2b575a80e6d5a858910096c335b452bbef4b1e57992491c28befbcc2ddd21666->leave($__internal_2b575a80e6d5a858910096c335b452bbef4b1e57992491c28befbcc2ddd21666_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
