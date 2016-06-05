<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1a970a024351588d2531ee6adcabc59ee89efe4cffaeff993a2a5b4c6b8c40d4 extends Twig_Template
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
        $__internal_b23352d94c3ad024738a9755d6ec306512cebae815e4566d661508537a3ff766 = $this->env->getExtension("native_profiler");
        $__internal_b23352d94c3ad024738a9755d6ec306512cebae815e4566d661508537a3ff766->enter($__internal_b23352d94c3ad024738a9755d6ec306512cebae815e4566d661508537a3ff766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b23352d94c3ad024738a9755d6ec306512cebae815e4566d661508537a3ff766->leave($__internal_b23352d94c3ad024738a9755d6ec306512cebae815e4566d661508537a3ff766_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
