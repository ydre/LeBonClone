<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1e2d07b04a40bfd0d68308d5bde0662f2ded551b6c4d7b117b1d854d69ede5d9 extends Twig_Template
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
        $__internal_23e231edd255b3075983316669be94b4a67bd98fff46a84b8f824febf70c1291 = $this->env->getExtension("native_profiler");
        $__internal_23e231edd255b3075983316669be94b4a67bd98fff46a84b8f824febf70c1291->enter($__internal_23e231edd255b3075983316669be94b4a67bd98fff46a84b8f824febf70c1291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_23e231edd255b3075983316669be94b4a67bd98fff46a84b8f824febf70c1291->leave($__internal_23e231edd255b3075983316669be94b4a67bd98fff46a84b8f824febf70c1291_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
