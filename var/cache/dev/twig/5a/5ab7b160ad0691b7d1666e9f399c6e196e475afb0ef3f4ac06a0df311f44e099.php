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
        $__internal_a988b63262544dcacc0e9d8d47210baede4993cccf53f0e09c73fa8cbd1059d6 = $this->env->getExtension("native_profiler");
        $__internal_a988b63262544dcacc0e9d8d47210baede4993cccf53f0e09c73fa8cbd1059d6->enter($__internal_a988b63262544dcacc0e9d8d47210baede4993cccf53f0e09c73fa8cbd1059d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a988b63262544dcacc0e9d8d47210baede4993cccf53f0e09c73fa8cbd1059d6->leave($__internal_a988b63262544dcacc0e9d8d47210baede4993cccf53f0e09c73fa8cbd1059d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c0a5ea26e32a7dc39556fa2cca2a24ebc0af43af8a31e482fc623f44b584540 = $this->env->getExtension("native_profiler");
        $__internal_4c0a5ea26e32a7dc39556fa2cca2a24ebc0af43af8a31e482fc623f44b584540->enter($__internal_4c0a5ea26e32a7dc39556fa2cca2a24ebc0af43af8a31e482fc623f44b584540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4c0a5ea26e32a7dc39556fa2cca2a24ebc0af43af8a31e482fc623f44b584540->leave($__internal_4c0a5ea26e32a7dc39556fa2cca2a24ebc0af43af8a31e482fc623f44b584540_prof);

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
