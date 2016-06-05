<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5a4bc7b6451279a067983ff9ad74855feba338fc68b6191dc66799ab3de5acac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3cb72d3c0b800188bac7a7d6e18d2699f4be246e64383cd774fa0ac82af4ffab = $this->env->getExtension("native_profiler");
        $__internal_3cb72d3c0b800188bac7a7d6e18d2699f4be246e64383cd774fa0ac82af4ffab->enter($__internal_3cb72d3c0b800188bac7a7d6e18d2699f4be246e64383cd774fa0ac82af4ffab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb72d3c0b800188bac7a7d6e18d2699f4be246e64383cd774fa0ac82af4ffab->leave($__internal_3cb72d3c0b800188bac7a7d6e18d2699f4be246e64383cd774fa0ac82af4ffab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52ab5d348dc606f04161b77c3dfc4ed52e5ff1f023b5510380c059f32cb2ef4d = $this->env->getExtension("native_profiler");
        $__internal_52ab5d348dc606f04161b77c3dfc4ed52e5ff1f023b5510380c059f32cb2ef4d->enter($__internal_52ab5d348dc606f04161b77c3dfc4ed52e5ff1f023b5510380c059f32cb2ef4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52ab5d348dc606f04161b77c3dfc4ed52e5ff1f023b5510380c059f32cb2ef4d->leave($__internal_52ab5d348dc606f04161b77c3dfc4ed52e5ff1f023b5510380c059f32cb2ef4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ea1b52083256e6b87b2dc9c1cdb3952b9bff371db020055fc366aa8efd0d183 = $this->env->getExtension("native_profiler");
        $__internal_4ea1b52083256e6b87b2dc9c1cdb3952b9bff371db020055fc366aa8efd0d183->enter($__internal_4ea1b52083256e6b87b2dc9c1cdb3952b9bff371db020055fc366aa8efd0d183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ea1b52083256e6b87b2dc9c1cdb3952b9bff371db020055fc366aa8efd0d183->leave($__internal_4ea1b52083256e6b87b2dc9c1cdb3952b9bff371db020055fc366aa8efd0d183_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1430ef60978c91642e2bd62a53d42ab1e498328fdfbf22c4d71c7df115bfb003 = $this->env->getExtension("native_profiler");
        $__internal_1430ef60978c91642e2bd62a53d42ab1e498328fdfbf22c4d71c7df115bfb003->enter($__internal_1430ef60978c91642e2bd62a53d42ab1e498328fdfbf22c4d71c7df115bfb003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1430ef60978c91642e2bd62a53d42ab1e498328fdfbf22c4d71c7df115bfb003->leave($__internal_1430ef60978c91642e2bd62a53d42ab1e498328fdfbf22c4d71c7df115bfb003_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
