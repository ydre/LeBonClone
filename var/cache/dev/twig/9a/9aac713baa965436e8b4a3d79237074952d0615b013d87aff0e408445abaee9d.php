<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_867facb1a3fb83f6ff2df891be0f9ada8d3156a90b2c05b59abf9393c032b9d6 extends Twig_Template
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
        $__internal_0df54d415ba23c2f9ce017ad2a18c71a6ea6e9a7f70cc04f12589eb2fe2e6833 = $this->env->getExtension("native_profiler");
        $__internal_0df54d415ba23c2f9ce017ad2a18c71a6ea6e9a7f70cc04f12589eb2fe2e6833->enter($__internal_0df54d415ba23c2f9ce017ad2a18c71a6ea6e9a7f70cc04f12589eb2fe2e6833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0df54d415ba23c2f9ce017ad2a18c71a6ea6e9a7f70cc04f12589eb2fe2e6833->leave($__internal_0df54d415ba23c2f9ce017ad2a18c71a6ea6e9a7f70cc04f12589eb2fe2e6833_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
