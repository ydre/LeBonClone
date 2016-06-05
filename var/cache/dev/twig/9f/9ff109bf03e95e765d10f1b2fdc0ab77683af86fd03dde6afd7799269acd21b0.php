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
        $__internal_b56836af85ad879d412d8e604812da899eb81270afd528901cd5e64583d13fe2 = $this->env->getExtension("native_profiler");
        $__internal_b56836af85ad879d412d8e604812da899eb81270afd528901cd5e64583d13fe2->enter($__internal_b56836af85ad879d412d8e604812da899eb81270afd528901cd5e64583d13fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b56836af85ad879d412d8e604812da899eb81270afd528901cd5e64583d13fe2->leave($__internal_b56836af85ad879d412d8e604812da899eb81270afd528901cd5e64583d13fe2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_979a18598afd6ae4dc2b2a1fcfbe143b7d8d1d8034872672b00dbe55b6f4bf6f = $this->env->getExtension("native_profiler");
        $__internal_979a18598afd6ae4dc2b2a1fcfbe143b7d8d1d8034872672b00dbe55b6f4bf6f->enter($__internal_979a18598afd6ae4dc2b2a1fcfbe143b7d8d1d8034872672b00dbe55b6f4bf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_979a18598afd6ae4dc2b2a1fcfbe143b7d8d1d8034872672b00dbe55b6f4bf6f->leave($__internal_979a18598afd6ae4dc2b2a1fcfbe143b7d8d1d8034872672b00dbe55b6f4bf6f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_27b4f7c3d241d2ee90b86a635b0adc079684ea51535128cba709b86da0e4d365 = $this->env->getExtension("native_profiler");
        $__internal_27b4f7c3d241d2ee90b86a635b0adc079684ea51535128cba709b86da0e4d365->enter($__internal_27b4f7c3d241d2ee90b86a635b0adc079684ea51535128cba709b86da0e4d365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_27b4f7c3d241d2ee90b86a635b0adc079684ea51535128cba709b86da0e4d365->leave($__internal_27b4f7c3d241d2ee90b86a635b0adc079684ea51535128cba709b86da0e4d365_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_95c4c74ae1c784eaa68ef9502d72b4d7b3bdb5b8bb0135a2e9febe5e8ce65566 = $this->env->getExtension("native_profiler");
        $__internal_95c4c74ae1c784eaa68ef9502d72b4d7b3bdb5b8bb0135a2e9febe5e8ce65566->enter($__internal_95c4c74ae1c784eaa68ef9502d72b4d7b3bdb5b8bb0135a2e9febe5e8ce65566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_95c4c74ae1c784eaa68ef9502d72b4d7b3bdb5b8bb0135a2e9febe5e8ce65566->leave($__internal_95c4c74ae1c784eaa68ef9502d72b4d7b3bdb5b8bb0135a2e9febe5e8ce65566_prof);

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
