<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e87df2fcac0925fa6aaba032dcde7bbd1ac2bc61d5ea7952ae4bcb0a1114cd16 extends Twig_Template
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
        $__internal_f50054a03698945e4fb299d0cdf616401d1404b315392389201e2696e8815527 = $this->env->getExtension("native_profiler");
        $__internal_f50054a03698945e4fb299d0cdf616401d1404b315392389201e2696e8815527->enter($__internal_f50054a03698945e4fb299d0cdf616401d1404b315392389201e2696e8815527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f50054a03698945e4fb299d0cdf616401d1404b315392389201e2696e8815527->leave($__internal_f50054a03698945e4fb299d0cdf616401d1404b315392389201e2696e8815527_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
