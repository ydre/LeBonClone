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
        $__internal_dd1f05ff60ebfb601497c2d0941b2be0c5b3ab2c7a6263f145afddffe6963230 = $this->env->getExtension("native_profiler");
        $__internal_dd1f05ff60ebfb601497c2d0941b2be0c5b3ab2c7a6263f145afddffe6963230->enter($__internal_dd1f05ff60ebfb601497c2d0941b2be0c5b3ab2c7a6263f145afddffe6963230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd1f05ff60ebfb601497c2d0941b2be0c5b3ab2c7a6263f145afddffe6963230->leave($__internal_dd1f05ff60ebfb601497c2d0941b2be0c5b3ab2c7a6263f145afddffe6963230_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a0514196e984320047967552801ce1e697b9822154df4f9bdd0d867ec9820dd = $this->env->getExtension("native_profiler");
        $__internal_6a0514196e984320047967552801ce1e697b9822154df4f9bdd0d867ec9820dd->enter($__internal_6a0514196e984320047967552801ce1e697b9822154df4f9bdd0d867ec9820dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6a0514196e984320047967552801ce1e697b9822154df4f9bdd0d867ec9820dd->leave($__internal_6a0514196e984320047967552801ce1e697b9822154df4f9bdd0d867ec9820dd_prof);

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
