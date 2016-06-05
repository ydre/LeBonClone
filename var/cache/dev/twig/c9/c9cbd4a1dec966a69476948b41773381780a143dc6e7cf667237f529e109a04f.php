<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_772f04b581afd8cdc87e6e93dad6280434b6e60f2a1c6a5fdc085d8ed497c3f3 extends Twig_Template
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
        $__internal_3bb35d6d40c9a81b628daf1a9d33535189f1a43b9a070a43db4b99ba9fca318f = $this->env->getExtension("native_profiler");
        $__internal_3bb35d6d40c9a81b628daf1a9d33535189f1a43b9a070a43db4b99ba9fca318f->enter($__internal_3bb35d6d40c9a81b628daf1a9d33535189f1a43b9a070a43db4b99ba9fca318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_3bb35d6d40c9a81b628daf1a9d33535189f1a43b9a070a43db4b99ba9fca318f->leave($__internal_3bb35d6d40c9a81b628daf1a9d33535189f1a43b9a070a43db4b99ba9fca318f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
