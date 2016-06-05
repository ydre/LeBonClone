<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7c33cf76b677ebb3b089c143e0a2aa0c47e04a3f564f1e2d0cd3328f35d6556d extends Twig_Template
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
        $__internal_36175a599a88dcd86c880a5ff747b9aa5ed79b53f16176ed240c25cc3332a1cb = $this->env->getExtension("native_profiler");
        $__internal_36175a599a88dcd86c880a5ff747b9aa5ed79b53f16176ed240c25cc3332a1cb->enter($__internal_36175a599a88dcd86c880a5ff747b9aa5ed79b53f16176ed240c25cc3332a1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_36175a599a88dcd86c880a5ff747b9aa5ed79b53f16176ed240c25cc3332a1cb->leave($__internal_36175a599a88dcd86c880a5ff747b9aa5ed79b53f16176ed240c25cc3332a1cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
