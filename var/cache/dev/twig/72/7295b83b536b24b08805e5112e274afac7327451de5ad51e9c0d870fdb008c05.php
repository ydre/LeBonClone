<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_85e478ed677841f0bbe2232919f4e75106768e4116a963ca36a04b515038d8a2 extends Twig_Template
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
        $__internal_f886ae10a7f64f303d0f61a01f2bb11fd7d43c402a4935a51a34fe77bdf78abb = $this->env->getExtension("native_profiler");
        $__internal_f886ae10a7f64f303d0f61a01f2bb11fd7d43c402a4935a51a34fe77bdf78abb->enter($__internal_f886ae10a7f64f303d0f61a01f2bb11fd7d43c402a4935a51a34fe77bdf78abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f886ae10a7f64f303d0f61a01f2bb11fd7d43c402a4935a51a34fe77bdf78abb->leave($__internal_f886ae10a7f64f303d0f61a01f2bb11fd7d43c402a4935a51a34fe77bdf78abb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
