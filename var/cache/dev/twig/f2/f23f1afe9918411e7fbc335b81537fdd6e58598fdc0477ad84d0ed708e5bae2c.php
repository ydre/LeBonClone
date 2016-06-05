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
        $__internal_5c9a7dc6d53c927d74b64a5164614d0d8c526e6210529b0109a11dc864be43d9 = $this->env->getExtension("native_profiler");
        $__internal_5c9a7dc6d53c927d74b64a5164614d0d8c526e6210529b0109a11dc864be43d9->enter($__internal_5c9a7dc6d53c927d74b64a5164614d0d8c526e6210529b0109a11dc864be43d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5c9a7dc6d53c927d74b64a5164614d0d8c526e6210529b0109a11dc864be43d9->leave($__internal_5c9a7dc6d53c927d74b64a5164614d0d8c526e6210529b0109a11dc864be43d9_prof);

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
