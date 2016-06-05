<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_35fd899d9b63bb02323f6d26607da0c74759d84e0ff204a74bd922539fc7f737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_537db001d3b0b630855eaec789ec3da75cf486e3b47ca63347aa78023d9ce4ca = $this->env->getExtension("native_profiler");
        $__internal_537db001d3b0b630855eaec789ec3da75cf486e3b47ca63347aa78023d9ce4ca->enter($__internal_537db001d3b0b630855eaec789ec3da75cf486e3b47ca63347aa78023d9ce4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        // line 2
        $context["page_title"] = "édition du profil";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537db001d3b0b630855eaec789ec3da75cf486e3b47ca63347aa78023d9ce4ca->leave($__internal_537db001d3b0b630855eaec789ec3da75cf486e3b47ca63347aa78023d9ce4ca_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77f3d553c06f79b44e3bf63e2c02873b9780de7e32e592960436908068b1e260 = $this->env->getExtension("native_profiler");
        $__internal_77f3d553c06f79b44e3bf63e2c02873b9780de7e32e592960436908068b1e260->enter($__internal_77f3d553c06f79b44e3bf63e2c02873b9780de7e32e592960436908068b1e260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 5)->display($context);
        
        $__internal_77f3d553c06f79b44e3bf63e2c02873b9780de7e32e592960436908068b1e260->leave($__internal_77f3d553c06f79b44e3bf63e2c02873b9780de7e32e592960436908068b1e260_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
