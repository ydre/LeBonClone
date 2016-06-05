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
        $__internal_38f3fd5d4fc5e3f6a97dcecd512a2f7956dad8f1687f1b19d5f640b75c1dc08e = $this->env->getExtension("native_profiler");
        $__internal_38f3fd5d4fc5e3f6a97dcecd512a2f7956dad8f1687f1b19d5f640b75c1dc08e->enter($__internal_38f3fd5d4fc5e3f6a97dcecd512a2f7956dad8f1687f1b19d5f640b75c1dc08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f3fd5d4fc5e3f6a97dcecd512a2f7956dad8f1687f1b19d5f640b75c1dc08e->leave($__internal_38f3fd5d4fc5e3f6a97dcecd512a2f7956dad8f1687f1b19d5f640b75c1dc08e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac7e90ea4ccd1a93a2490f584de8a953c0b3189da068da1fdd4b3fc6e9c2a9a0 = $this->env->getExtension("native_profiler");
        $__internal_ac7e90ea4ccd1a93a2490f584de8a953c0b3189da068da1fdd4b3fc6e9c2a9a0->enter($__internal_ac7e90ea4ccd1a93a2490f584de8a953c0b3189da068da1fdd4b3fc6e9c2a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac7e90ea4ccd1a93a2490f584de8a953c0b3189da068da1fdd4b3fc6e9c2a9a0->leave($__internal_ac7e90ea4ccd1a93a2490f584de8a953c0b3189da068da1fdd4b3fc6e9c2a9a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ef21c4200201093199ddd23576be1077f8a3debc8e199de9c821335754490c2 = $this->env->getExtension("native_profiler");
        $__internal_6ef21c4200201093199ddd23576be1077f8a3debc8e199de9c821335754490c2->enter($__internal_6ef21c4200201093199ddd23576be1077f8a3debc8e199de9c821335754490c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ef21c4200201093199ddd23576be1077f8a3debc8e199de9c821335754490c2->leave($__internal_6ef21c4200201093199ddd23576be1077f8a3debc8e199de9c821335754490c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c725fde2fc06effd2e891ab7d9f4c152a9a59f2004d2e401fd5fd163b7eb9f5 = $this->env->getExtension("native_profiler");
        $__internal_5c725fde2fc06effd2e891ab7d9f4c152a9a59f2004d2e401fd5fd163b7eb9f5->enter($__internal_5c725fde2fc06effd2e891ab7d9f4c152a9a59f2004d2e401fd5fd163b7eb9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c725fde2fc06effd2e891ab7d9f4c152a9a59f2004d2e401fd5fd163b7eb9f5->leave($__internal_5c725fde2fc06effd2e891ab7d9f4c152a9a59f2004d2e401fd5fd163b7eb9f5_prof);

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
