<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b688e3b7e1b4b4927141a4ae759ba7c77006be57a7df2d96db7ee28a064bdb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_52a68af0f9ea4af2dfb67980bf70ace0489962b2d283e92daf516cc0e175bbcd = $this->env->getExtension("native_profiler");
        $__internal_52a68af0f9ea4af2dfb67980bf70ace0489962b2d283e92daf516cc0e175bbcd->enter($__internal_52a68af0f9ea4af2dfb67980bf70ace0489962b2d283e92daf516cc0e175bbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a68af0f9ea4af2dfb67980bf70ace0489962b2d283e92daf516cc0e175bbcd->leave($__internal_52a68af0f9ea4af2dfb67980bf70ace0489962b2d283e92daf516cc0e175bbcd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdaa393611b8b5f9417018be94c90974cfc25c0019d043ca00a4e2825fa82eb0 = $this->env->getExtension("native_profiler");
        $__internal_fdaa393611b8b5f9417018be94c90974cfc25c0019d043ca00a4e2825fa82eb0->enter($__internal_fdaa393611b8b5f9417018be94c90974cfc25c0019d043ca00a4e2825fa82eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_fdaa393611b8b5f9417018be94c90974cfc25c0019d043ca00a4e2825fa82eb0->leave($__internal_fdaa393611b8b5f9417018be94c90974cfc25c0019d043ca00a4e2825fa82eb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
