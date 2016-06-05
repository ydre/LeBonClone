<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b5a9a5e9ae4cfd38f84fa2ec3af19b54ea9e5b34052a8ab870afee6ab252a68b extends Twig_Template
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
        $__internal_18dd30f0fbf0193837e7313b63737ab5d3e22a3045daf3132bb7e6cabf26cca5 = $this->env->getExtension("native_profiler");
        $__internal_18dd30f0fbf0193837e7313b63737ab5d3e22a3045daf3132bb7e6cabf26cca5->enter($__internal_18dd30f0fbf0193837e7313b63737ab5d3e22a3045daf3132bb7e6cabf26cca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_18dd30f0fbf0193837e7313b63737ab5d3e22a3045daf3132bb7e6cabf26cca5->leave($__internal_18dd30f0fbf0193837e7313b63737ab5d3e22a3045daf3132bb7e6cabf26cca5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
