<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e5c0c023a586bdb060a9eca74e82fddad16e7d6bd582db5c707d74e4dea0377a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8325a6414ffec0cafe5f8d3cea57f91db8d5721f1dd1d4bd1cc115d7f71066b5 = $this->env->getExtension("native_profiler");
        $__internal_8325a6414ffec0cafe5f8d3cea57f91db8d5721f1dd1d4bd1cc115d7f71066b5->enter($__internal_8325a6414ffec0cafe5f8d3cea57f91db8d5721f1dd1d4bd1cc115d7f71066b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8325a6414ffec0cafe5f8d3cea57f91db8d5721f1dd1d4bd1cc115d7f71066b5->leave($__internal_8325a6414ffec0cafe5f8d3cea57f91db8d5721f1dd1d4bd1cc115d7f71066b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c741df9d16e1488985fe9bfa5d788275599b40a9934f0eb814513112181ad97 = $this->env->getExtension("native_profiler");
        $__internal_1c741df9d16e1488985fe9bfa5d788275599b40a9934f0eb814513112181ad97->enter($__internal_1c741df9d16e1488985fe9bfa5d788275599b40a9934f0eb814513112181ad97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1c741df9d16e1488985fe9bfa5d788275599b40a9934f0eb814513112181ad97->leave($__internal_1c741df9d16e1488985fe9bfa5d788275599b40a9934f0eb814513112181ad97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
