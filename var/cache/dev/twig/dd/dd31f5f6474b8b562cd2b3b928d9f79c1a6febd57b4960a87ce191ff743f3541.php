<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_46ce04d3ea225b9036f190c110689ae081d81a441aeb37ba771c92ed2a332d1d extends Twig_Template
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
        $__internal_be83dad537e87467dd182c28696b554414f9d3f077438d0ba9f75c495510d356 = $this->env->getExtension("native_profiler");
        $__internal_be83dad537e87467dd182c28696b554414f9d3f077438d0ba9f75c495510d356->enter($__internal_be83dad537e87467dd182c28696b554414f9d3f077438d0ba9f75c495510d356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_be83dad537e87467dd182c28696b554414f9d3f077438d0ba9f75c495510d356->leave($__internal_be83dad537e87467dd182c28696b554414f9d3f077438d0ba9f75c495510d356_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
