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
        $__internal_83745e71c1a092c70507b0c3c72593f19935f8d4014861e160971f4f0ddcd838 = $this->env->getExtension("native_profiler");
        $__internal_83745e71c1a092c70507b0c3c72593f19935f8d4014861e160971f4f0ddcd838->enter($__internal_83745e71c1a092c70507b0c3c72593f19935f8d4014861e160971f4f0ddcd838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_83745e71c1a092c70507b0c3c72593f19935f8d4014861e160971f4f0ddcd838->leave($__internal_83745e71c1a092c70507b0c3c72593f19935f8d4014861e160971f4f0ddcd838_prof);

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
