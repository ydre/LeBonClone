<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c27037f3e25f67e9d8cad7b4bf9c1af0711c3d63be6209c0a5e1af35dde8a657 extends Twig_Template
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
        $__internal_ce79aa34635274be6afd81ca8c50581e2e6fc5b2bb98eeb940141727c63ad9cc = $this->env->getExtension("native_profiler");
        $__internal_ce79aa34635274be6afd81ca8c50581e2e6fc5b2bb98eeb940141727c63ad9cc->enter($__internal_ce79aa34635274be6afd81ca8c50581e2e6fc5b2bb98eeb940141727c63ad9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ce79aa34635274be6afd81ca8c50581e2e6fc5b2bb98eeb940141727c63ad9cc->leave($__internal_ce79aa34635274be6afd81ca8c50581e2e6fc5b2bb98eeb940141727c63ad9cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
