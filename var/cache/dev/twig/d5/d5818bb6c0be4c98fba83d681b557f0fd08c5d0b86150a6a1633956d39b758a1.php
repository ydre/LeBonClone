<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_428b99f35d92cee193a1387a47496036c36bb575cc2c9eef721a0521fd9fda3e extends Twig_Template
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
        $__internal_4bc7d660ad6993b3caeec5bcfd6e0e7432fa0ae1df0b869831f35733d14dfb4c = $this->env->getExtension("native_profiler");
        $__internal_4bc7d660ad6993b3caeec5bcfd6e0e7432fa0ae1df0b869831f35733d14dfb4c->enter($__internal_4bc7d660ad6993b3caeec5bcfd6e0e7432fa0ae1df0b869831f35733d14dfb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4bc7d660ad6993b3caeec5bcfd6e0e7432fa0ae1df0b869831f35733d14dfb4c->leave($__internal_4bc7d660ad6993b3caeec5bcfd6e0e7432fa0ae1df0b869831f35733d14dfb4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
