<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cdc424ca504d693d8188a0d3758ca4d377a7ed6f55c2e571bc32da59534d14c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_0397cebcf64440fa5043c5c64f61a4bbc01801edd2cf00223be4a1ef12579965 = $this->env->getExtension("native_profiler");
        $__internal_0397cebcf64440fa5043c5c64f61a4bbc01801edd2cf00223be4a1ef12579965->enter($__internal_0397cebcf64440fa5043c5c64f61a4bbc01801edd2cf00223be4a1ef12579965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0397cebcf64440fa5043c5c64f61a4bbc01801edd2cf00223be4a1ef12579965->leave($__internal_0397cebcf64440fa5043c5c64f61a4bbc01801edd2cf00223be4a1ef12579965_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d71862dca3e734640429883820f3a74020d9f3cfffd9054c0066eccc1a119f7 = $this->env->getExtension("native_profiler");
        $__internal_3d71862dca3e734640429883820f3a74020d9f3cfffd9054c0066eccc1a119f7->enter($__internal_3d71862dca3e734640429883820f3a74020d9f3cfffd9054c0066eccc1a119f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_3d71862dca3e734640429883820f3a74020d9f3cfffd9054c0066eccc1a119f7->leave($__internal_3d71862dca3e734640429883820f3a74020d9f3cfffd9054c0066eccc1a119f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
