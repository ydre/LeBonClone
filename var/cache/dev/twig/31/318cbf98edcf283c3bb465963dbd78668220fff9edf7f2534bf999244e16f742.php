<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f055c75995877453da96011c674e63498c0d11635b8ab54d24a681d65712c88c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_4eb7c6e52cc7600819afe2b4da69b899ff0d4c87d1ff95b7c07e26af64a8353e = $this->env->getExtension("native_profiler");
        $__internal_4eb7c6e52cc7600819afe2b4da69b899ff0d4c87d1ff95b7c07e26af64a8353e->enter($__internal_4eb7c6e52cc7600819afe2b4da69b899ff0d4c87d1ff95b7c07e26af64a8353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb7c6e52cc7600819afe2b4da69b899ff0d4c87d1ff95b7c07e26af64a8353e->leave($__internal_4eb7c6e52cc7600819afe2b4da69b899ff0d4c87d1ff95b7c07e26af64a8353e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc8325e8f1097e7f55e0cc00ace4851227e4528b27fdeb0fb9ac0e2915f89bff = $this->env->getExtension("native_profiler");
        $__internal_bc8325e8f1097e7f55e0cc00ace4851227e4528b27fdeb0fb9ac0e2915f89bff->enter($__internal_bc8325e8f1097e7f55e0cc00ace4851227e4528b27fdeb0fb9ac0e2915f89bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_bc8325e8f1097e7f55e0cc00ace4851227e4528b27fdeb0fb9ac0e2915f89bff->leave($__internal_bc8325e8f1097e7f55e0cc00ace4851227e4528b27fdeb0fb9ac0e2915f89bff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
