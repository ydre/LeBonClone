<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d84a58c1dc77bb7fc69f740303ab74cb5839d3bf7d14009b26c42f9b459945cc extends Twig_Template
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
        $__internal_4fbb181ff8787dc04a556eae3c69334259ffa5b1acce305ae5aa1187aaa180ea = $this->env->getExtension("native_profiler");
        $__internal_4fbb181ff8787dc04a556eae3c69334259ffa5b1acce305ae5aa1187aaa180ea->enter($__internal_4fbb181ff8787dc04a556eae3c69334259ffa5b1acce305ae5aa1187aaa180ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4fbb181ff8787dc04a556eae3c69334259ffa5b1acce305ae5aa1187aaa180ea->leave($__internal_4fbb181ff8787dc04a556eae3c69334259ffa5b1acce305ae5aa1187aaa180ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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