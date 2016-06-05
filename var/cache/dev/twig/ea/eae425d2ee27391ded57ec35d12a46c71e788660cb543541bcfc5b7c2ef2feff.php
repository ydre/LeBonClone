<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_988082743068a193b969ba0b3cfb78f12634a50596cad10bb5cff8520b453252 extends Twig_Template
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
        $__internal_33fc442b52e9b4d42ef0b494985b02698be7c524f1a3aeb5ec3f985806d8aee6 = $this->env->getExtension("native_profiler");
        $__internal_33fc442b52e9b4d42ef0b494985b02698be7c524f1a3aeb5ec3f985806d8aee6->enter($__internal_33fc442b52e9b4d42ef0b494985b02698be7c524f1a3aeb5ec3f985806d8aee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_33fc442b52e9b4d42ef0b494985b02698be7c524f1a3aeb5ec3f985806d8aee6->leave($__internal_33fc442b52e9b4d42ef0b494985b02698be7c524f1a3aeb5ec3f985806d8aee6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7a64db088cf8ee2f875081c528293ef68e0a45528ca8a068b98f9e9d2d8cb231 = $this->env->getExtension("native_profiler");
        $__internal_7a64db088cf8ee2f875081c528293ef68e0a45528ca8a068b98f9e9d2d8cb231->enter($__internal_7a64db088cf8ee2f875081c528293ef68e0a45528ca8a068b98f9e9d2d8cb231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a64db088cf8ee2f875081c528293ef68e0a45528ca8a068b98f9e9d2d8cb231->leave($__internal_7a64db088cf8ee2f875081c528293ef68e0a45528ca8a068b98f9e9d2d8cb231_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_416b56f7b481600309cd0b2d42baebb780c378964e7028997065d047aa1eb5c0 = $this->env->getExtension("native_profiler");
        $__internal_416b56f7b481600309cd0b2d42baebb780c378964e7028997065d047aa1eb5c0->enter($__internal_416b56f7b481600309cd0b2d42baebb780c378964e7028997065d047aa1eb5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_416b56f7b481600309cd0b2d42baebb780c378964e7028997065d047aa1eb5c0->leave($__internal_416b56f7b481600309cd0b2d42baebb780c378964e7028997065d047aa1eb5c0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_10bc89833fa9acd6ec7e9ec089fda330e3c7867b31fe864471c119541726ac8b = $this->env->getExtension("native_profiler");
        $__internal_10bc89833fa9acd6ec7e9ec089fda330e3c7867b31fe864471c119541726ac8b->enter($__internal_10bc89833fa9acd6ec7e9ec089fda330e3c7867b31fe864471c119541726ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_10bc89833fa9acd6ec7e9ec089fda330e3c7867b31fe864471c119541726ac8b->leave($__internal_10bc89833fa9acd6ec7e9ec089fda330e3c7867b31fe864471c119541726ac8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
