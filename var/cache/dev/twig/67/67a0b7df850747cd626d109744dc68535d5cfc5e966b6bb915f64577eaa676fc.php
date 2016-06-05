<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_02e857e5ade7e334caa3a1176690bafc02f9e9fe3b1f5fec85ce3f9be21e1c86 extends Twig_Template
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
        $__internal_2bafeb72ed4cc5c36c16e5f3819178cabd959d3e1e2577f447e9920afcd9499b = $this->env->getExtension("native_profiler");
        $__internal_2bafeb72ed4cc5c36c16e5f3819178cabd959d3e1e2577f447e9920afcd9499b->enter($__internal_2bafeb72ed4cc5c36c16e5f3819178cabd959d3e1e2577f447e9920afcd9499b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2bafeb72ed4cc5c36c16e5f3819178cabd959d3e1e2577f447e9920afcd9499b->leave($__internal_2bafeb72ed4cc5c36c16e5f3819178cabd959d3e1e2577f447e9920afcd9499b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
