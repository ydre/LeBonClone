<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e4ff3f810a93d9f6126a90fa2c47e08cdd4e553c155902463ea6f42add2ffa70 extends Twig_Template
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
        $__internal_231fe6454f1fd633185ca80ae3f8b4ac57c41ef0d719a1d14745c861f50875b6 = $this->env->getExtension("native_profiler");
        $__internal_231fe6454f1fd633185ca80ae3f8b4ac57c41ef0d719a1d14745c861f50875b6->enter($__internal_231fe6454f1fd633185ca80ae3f8b4ac57c41ef0d719a1d14745c861f50875b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_231fe6454f1fd633185ca80ae3f8b4ac57c41ef0d719a1d14745c861f50875b6->leave($__internal_231fe6454f1fd633185ca80ae3f8b4ac57c41ef0d719a1d14745c861f50875b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
