<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bcbc05ea92b0e3de71ee887fbc4e62e12cc18252956d0a51aebcf4cfebabc394 extends Twig_Template
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
        $__internal_779082ea124516d85d6a309df20fded164f10b8cb2c41f64ec7653dbf2c0ea46 = $this->env->getExtension("native_profiler");
        $__internal_779082ea124516d85d6a309df20fded164f10b8cb2c41f64ec7653dbf2c0ea46->enter($__internal_779082ea124516d85d6a309df20fded164f10b8cb2c41f64ec7653dbf2c0ea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_779082ea124516d85d6a309df20fded164f10b8cb2c41f64ec7653dbf2c0ea46->leave($__internal_779082ea124516d85d6a309df20fded164f10b8cb2c41f64ec7653dbf2c0ea46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
