<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_84ff166ac6c2f7ad3989328667e78217106f1cbcb84e03cd5aa6aa0d217ff2c2 extends Twig_Template
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
        $__internal_71a6a01128fd246f751963afdee09569592853f5cebc35cb60237b25af5230e8 = $this->env->getExtension("native_profiler");
        $__internal_71a6a01128fd246f751963afdee09569592853f5cebc35cb60237b25af5230e8->enter($__internal_71a6a01128fd246f751963afdee09569592853f5cebc35cb60237b25af5230e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_71a6a01128fd246f751963afdee09569592853f5cebc35cb60237b25af5230e8->leave($__internal_71a6a01128fd246f751963afdee09569592853f5cebc35cb60237b25af5230e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
