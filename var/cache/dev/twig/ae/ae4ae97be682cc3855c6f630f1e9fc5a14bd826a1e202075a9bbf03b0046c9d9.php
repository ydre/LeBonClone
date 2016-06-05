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
        $__internal_fa0349f36c9b5737f91b12ca6fd8d9bfbdf9d5b2cd58b45d4f34b5ea65700e5f = $this->env->getExtension("native_profiler");
        $__internal_fa0349f36c9b5737f91b12ca6fd8d9bfbdf9d5b2cd58b45d4f34b5ea65700e5f->enter($__internal_fa0349f36c9b5737f91b12ca6fd8d9bfbdf9d5b2cd58b45d4f34b5ea65700e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa0349f36c9b5737f91b12ca6fd8d9bfbdf9d5b2cd58b45d4f34b5ea65700e5f->leave($__internal_fa0349f36c9b5737f91b12ca6fd8d9bfbdf9d5b2cd58b45d4f34b5ea65700e5f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c63bbe24aca6985628841fdf81a4402adb9332909f7d199934fbc82a0dfe659d = $this->env->getExtension("native_profiler");
        $__internal_c63bbe24aca6985628841fdf81a4402adb9332909f7d199934fbc82a0dfe659d->enter($__internal_c63bbe24aca6985628841fdf81a4402adb9332909f7d199934fbc82a0dfe659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c63bbe24aca6985628841fdf81a4402adb9332909f7d199934fbc82a0dfe659d->leave($__internal_c63bbe24aca6985628841fdf81a4402adb9332909f7d199934fbc82a0dfe659d_prof);

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
