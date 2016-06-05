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
        $__internal_99fcc88222601be0616e6e30585892ff1838bfd441f0b0cb5a67d0029e15b386 = $this->env->getExtension("native_profiler");
        $__internal_99fcc88222601be0616e6e30585892ff1838bfd441f0b0cb5a67d0029e15b386->enter($__internal_99fcc88222601be0616e6e30585892ff1838bfd441f0b0cb5a67d0029e15b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99fcc88222601be0616e6e30585892ff1838bfd441f0b0cb5a67d0029e15b386->leave($__internal_99fcc88222601be0616e6e30585892ff1838bfd441f0b0cb5a67d0029e15b386_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8488498787372150fa0a71346bc7f55a7c6cfc533952927e07f57e163caa9c04 = $this->env->getExtension("native_profiler");
        $__internal_8488498787372150fa0a71346bc7f55a7c6cfc533952927e07f57e163caa9c04->enter($__internal_8488498787372150fa0a71346bc7f55a7c6cfc533952927e07f57e163caa9c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8488498787372150fa0a71346bc7f55a7c6cfc533952927e07f57e163caa9c04->leave($__internal_8488498787372150fa0a71346bc7f55a7c6cfc533952927e07f57e163caa9c04_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_026891da74161ded8da8935978055190438c995c64bbcf9c53c5d6eaa63d5b94 = $this->env->getExtension("native_profiler");
        $__internal_026891da74161ded8da8935978055190438c995c64bbcf9c53c5d6eaa63d5b94->enter($__internal_026891da74161ded8da8935978055190438c995c64bbcf9c53c5d6eaa63d5b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_026891da74161ded8da8935978055190438c995c64bbcf9c53c5d6eaa63d5b94->leave($__internal_026891da74161ded8da8935978055190438c995c64bbcf9c53c5d6eaa63d5b94_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3015f2e166d5ce0123fdfbf2c4bf855ff60cd6b822da2337c08a8fb157867ec = $this->env->getExtension("native_profiler");
        $__internal_d3015f2e166d5ce0123fdfbf2c4bf855ff60cd6b822da2337c08a8fb157867ec->enter($__internal_d3015f2e166d5ce0123fdfbf2c4bf855ff60cd6b822da2337c08a8fb157867ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3015f2e166d5ce0123fdfbf2c4bf855ff60cd6b822da2337c08a8fb157867ec->leave($__internal_d3015f2e166d5ce0123fdfbf2c4bf855ff60cd6b822da2337c08a8fb157867ec_prof);

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
