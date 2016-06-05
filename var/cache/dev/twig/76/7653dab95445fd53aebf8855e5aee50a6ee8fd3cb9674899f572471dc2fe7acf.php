<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_890b2f82c5676344cbad10753fa7f9c3f1fa035e4a0105bbd7baef7ec834f458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea38a3a833ea6e4e8d0c045189723a027fcce02bec3e2995e9356c75e346a167 = $this->env->getExtension("native_profiler");
        $__internal_ea38a3a833ea6e4e8d0c045189723a027fcce02bec3e2995e9356c75e346a167->enter($__internal_ea38a3a833ea6e4e8d0c045189723a027fcce02bec3e2995e9356c75e346a167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea38a3a833ea6e4e8d0c045189723a027fcce02bec3e2995e9356c75e346a167->leave($__internal_ea38a3a833ea6e4e8d0c045189723a027fcce02bec3e2995e9356c75e346a167_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0cde9706ccd5b0089a2773d302f78485b6a1d8e2b320cbafd3e58976632eee6 = $this->env->getExtension("native_profiler");
        $__internal_b0cde9706ccd5b0089a2773d302f78485b6a1d8e2b320cbafd3e58976632eee6->enter($__internal_b0cde9706ccd5b0089a2773d302f78485b6a1d8e2b320cbafd3e58976632eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b0cde9706ccd5b0089a2773d302f78485b6a1d8e2b320cbafd3e58976632eee6->leave($__internal_b0cde9706ccd5b0089a2773d302f78485b6a1d8e2b320cbafd3e58976632eee6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74463111831ff1e56712f0d7a06f60cf4a3c644d1f9c5424a28a50816bb17801 = $this->env->getExtension("native_profiler");
        $__internal_74463111831ff1e56712f0d7a06f60cf4a3c644d1f9c5424a28a50816bb17801->enter($__internal_74463111831ff1e56712f0d7a06f60cf4a3c644d1f9c5424a28a50816bb17801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_74463111831ff1e56712f0d7a06f60cf4a3c644d1f9c5424a28a50816bb17801->leave($__internal_74463111831ff1e56712f0d7a06f60cf4a3c644d1f9c5424a28a50816bb17801_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6cfcf00bd08799c91fba035435999966eba936c7c6b3b53d2aa9e8de0178e41 = $this->env->getExtension("native_profiler");
        $__internal_d6cfcf00bd08799c91fba035435999966eba936c7c6b3b53d2aa9e8de0178e41->enter($__internal_d6cfcf00bd08799c91fba035435999966eba936c7c6b3b53d2aa9e8de0178e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d6cfcf00bd08799c91fba035435999966eba936c7c6b3b53d2aa9e8de0178e41->leave($__internal_d6cfcf00bd08799c91fba035435999966eba936c7c6b3b53d2aa9e8de0178e41_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
