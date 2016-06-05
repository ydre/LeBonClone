<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bf9e1197dbc531428c8fa5d9940370e65c61c0794c872b535b1588e823da006a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_088f1d11ebe3f9b00b051a291b113af274f26e740eecded83128ae4e2a092768 = $this->env->getExtension("native_profiler");
        $__internal_088f1d11ebe3f9b00b051a291b113af274f26e740eecded83128ae4e2a092768->enter($__internal_088f1d11ebe3f9b00b051a291b113af274f26e740eecded83128ae4e2a092768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_088f1d11ebe3f9b00b051a291b113af274f26e740eecded83128ae4e2a092768->leave($__internal_088f1d11ebe3f9b00b051a291b113af274f26e740eecded83128ae4e2a092768_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
