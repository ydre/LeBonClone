<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c9739918aaa9cb9da1056451c8f277fc34c5197a164fa7849cc8fc8446b8937c extends Twig_Template
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
        $__internal_78268404285261faf57b5a14c9aef96fa222f40c5d86e4cb52adb0bf14bf973c = $this->env->getExtension("native_profiler");
        $__internal_78268404285261faf57b5a14c9aef96fa222f40c5d86e4cb52adb0bf14bf973c->enter($__internal_78268404285261faf57b5a14c9aef96fa222f40c5d86e4cb52adb0bf14bf973c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_78268404285261faf57b5a14c9aef96fa222f40c5d86e4cb52adb0bf14bf973c->leave($__internal_78268404285261faf57b5a14c9aef96fa222f40c5d86e4cb52adb0bf14bf973c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
