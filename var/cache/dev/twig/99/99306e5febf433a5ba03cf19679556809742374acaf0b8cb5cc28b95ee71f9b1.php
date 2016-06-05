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
        $__internal_544e5e4022db05029345b494ee6e96c71adf7654d33b5fb7e7c3032e071dd498 = $this->env->getExtension("native_profiler");
        $__internal_544e5e4022db05029345b494ee6e96c71adf7654d33b5fb7e7c3032e071dd498->enter($__internal_544e5e4022db05029345b494ee6e96c71adf7654d33b5fb7e7c3032e071dd498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_544e5e4022db05029345b494ee6e96c71adf7654d33b5fb7e7c3032e071dd498->leave($__internal_544e5e4022db05029345b494ee6e96c71adf7654d33b5fb7e7c3032e071dd498_prof);

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
