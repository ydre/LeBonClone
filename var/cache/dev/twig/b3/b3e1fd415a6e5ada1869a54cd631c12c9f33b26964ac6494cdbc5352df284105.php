<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_467352971b4cb54ce52b002aed2c4a9f19cef876365eee58fa90c222c2c4af49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddeae5dee3ea01430f43279ab7e05d8c88e50a75143461dc8f4832f9966416f0 = $this->env->getExtension("native_profiler");
        $__internal_ddeae5dee3ea01430f43279ab7e05d8c88e50a75143461dc8f4832f9966416f0->enter($__internal_ddeae5dee3ea01430f43279ab7e05d8c88e50a75143461dc8f4832f9966416f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ddeae5dee3ea01430f43279ab7e05d8c88e50a75143461dc8f4832f9966416f0->leave($__internal_ddeae5dee3ea01430f43279ab7e05d8c88e50a75143461dc8f4832f9966416f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
