<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_687fd3f80c5f386be468b1b8b29ca3d85fd6eafcfd5357edcb50b310e1219fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_dd05dd7a8193fbc73ff65ee76b9a9c78ee0f44ec44201b7278bfa90fef08e8c5 = $this->env->getExtension("native_profiler");
        $__internal_dd05dd7a8193fbc73ff65ee76b9a9c78ee0f44ec44201b7278bfa90fef08e8c5->enter($__internal_dd05dd7a8193fbc73ff65ee76b9a9c78ee0f44ec44201b7278bfa90fef08e8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd05dd7a8193fbc73ff65ee76b9a9c78ee0f44ec44201b7278bfa90fef08e8c5->leave($__internal_dd05dd7a8193fbc73ff65ee76b9a9c78ee0f44ec44201b7278bfa90fef08e8c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92e89f8cca602f1e9faa629d2256a9ce1f12e1c5ff3c0d8e8ddf3144da85cb06 = $this->env->getExtension("native_profiler");
        $__internal_92e89f8cca602f1e9faa629d2256a9ce1f12e1c5ff3c0d8e8ddf3144da85cb06->enter($__internal_92e89f8cca602f1e9faa629d2256a9ce1f12e1c5ff3c0d8e8ddf3144da85cb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_92e89f8cca602f1e9faa629d2256a9ce1f12e1c5ff3c0d8e8ddf3144da85cb06->leave($__internal_92e89f8cca602f1e9faa629d2256a9ce1f12e1c5ff3c0d8e8ddf3144da85cb06_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
