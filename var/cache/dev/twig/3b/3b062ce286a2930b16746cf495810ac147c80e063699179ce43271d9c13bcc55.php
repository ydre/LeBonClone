<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_45cf15823f4c7b7d57a449ac62218f4293528610507f08c006f9609cddf7351d extends Twig_Template
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
        $__internal_4940ce7a44a5d633b14d88e2f6f6a25d65f187e319c385a6dd14f19fc66f103b = $this->env->getExtension("native_profiler");
        $__internal_4940ce7a44a5d633b14d88e2f6f6a25d65f187e319c385a6dd14f19fc66f103b->enter($__internal_4940ce7a44a5d633b14d88e2f6f6a25d65f187e319c385a6dd14f19fc66f103b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_4940ce7a44a5d633b14d88e2f6f6a25d65f187e319c385a6dd14f19fc66f103b->leave($__internal_4940ce7a44a5d633b14d88e2f6f6a25d65f187e319c385a6dd14f19fc66f103b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
