<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_23c4726a438120c92982b10fc8a7568908cf25a11e1f13200e103ffe10a0db92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b957a6e125a049b4d57d3f835328d5f6d148f2720a5b1ca6e2bcda731efe1a85 = $this->env->getExtension("native_profiler");
        $__internal_b957a6e125a049b4d57d3f835328d5f6d148f2720a5b1ca6e2bcda731efe1a85->enter($__internal_b957a6e125a049b4d57d3f835328d5f6d148f2720a5b1ca6e2bcda731efe1a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b957a6e125a049b4d57d3f835328d5f6d148f2720a5b1ca6e2bcda731efe1a85->leave($__internal_b957a6e125a049b4d57d3f835328d5f6d148f2720a5b1ca6e2bcda731efe1a85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e663d1c74874b221f170df7139ccdbc4551cdd6043b99f8679407549a044aa0 = $this->env->getExtension("native_profiler");
        $__internal_3e663d1c74874b221f170df7139ccdbc4551cdd6043b99f8679407549a044aa0->enter($__internal_3e663d1c74874b221f170df7139ccdbc4551cdd6043b99f8679407549a044aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e663d1c74874b221f170df7139ccdbc4551cdd6043b99f8679407549a044aa0->leave($__internal_3e663d1c74874b221f170df7139ccdbc4551cdd6043b99f8679407549a044aa0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdf0181762261de29c7c1333a1c935d632d537ae4603995868be376564997a52 = $this->env->getExtension("native_profiler");
        $__internal_bdf0181762261de29c7c1333a1c935d632d537ae4603995868be376564997a52->enter($__internal_bdf0181762261de29c7c1333a1c935d632d537ae4603995868be376564997a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bdf0181762261de29c7c1333a1c935d632d537ae4603995868be376564997a52->leave($__internal_bdf0181762261de29c7c1333a1c935d632d537ae4603995868be376564997a52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7eec157341eb6eccc901a7dc306aabcd3344e18d3026d835d06621a83a0ffea = $this->env->getExtension("native_profiler");
        $__internal_b7eec157341eb6eccc901a7dc306aabcd3344e18d3026d835d06621a83a0ffea->enter($__internal_b7eec157341eb6eccc901a7dc306aabcd3344e18d3026d835d06621a83a0ffea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7eec157341eb6eccc901a7dc306aabcd3344e18d3026d835d06621a83a0ffea->leave($__internal_b7eec157341eb6eccc901a7dc306aabcd3344e18d3026d835d06621a83a0ffea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
