<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b0179d20c4055abfda9b1a8266fab146a6db53fd3f36d4d56639f2c1834e3756 extends Twig_Template
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
        $__internal_21970fe50af6bcb7acfbc4022a56f57bb1a7f41ee728d8ed97f4b2ef5341b87d = $this->env->getExtension("native_profiler");
        $__internal_21970fe50af6bcb7acfbc4022a56f57bb1a7f41ee728d8ed97f4b2ef5341b87d->enter($__internal_21970fe50af6bcb7acfbc4022a56f57bb1a7f41ee728d8ed97f4b2ef5341b87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_21970fe50af6bcb7acfbc4022a56f57bb1a7f41ee728d8ed97f4b2ef5341b87d->leave($__internal_21970fe50af6bcb7acfbc4022a56f57bb1a7f41ee728d8ed97f4b2ef5341b87d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
