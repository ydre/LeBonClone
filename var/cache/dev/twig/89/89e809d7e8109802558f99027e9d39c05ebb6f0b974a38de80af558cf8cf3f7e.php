<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e4b87dda941389dcad55f1a9772113a5295522ee7da4167602cafc826ce3133e extends Twig_Template
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
        $__internal_2ce84dc3979364d246a63b9bf627eacc45cade0f88a61a333fb5daf450dc8839 = $this->env->getExtension("native_profiler");
        $__internal_2ce84dc3979364d246a63b9bf627eacc45cade0f88a61a333fb5daf450dc8839->enter($__internal_2ce84dc3979364d246a63b9bf627eacc45cade0f88a61a333fb5daf450dc8839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2ce84dc3979364d246a63b9bf627eacc45cade0f88a61a333fb5daf450dc8839->leave($__internal_2ce84dc3979364d246a63b9bf627eacc45cade0f88a61a333fb5daf450dc8839_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
