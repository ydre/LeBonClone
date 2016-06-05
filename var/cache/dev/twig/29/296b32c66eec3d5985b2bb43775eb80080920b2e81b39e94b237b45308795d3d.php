<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_3cb4a141a7ab1b124cbae5b2eb4f1848fd1100279a2d10a7c35157541ec277ae extends Twig_Template
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
        $__internal_239aec5e6b4bf7fd5629f0f0b77278d3cb3e5d176123abf3e1749b4c2eb8e87b = $this->env->getExtension("native_profiler");
        $__internal_239aec5e6b4bf7fd5629f0f0b77278d3cb3e5d176123abf3e1749b4c2eb8e87b->enter($__internal_239aec5e6b4bf7fd5629f0f0b77278d3cb3e5d176123abf3e1749b4c2eb8e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_239aec5e6b4bf7fd5629f0f0b77278d3cb3e5d176123abf3e1749b4c2eb8e87b->leave($__internal_239aec5e6b4bf7fd5629f0f0b77278d3cb3e5d176123abf3e1749b4c2eb8e87b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8db50f62430196ec7c066b5fb38608ae9f470d26e5d5fd80cdac8ae1cc4c640 = $this->env->getExtension("native_profiler");
        $__internal_e8db50f62430196ec7c066b5fb38608ae9f470d26e5d5fd80cdac8ae1cc4c640->enter($__internal_e8db50f62430196ec7c066b5fb38608ae9f470d26e5d5fd80cdac8ae1cc4c640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e8db50f62430196ec7c066b5fb38608ae9f470d26e5d5fd80cdac8ae1cc4c640->leave($__internal_e8db50f62430196ec7c066b5fb38608ae9f470d26e5d5fd80cdac8ae1cc4c640_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c6f3633614647236574df89bfedd93f9b52b1464b78f885c03343d3da7411c87 = $this->env->getExtension("native_profiler");
        $__internal_c6f3633614647236574df89bfedd93f9b52b1464b78f885c03343d3da7411c87->enter($__internal_c6f3633614647236574df89bfedd93f9b52b1464b78f885c03343d3da7411c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c6f3633614647236574df89bfedd93f9b52b1464b78f885c03343d3da7411c87->leave($__internal_c6f3633614647236574df89bfedd93f9b52b1464b78f885c03343d3da7411c87_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a3de0ed8d9545b8caecfc3cad9d69c310d129003ca39c6e15373003b4dfcb5ad = $this->env->getExtension("native_profiler");
        $__internal_a3de0ed8d9545b8caecfc3cad9d69c310d129003ca39c6e15373003b4dfcb5ad->enter($__internal_a3de0ed8d9545b8caecfc3cad9d69c310d129003ca39c6e15373003b4dfcb5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a3de0ed8d9545b8caecfc3cad9d69c310d129003ca39c6e15373003b4dfcb5ad->leave($__internal_a3de0ed8d9545b8caecfc3cad9d69c310d129003ca39c6e15373003b4dfcb5ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
