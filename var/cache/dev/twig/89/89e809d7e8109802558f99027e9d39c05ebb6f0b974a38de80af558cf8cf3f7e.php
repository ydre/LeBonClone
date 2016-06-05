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
        $__internal_a4cff76827b4e6912e89a46eb267b2bbbb35c6dbf5f26ad8ec5a86ee4b6f1c0f = $this->env->getExtension("native_profiler");
        $__internal_a4cff76827b4e6912e89a46eb267b2bbbb35c6dbf5f26ad8ec5a86ee4b6f1c0f->enter($__internal_a4cff76827b4e6912e89a46eb267b2bbbb35c6dbf5f26ad8ec5a86ee4b6f1c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a4cff76827b4e6912e89a46eb267b2bbbb35c6dbf5f26ad8ec5a86ee4b6f1c0f->leave($__internal_a4cff76827b4e6912e89a46eb267b2bbbb35c6dbf5f26ad8ec5a86ee4b6f1c0f_prof);

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
