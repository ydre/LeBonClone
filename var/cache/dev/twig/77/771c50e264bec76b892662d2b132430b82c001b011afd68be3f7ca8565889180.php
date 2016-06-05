<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_19d4e21e095f13226e0b7ec1242abe70cc1b525e9c691fcec27bff2e1206204a extends Twig_Template
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
        $__internal_6fda1accd1eea50b603ffb3ab41c7de954f7d7dc70ebcb8f5fb0bca2ada53aaf = $this->env->getExtension("native_profiler");
        $__internal_6fda1accd1eea50b603ffb3ab41c7de954f7d7dc70ebcb8f5fb0bca2ada53aaf->enter($__internal_6fda1accd1eea50b603ffb3ab41c7de954f7d7dc70ebcb8f5fb0bca2ada53aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_6fda1accd1eea50b603ffb3ab41c7de954f7d7dc70ebcb8f5fb0bca2ada53aaf->leave($__internal_6fda1accd1eea50b603ffb3ab41c7de954f7d7dc70ebcb8f5fb0bca2ada53aaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
