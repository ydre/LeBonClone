<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_b9f127dee0868a6287ace44e97b289265f1fd5b74a2a67da32bd0b760c4afb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4f0fc8e3907661b38509daad30377da3cd7ec1eda62787a572996bb8a529382f = $this->env->getExtension("native_profiler");
        $__internal_4f0fc8e3907661b38509daad30377da3cd7ec1eda62787a572996bb8a529382f->enter($__internal_4f0fc8e3907661b38509daad30377da3cd7ec1eda62787a572996bb8a529382f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0fc8e3907661b38509daad30377da3cd7ec1eda62787a572996bb8a529382f->leave($__internal_4f0fc8e3907661b38509daad30377da3cd7ec1eda62787a572996bb8a529382f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3da152d0f5adeaef68b482f62a44552982893e20cd708c7a61c97e1992f07c1d = $this->env->getExtension("native_profiler");
        $__internal_3da152d0f5adeaef68b482f62a44552982893e20cd708c7a61c97e1992f07c1d->enter($__internal_3da152d0f5adeaef68b482f62a44552982893e20cd708c7a61c97e1992f07c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3da152d0f5adeaef68b482f62a44552982893e20cd708c7a61c97e1992f07c1d->leave($__internal_3da152d0f5adeaef68b482f62a44552982893e20cd708c7a61c97e1992f07c1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
