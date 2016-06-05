<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_39b61f57cc74e949be88d99eb07f85b3742ab657729d9b4ebe6b81639ee611a3 extends Twig_Template
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
        $__internal_4ec48e6b688d44c331fb843f46a96922ee0d2e7b72c2e51e1e255428664b4fba = $this->env->getExtension("native_profiler");
        $__internal_4ec48e6b688d44c331fb843f46a96922ee0d2e7b72c2e51e1e255428664b4fba->enter($__internal_4ec48e6b688d44c331fb843f46a96922ee0d2e7b72c2e51e1e255428664b4fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4ec48e6b688d44c331fb843f46a96922ee0d2e7b72c2e51e1e255428664b4fba->leave($__internal_4ec48e6b688d44c331fb843f46a96922ee0d2e7b72c2e51e1e255428664b4fba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
