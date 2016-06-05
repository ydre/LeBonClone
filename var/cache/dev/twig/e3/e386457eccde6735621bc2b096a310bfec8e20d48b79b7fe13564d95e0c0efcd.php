<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_a62c7c0c07db769ae983956becb0c393f36888ae68a35e9998c96dca69b9d987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a3c026ea871842cb2ef8a889c105e0d3c3ff917b402c34fabd5aea8326d959 = $this->env->getExtension("native_profiler");
        $__internal_44a3c026ea871842cb2ef8a889c105e0d3c3ff917b402c34fabd5aea8326d959->enter($__internal_44a3c026ea871842cb2ef8a889c105e0d3c3ff917b402c34fabd5aea8326d959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>Nom d'utilisateur: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_44a3c026ea871842cb2ef8a889c105e0d3c3ff917b402c34fabd5aea8326d959->leave($__internal_44a3c026ea871842cb2ef8a889c105e0d3c3ff917b402c34fabd5aea8326d959_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>Nom d'utilisateur: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
