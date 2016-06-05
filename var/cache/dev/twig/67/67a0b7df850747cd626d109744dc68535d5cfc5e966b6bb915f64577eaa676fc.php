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
        $__internal_f757606c435554b8e84888e55bfdc1b3bfef9f0a17027ead95fff56f38348f8c = $this->env->getExtension("native_profiler");
        $__internal_f757606c435554b8e84888e55bfdc1b3bfef9f0a17027ead95fff56f38348f8c->enter($__internal_f757606c435554b8e84888e55bfdc1b3bfef9f0a17027ead95fff56f38348f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f757606c435554b8e84888e55bfdc1b3bfef9f0a17027ead95fff56f38348f8c->leave($__internal_f757606c435554b8e84888e55bfdc1b3bfef9f0a17027ead95fff56f38348f8c_prof);

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
