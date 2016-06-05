<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4c9c604146e24d6b25202f0793ed87b1f1e1ee99d948c4383eb58c4aaab3da3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83fbe5ee6aed4c3e93d7cf6b5d5a503ac846d345f002379ea1605c1c6f763f69 = $this->env->getExtension("native_profiler");
        $__internal_83fbe5ee6aed4c3e93d7cf6b5d5a503ac846d345f002379ea1605c1c6f763f69->enter($__internal_83fbe5ee6aed4c3e93d7cf6b5d5a503ac846d345f002379ea1605c1c6f763f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_83fbe5ee6aed4c3e93d7cf6b5d5a503ac846d345f002379ea1605c1c6f763f69->leave($__internal_83fbe5ee6aed4c3e93d7cf6b5d5a503ac846d345f002379ea1605c1c6f763f69_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d552189af29be208ae82a751b92723c1d80db2f1e97594c1217dba9607745804 = $this->env->getExtension("native_profiler");
        $__internal_d552189af29be208ae82a751b92723c1d80db2f1e97594c1217dba9607745804->enter($__internal_d552189af29be208ae82a751b92723c1d80db2f1e97594c1217dba9607745804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d552189af29be208ae82a751b92723c1d80db2f1e97594c1217dba9607745804->leave($__internal_d552189af29be208ae82a751b92723c1d80db2f1e97594c1217dba9607745804_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fbc41bd10b9a9f56f73d61825e31f21bed1a017babcbebf5f4ec3c61df73aa3d = $this->env->getExtension("native_profiler");
        $__internal_fbc41bd10b9a9f56f73d61825e31f21bed1a017babcbebf5f4ec3c61df73aa3d->enter($__internal_fbc41bd10b9a9f56f73d61825e31f21bed1a017babcbebf5f4ec3c61df73aa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fbc41bd10b9a9f56f73d61825e31f21bed1a017babcbebf5f4ec3c61df73aa3d->leave($__internal_fbc41bd10b9a9f56f73d61825e31f21bed1a017babcbebf5f4ec3c61df73aa3d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c1c111b9f3c1039262a9333965c6207b2e699edd24d69d83886a3d8b74f273cb = $this->env->getExtension("native_profiler");
        $__internal_c1c111b9f3c1039262a9333965c6207b2e699edd24d69d83886a3d8b74f273cb->enter($__internal_c1c111b9f3c1039262a9333965c6207b2e699edd24d69d83886a3d8b74f273cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c1c111b9f3c1039262a9333965c6207b2e699edd24d69d83886a3d8b74f273cb->leave($__internal_c1c111b9f3c1039262a9333965c6207b2e699edd24d69d83886a3d8b74f273cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
