<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_8702e789b3f9bdf44b01c92cedaa66334c52b9933dc342d1b6658302e28179a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_f0f4c8d99823a10d028b40771a772fbf9f5a339376d899a8cde8b628b88f0ddc = $this->env->getExtension("native_profiler");
        $__internal_f0f4c8d99823a10d028b40771a772fbf9f5a339376d899a8cde8b628b88f0ddc->enter($__internal_f0f4c8d99823a10d028b40771a772fbf9f5a339376d899a8cde8b628b88f0ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f4c8d99823a10d028b40771a772fbf9f5a339376d899a8cde8b628b88f0ddc->leave($__internal_f0f4c8d99823a10d028b40771a772fbf9f5a339376d899a8cde8b628b88f0ddc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6360e1e9043fabf87fb719b8c281b5e897932b40c4a596d940f5a6c6a037a20 = $this->env->getExtension("native_profiler");
        $__internal_d6360e1e9043fabf87fb719b8c281b5e897932b40c4a596d940f5a6c6a037a20->enter($__internal_d6360e1e9043fabf87fb719b8c281b5e897932b40c4a596d940f5a6c6a037a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d6360e1e9043fabf87fb719b8c281b5e897932b40c4a596d940f5a6c6a037a20->leave($__internal_d6360e1e9043fabf87fb719b8c281b5e897932b40c4a596d940f5a6c6a037a20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
