<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_578fa00ede8e8bbc685518523eb660c2c88130593a3c68f40ab9fa56743ce531 extends Twig_Template
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
        $__internal_c8f62c6582bed18285bc350d344fc5087e5f5494c3b92a4902c3914823b277ce = $this->env->getExtension("native_profiler");
        $__internal_c8f62c6582bed18285bc350d344fc5087e5f5494c3b92a4902c3914823b277ce->enter($__internal_c8f62c6582bed18285bc350d344fc5087e5f5494c3b92a4902c3914823b277ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c8f62c6582bed18285bc350d344fc5087e5f5494c3b92a4902c3914823b277ce->leave($__internal_c8f62c6582bed18285bc350d344fc5087e5f5494c3b92a4902c3914823b277ce_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3437bcf845e07f86398606b30558ecec03c633a6d89e535f4e3d73a6903094df = $this->env->getExtension("native_profiler");
        $__internal_3437bcf845e07f86398606b30558ecec03c633a6d89e535f4e3d73a6903094df->enter($__internal_3437bcf845e07f86398606b30558ecec03c633a6d89e535f4e3d73a6903094df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3437bcf845e07f86398606b30558ecec03c633a6d89e535f4e3d73a6903094df->leave($__internal_3437bcf845e07f86398606b30558ecec03c633a6d89e535f4e3d73a6903094df_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2df192fa1b75e789b76da27887340044056dcca917417b9a99a392bc89328f06 = $this->env->getExtension("native_profiler");
        $__internal_2df192fa1b75e789b76da27887340044056dcca917417b9a99a392bc89328f06->enter($__internal_2df192fa1b75e789b76da27887340044056dcca917417b9a99a392bc89328f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2df192fa1b75e789b76da27887340044056dcca917417b9a99a392bc89328f06->leave($__internal_2df192fa1b75e789b76da27887340044056dcca917417b9a99a392bc89328f06_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e08a620cbf5d6008f95a882512ec2207428fde3c7dce056f6860530bbfd4630 = $this->env->getExtension("native_profiler");
        $__internal_5e08a620cbf5d6008f95a882512ec2207428fde3c7dce056f6860530bbfd4630->enter($__internal_5e08a620cbf5d6008f95a882512ec2207428fde3c7dce056f6860530bbfd4630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e08a620cbf5d6008f95a882512ec2207428fde3c7dce056f6860530bbfd4630->leave($__internal_5e08a620cbf5d6008f95a882512ec2207428fde3c7dce056f6860530bbfd4630_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
