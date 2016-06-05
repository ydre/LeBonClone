<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e50159f5279d6437842c30d1ecb7dbaa4e4a6ca90cc17023c126b2b1ad5cc5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_044686e9c9f690c5e56868a67aea32365b7d464c5d47e2eec010bb5001de1250 = $this->env->getExtension("native_profiler");
        $__internal_044686e9c9f690c5e56868a67aea32365b7d464c5d47e2eec010bb5001de1250->enter($__internal_044686e9c9f690c5e56868a67aea32365b7d464c5d47e2eec010bb5001de1250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044686e9c9f690c5e56868a67aea32365b7d464c5d47e2eec010bb5001de1250->leave($__internal_044686e9c9f690c5e56868a67aea32365b7d464c5d47e2eec010bb5001de1250_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85adedf20949f523b0acf406292318df9f577f84d4aeef161cec575e60c64f4c = $this->env->getExtension("native_profiler");
        $__internal_85adedf20949f523b0acf406292318df9f577f84d4aeef161cec575e60c64f4c->enter($__internal_85adedf20949f523b0acf406292318df9f577f84d4aeef161cec575e60c64f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>Félicitations ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo ", votre compte est bien activé</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"/\">revenir à l'accueil</a></p>
    ";
        }
        
        $__internal_85adedf20949f523b0acf406292318df9f577f84d4aeef161cec575e60c64f4c->leave($__internal_85adedf20949f523b0acf406292318df9f577f84d4aeef161cec575e60c64f4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>Félicitations {{ user.username}}, votre compte est bien activé</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="/">revenir à l'accueil</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
