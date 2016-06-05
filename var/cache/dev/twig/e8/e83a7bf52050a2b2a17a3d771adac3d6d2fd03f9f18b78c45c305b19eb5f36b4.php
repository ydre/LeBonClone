<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b688e3b7e1b4b4927141a4ae759ba7c77006be57a7df2d96db7ee28a064bdb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_36b3d5d1114e51a9ce4996a696be21508cd57f929e5403cc3a934ab2d9d4ce3e = $this->env->getExtension("native_profiler");
        $__internal_36b3d5d1114e51a9ce4996a696be21508cd57f929e5403cc3a934ab2d9d4ce3e->enter($__internal_36b3d5d1114e51a9ce4996a696be21508cd57f929e5403cc3a934ab2d9d4ce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b3d5d1114e51a9ce4996a696be21508cd57f929e5403cc3a934ab2d9d4ce3e->leave($__internal_36b3d5d1114e51a9ce4996a696be21508cd57f929e5403cc3a934ab2d9d4ce3e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53dfc4f4f224a12a68c4bc7715b66873f7ecfc79557e018365d626d04b5e46be = $this->env->getExtension("native_profiler");
        $__internal_53dfc4f4f224a12a68c4bc7715b66873f7ecfc79557e018365d626d04b5e46be->enter($__internal_53dfc4f4f224a12a68c4bc7715b66873f7ecfc79557e018365d626d04b5e46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_53dfc4f4f224a12a68c4bc7715b66873f7ecfc79557e018365d626d04b5e46be->leave($__internal_53dfc4f4f224a12a68c4bc7715b66873f7ecfc79557e018365d626d04b5e46be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
