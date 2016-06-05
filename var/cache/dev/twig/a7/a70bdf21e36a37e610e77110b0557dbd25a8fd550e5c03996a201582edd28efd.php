<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_35fd899d9b63bb02323f6d26607da0c74759d84e0ff204a74bd922539fc7f737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_09eb7f5db2c8eae104124acc4c6f21dc12701def6d14f8f178558699d377312e = $this->env->getExtension("native_profiler");
        $__internal_09eb7f5db2c8eae104124acc4c6f21dc12701def6d14f8f178558699d377312e->enter($__internal_09eb7f5db2c8eae104124acc4c6f21dc12701def6d14f8f178558699d377312e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09eb7f5db2c8eae104124acc4c6f21dc12701def6d14f8f178558699d377312e->leave($__internal_09eb7f5db2c8eae104124acc4c6f21dc12701def6d14f8f178558699d377312e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_242bd3892fcc32fd9cbea7699125b12c5984ee678b711d28efc9d2bee948125f = $this->env->getExtension("native_profiler");
        $__internal_242bd3892fcc32fd9cbea7699125b12c5984ee678b711d28efc9d2bee948125f->enter($__internal_242bd3892fcc32fd9cbea7699125b12c5984ee678b711d28efc9d2bee948125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_242bd3892fcc32fd9cbea7699125b12c5984ee678b711d28efc9d2bee948125f->leave($__internal_242bd3892fcc32fd9cbea7699125b12c5984ee678b711d28efc9d2bee948125f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
