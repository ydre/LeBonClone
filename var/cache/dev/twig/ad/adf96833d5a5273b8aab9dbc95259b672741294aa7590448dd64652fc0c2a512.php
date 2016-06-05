<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_af0965bd5906fb83f32e77f1f9de8453d70852d7e8898df43c6492e63bf42326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_e358b3fcab09634bcbe29c8a8667c7ded8cf3ce7a53e38e0d73e7265372fed56 = $this->env->getExtension("native_profiler");
        $__internal_e358b3fcab09634bcbe29c8a8667c7ded8cf3ce7a53e38e0d73e7265372fed56->enter($__internal_e358b3fcab09634bcbe29c8a8667c7ded8cf3ce7a53e38e0d73e7265372fed56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e358b3fcab09634bcbe29c8a8667c7ded8cf3ce7a53e38e0d73e7265372fed56->leave($__internal_e358b3fcab09634bcbe29c8a8667c7ded8cf3ce7a53e38e0d73e7265372fed56_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69881edbdff7d7b6784a628845411d62f4181355a903bd88cb171b9f054645b3 = $this->env->getExtension("native_profiler");
        $__internal_69881edbdff7d7b6784a628845411d62f4181355a903bd88cb171b9f054645b3->enter($__internal_69881edbdff7d7b6784a628845411d62f4181355a903bd88cb171b9f054645b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_69881edbdff7d7b6784a628845411d62f4181355a903bd88cb171b9f054645b3->leave($__internal_69881edbdff7d7b6784a628845411d62f4181355a903bd88cb171b9f054645b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
