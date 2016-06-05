<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_4e9ace24968343f18e9d1de92fa5ae6d043aec6c4e2c9971c31eeb80fde9d25e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_0e71be76f89e1c995f78627de46b00edc21b8c3e7c9ba06445b1ceae6bae29c0 = $this->env->getExtension("native_profiler");
        $__internal_0e71be76f89e1c995f78627de46b00edc21b8c3e7c9ba06445b1ceae6bae29c0->enter($__internal_0e71be76f89e1c995f78627de46b00edc21b8c3e7c9ba06445b1ceae6bae29c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e71be76f89e1c995f78627de46b00edc21b8c3e7c9ba06445b1ceae6bae29c0->leave($__internal_0e71be76f89e1c995f78627de46b00edc21b8c3e7c9ba06445b1ceae6bae29c0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51b3ad6094e0776f78f2b92dc574f60dbb412dfa52147e3f05f1a829116b297c = $this->env->getExtension("native_profiler");
        $__internal_51b3ad6094e0776f78f2b92dc574f60dbb412dfa52147e3f05f1a829116b297c->enter($__internal_51b3ad6094e0776f78f2b92dc574f60dbb412dfa52147e3f05f1a829116b297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_51b3ad6094e0776f78f2b92dc574f60dbb412dfa52147e3f05f1a829116b297c->leave($__internal_51b3ad6094e0776f78f2b92dc574f60dbb412dfa52147e3f05f1a829116b297c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
