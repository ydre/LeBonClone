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
        $__internal_bec2b6c6da02a1d829ad183b269aa3a375bc011d5930b0c66617c92cebb17d40 = $this->env->getExtension("native_profiler");
        $__internal_bec2b6c6da02a1d829ad183b269aa3a375bc011d5930b0c66617c92cebb17d40->enter($__internal_bec2b6c6da02a1d829ad183b269aa3a375bc011d5930b0c66617c92cebb17d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bec2b6c6da02a1d829ad183b269aa3a375bc011d5930b0c66617c92cebb17d40->leave($__internal_bec2b6c6da02a1d829ad183b269aa3a375bc011d5930b0c66617c92cebb17d40_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5b399da0338e4618b2ef49dead00a9c06812bf8962efea5a22b23aa3b259f40e = $this->env->getExtension("native_profiler");
        $__internal_5b399da0338e4618b2ef49dead00a9c06812bf8962efea5a22b23aa3b259f40e->enter($__internal_5b399da0338e4618b2ef49dead00a9c06812bf8962efea5a22b23aa3b259f40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5b399da0338e4618b2ef49dead00a9c06812bf8962efea5a22b23aa3b259f40e->leave($__internal_5b399da0338e4618b2ef49dead00a9c06812bf8962efea5a22b23aa3b259f40e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_96224ec33856b6f7326b70d1b68bcfcf08710d8c1e085b82d90b020d9b182ca6 = $this->env->getExtension("native_profiler");
        $__internal_96224ec33856b6f7326b70d1b68bcfcf08710d8c1e085b82d90b020d9b182ca6->enter($__internal_96224ec33856b6f7326b70d1b68bcfcf08710d8c1e085b82d90b020d9b182ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_96224ec33856b6f7326b70d1b68bcfcf08710d8c1e085b82d90b020d9b182ca6->leave($__internal_96224ec33856b6f7326b70d1b68bcfcf08710d8c1e085b82d90b020d9b182ca6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6a3e785ffbf315216d14b43af18e7767837b1951575a715ee1f486fab17c39cb = $this->env->getExtension("native_profiler");
        $__internal_6a3e785ffbf315216d14b43af18e7767837b1951575a715ee1f486fab17c39cb->enter($__internal_6a3e785ffbf315216d14b43af18e7767837b1951575a715ee1f486fab17c39cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6a3e785ffbf315216d14b43af18e7767837b1951575a715ee1f486fab17c39cb->leave($__internal_6a3e785ffbf315216d14b43af18e7767837b1951575a715ee1f486fab17c39cb_prof);

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
