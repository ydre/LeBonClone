<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b5fea229946bc88f13ba44e41de91815844128252dc469c203e1577c9a145bc3 extends Twig_Template
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
        $__internal_18b6f82bb5d8bc72d0d66d12aaf3220c2f36c606e2ef424b85c0e5538671e3e1 = $this->env->getExtension("native_profiler");
        $__internal_18b6f82bb5d8bc72d0d66d12aaf3220c2f36c606e2ef424b85c0e5538671e3e1->enter($__internal_18b6f82bb5d8bc72d0d66d12aaf3220c2f36c606e2ef424b85c0e5538671e3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_18b6f82bb5d8bc72d0d66d12aaf3220c2f36c606e2ef424b85c0e5538671e3e1->leave($__internal_18b6f82bb5d8bc72d0d66d12aaf3220c2f36c606e2ef424b85c0e5538671e3e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
