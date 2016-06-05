<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_aa3b736ba5e85a6955f6c341cc052c5d65d8c383de349a050def74af5496e42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_879a6f5c4a4948ef40827ed20fdc27a33b24f57773ffaa7a69906a371b1e8360 = $this->env->getExtension("native_profiler");
        $__internal_879a6f5c4a4948ef40827ed20fdc27a33b24f57773ffaa7a69906a371b1e8360->enter($__internal_879a6f5c4a4948ef40827ed20fdc27a33b24f57773ffaa7a69906a371b1e8360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879a6f5c4a4948ef40827ed20fdc27a33b24f57773ffaa7a69906a371b1e8360->leave($__internal_879a6f5c4a4948ef40827ed20fdc27a33b24f57773ffaa7a69906a371b1e8360_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bc6cfc2ef92ee7675f89bcf8f9c40343ebb12b1eda72c325ae50e417ca9fbc6 = $this->env->getExtension("native_profiler");
        $__internal_1bc6cfc2ef92ee7675f89bcf8f9c40343ebb12b1eda72c325ae50e417ca9fbc6->enter($__internal_1bc6cfc2ef92ee7675f89bcf8f9c40343ebb12b1eda72c325ae50e417ca9fbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1bc6cfc2ef92ee7675f89bcf8f9c40343ebb12b1eda72c325ae50e417ca9fbc6->leave($__internal_1bc6cfc2ef92ee7675f89bcf8f9c40343ebb12b1eda72c325ae50e417ca9fbc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
