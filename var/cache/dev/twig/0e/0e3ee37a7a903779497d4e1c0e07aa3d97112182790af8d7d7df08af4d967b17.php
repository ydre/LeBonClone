<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_3df9f502df2a3ea889621d3551affd4ee06d4d2fb678e0cbac12d2e87c2fe8f1 extends Twig_Template
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
        $__internal_058260a0bfe8b2cd0ae627d6f56179fe3501e6ae5f25090abca586919c0d41e2 = $this->env->getExtension("native_profiler");
        $__internal_058260a0bfe8b2cd0ae627d6f56179fe3501e6ae5f25090abca586919c0d41e2->enter($__internal_058260a0bfe8b2cd0ae627d6f56179fe3501e6ae5f25090abca586919c0d41e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_058260a0bfe8b2cd0ae627d6f56179fe3501e6ae5f25090abca586919c0d41e2->leave($__internal_058260a0bfe8b2cd0ae627d6f56179fe3501e6ae5f25090abca586919c0d41e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
