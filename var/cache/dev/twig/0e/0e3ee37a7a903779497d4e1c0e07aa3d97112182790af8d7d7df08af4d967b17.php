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
        $__internal_c6883418319a934825e1bfa003556c3014021856af34c0a79917d242b80c670c = $this->env->getExtension("native_profiler");
        $__internal_c6883418319a934825e1bfa003556c3014021856af34c0a79917d242b80c670c->enter($__internal_c6883418319a934825e1bfa003556c3014021856af34c0a79917d242b80c670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_c6883418319a934825e1bfa003556c3014021856af34c0a79917d242b80c670c->leave($__internal_c6883418319a934825e1bfa003556c3014021856af34c0a79917d242b80c670c_prof);

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
