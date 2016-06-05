<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_6b1d068d078e70727496384d6fa2837c8b0b4bf0e04e4fc6153306a8b61551ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_aa1dbae5e76185bace81be02027e248f97e20e491e92b799a600b9f44e3439c3 = $this->env->getExtension("native_profiler");
        $__internal_aa1dbae5e76185bace81be02027e248f97e20e491e92b799a600b9f44e3439c3->enter($__internal_aa1dbae5e76185bace81be02027e248f97e20e491e92b799a600b9f44e3439c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa1dbae5e76185bace81be02027e248f97e20e491e92b799a600b9f44e3439c3->leave($__internal_aa1dbae5e76185bace81be02027e248f97e20e491e92b799a600b9f44e3439c3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6d3aa847cb8aec7d4231cae378a947bb128ed45739e8a3dd988c62ac85cfb78 = $this->env->getExtension("native_profiler");
        $__internal_d6d3aa847cb8aec7d4231cae378a947bb128ed45739e8a3dd988c62ac85cfb78->enter($__internal_d6d3aa847cb8aec7d4231cae378a947bb128ed45739e8a3dd988c62ac85cfb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d6d3aa847cb8aec7d4231cae378a947bb128ed45739e8a3dd988c62ac85cfb78->leave($__internal_d6d3aa847cb8aec7d4231cae378a947bb128ed45739e8a3dd988c62ac85cfb78_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
