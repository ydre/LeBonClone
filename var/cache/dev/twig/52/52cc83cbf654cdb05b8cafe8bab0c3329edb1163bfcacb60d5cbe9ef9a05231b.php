<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_044576236ecb90f49181b91df456e432060129adcc089e4f6a7215e9f9332ea0 extends Twig_Template
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
        $__internal_02b2d659e63bbe8f582add65ac674a9ab43265bd461bb0e5a1221c14428b7f82 = $this->env->getExtension("native_profiler");
        $__internal_02b2d659e63bbe8f582add65ac674a9ab43265bd461bb0e5a1221c14428b7f82->enter($__internal_02b2d659e63bbe8f582add65ac674a9ab43265bd461bb0e5a1221c14428b7f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_02b2d659e63bbe8f582add65ac674a9ab43265bd461bb0e5a1221c14428b7f82->leave($__internal_02b2d659e63bbe8f582add65ac674a9ab43265bd461bb0e5a1221c14428b7f82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
