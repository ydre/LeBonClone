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
        $__internal_8e574a2f4f751e187a4dce1ec295d5092f6e8227c9e96dec870fd88a50e5619b = $this->env->getExtension("native_profiler");
        $__internal_8e574a2f4f751e187a4dce1ec295d5092f6e8227c9e96dec870fd88a50e5619b->enter($__internal_8e574a2f4f751e187a4dce1ec295d5092f6e8227c9e96dec870fd88a50e5619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e574a2f4f751e187a4dce1ec295d5092f6e8227c9e96dec870fd88a50e5619b->leave($__internal_8e574a2f4f751e187a4dce1ec295d5092f6e8227c9e96dec870fd88a50e5619b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c731d27d20844801b10e4a1c528a65a2f3d3ed4c6b921b077eac562c2df3d78d = $this->env->getExtension("native_profiler");
        $__internal_c731d27d20844801b10e4a1c528a65a2f3d3ed4c6b921b077eac562c2df3d78d->enter($__internal_c731d27d20844801b10e4a1c528a65a2f3d3ed4c6b921b077eac562c2df3d78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c731d27d20844801b10e4a1c528a65a2f3d3ed4c6b921b077eac562c2df3d78d->leave($__internal_c731d27d20844801b10e4a1c528a65a2f3d3ed4c6b921b077eac562c2df3d78d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1cec44cd0da86b73d3788caaf7162981f328b17f44beecdf7c36475a841a0245 = $this->env->getExtension("native_profiler");
        $__internal_1cec44cd0da86b73d3788caaf7162981f328b17f44beecdf7c36475a841a0245->enter($__internal_1cec44cd0da86b73d3788caaf7162981f328b17f44beecdf7c36475a841a0245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1cec44cd0da86b73d3788caaf7162981f328b17f44beecdf7c36475a841a0245->leave($__internal_1cec44cd0da86b73d3788caaf7162981f328b17f44beecdf7c36475a841a0245_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9e81c7e65c4046aa150f18019f1f169a3b57c54c6a7b44b259d7ac40ed042b44 = $this->env->getExtension("native_profiler");
        $__internal_9e81c7e65c4046aa150f18019f1f169a3b57c54c6a7b44b259d7ac40ed042b44->enter($__internal_9e81c7e65c4046aa150f18019f1f169a3b57c54c6a7b44b259d7ac40ed042b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9e81c7e65c4046aa150f18019f1f169a3b57c54c6a7b44b259d7ac40ed042b44->leave($__internal_9e81c7e65c4046aa150f18019f1f169a3b57c54c6a7b44b259d7ac40ed042b44_prof);

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
