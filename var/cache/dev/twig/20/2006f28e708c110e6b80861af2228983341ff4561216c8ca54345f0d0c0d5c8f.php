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
        $__internal_43dd64e48bf9df400f061f72ed8ab968b97ec01c647764d77c17f39aa4aef957 = $this->env->getExtension("native_profiler");
        $__internal_43dd64e48bf9df400f061f72ed8ab968b97ec01c647764d77c17f39aa4aef957->enter($__internal_43dd64e48bf9df400f061f72ed8ab968b97ec01c647764d77c17f39aa4aef957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_43dd64e48bf9df400f061f72ed8ab968b97ec01c647764d77c17f39aa4aef957->leave($__internal_43dd64e48bf9df400f061f72ed8ab968b97ec01c647764d77c17f39aa4aef957_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cabba3a0aa9151ced4d1b61f1182a1f11a26a34d8cf98b97fd9056b8ff1a5161 = $this->env->getExtension("native_profiler");
        $__internal_cabba3a0aa9151ced4d1b61f1182a1f11a26a34d8cf98b97fd9056b8ff1a5161->enter($__internal_cabba3a0aa9151ced4d1b61f1182a1f11a26a34d8cf98b97fd9056b8ff1a5161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cabba3a0aa9151ced4d1b61f1182a1f11a26a34d8cf98b97fd9056b8ff1a5161->leave($__internal_cabba3a0aa9151ced4d1b61f1182a1f11a26a34d8cf98b97fd9056b8ff1a5161_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_76239b3a275bf3078b49813be73daeb99a05f5de9f609f48bd13093e95e588b2 = $this->env->getExtension("native_profiler");
        $__internal_76239b3a275bf3078b49813be73daeb99a05f5de9f609f48bd13093e95e588b2->enter($__internal_76239b3a275bf3078b49813be73daeb99a05f5de9f609f48bd13093e95e588b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_76239b3a275bf3078b49813be73daeb99a05f5de9f609f48bd13093e95e588b2->leave($__internal_76239b3a275bf3078b49813be73daeb99a05f5de9f609f48bd13093e95e588b2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2886d0a09373f3d27a8d311894f9bb55137e7cfbbbf50820ddb604a1c005fc81 = $this->env->getExtension("native_profiler");
        $__internal_2886d0a09373f3d27a8d311894f9bb55137e7cfbbbf50820ddb604a1c005fc81->enter($__internal_2886d0a09373f3d27a8d311894f9bb55137e7cfbbbf50820ddb604a1c005fc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2886d0a09373f3d27a8d311894f9bb55137e7cfbbbf50820ddb604a1c005fc81->leave($__internal_2886d0a09373f3d27a8d311894f9bb55137e7cfbbbf50820ddb604a1c005fc81_prof);

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
