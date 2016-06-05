<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_986f3f9986dcf3bc87613dc5e7e80ff56010791becaf8b2ae60924dcaf529c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7f9f641d31226667d6f89b9d90695268552d879cf78e1c74f6c0a7a69d11f640 = $this->env->getExtension("native_profiler");
        $__internal_7f9f641d31226667d6f89b9d90695268552d879cf78e1c74f6c0a7a69d11f640->enter($__internal_7f9f641d31226667d6f89b9d90695268552d879cf78e1c74f6c0a7a69d11f640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 2
        $context["page_title"] = "inscription";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f9f641d31226667d6f89b9d90695268552d879cf78e1c74f6c0a7a69d11f640->leave($__internal_7f9f641d31226667d6f89b9d90695268552d879cf78e1c74f6c0a7a69d11f640_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31375b70c2c978287db84502a259725c7830a4d04f54c451510de636c30ca369 = $this->env->getExtension("native_profiler");
        $__internal_31375b70c2c978287db84502a259725c7830a4d04f54c451510de636c30ca369->enter($__internal_31375b70c2c978287db84502a259725c7830a4d04f54c451510de636c30ca369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_31375b70c2c978287db84502a259725c7830a4d04f54c451510de636c30ca369->leave($__internal_31375b70c2c978287db84502a259725c7830a4d04f54c451510de636c30ca369_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% set page_title = "inscription" %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
