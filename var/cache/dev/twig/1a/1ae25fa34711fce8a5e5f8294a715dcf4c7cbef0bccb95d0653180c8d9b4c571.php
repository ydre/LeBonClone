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
        $__internal_854b43c7745931e88526ac543bc4f5b80416ea32ebb6d7849d65be912b21a00d = $this->env->getExtension("native_profiler");
        $__internal_854b43c7745931e88526ac543bc4f5b80416ea32ebb6d7849d65be912b21a00d->enter($__internal_854b43c7745931e88526ac543bc4f5b80416ea32ebb6d7849d65be912b21a00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854b43c7745931e88526ac543bc4f5b80416ea32ebb6d7849d65be912b21a00d->leave($__internal_854b43c7745931e88526ac543bc4f5b80416ea32ebb6d7849d65be912b21a00d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de8846ab0ad63152da1bf43a3b12b0a9ae96498336d7a328091db4f2371a8e91 = $this->env->getExtension("native_profiler");
        $__internal_de8846ab0ad63152da1bf43a3b12b0a9ae96498336d7a328091db4f2371a8e91->enter($__internal_de8846ab0ad63152da1bf43a3b12b0a9ae96498336d7a328091db4f2371a8e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de8846ab0ad63152da1bf43a3b12b0a9ae96498336d7a328091db4f2371a8e91->leave($__internal_de8846ab0ad63152da1bf43a3b12b0a9ae96498336d7a328091db4f2371a8e91_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7dd0642d28cbbab38704719d46ab51fb819d784167b539bac5edb41f355eb6e = $this->env->getExtension("native_profiler");
        $__internal_b7dd0642d28cbbab38704719d46ab51fb819d784167b539bac5edb41f355eb6e->enter($__internal_b7dd0642d28cbbab38704719d46ab51fb819d784167b539bac5edb41f355eb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7dd0642d28cbbab38704719d46ab51fb819d784167b539bac5edb41f355eb6e->leave($__internal_b7dd0642d28cbbab38704719d46ab51fb819d784167b539bac5edb41f355eb6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bdecd9e455150c3cdb05d93686d572d0d98e5f88855e92ed95064d3b5a75946 = $this->env->getExtension("native_profiler");
        $__internal_6bdecd9e455150c3cdb05d93686d572d0d98e5f88855e92ed95064d3b5a75946->enter($__internal_6bdecd9e455150c3cdb05d93686d572d0d98e5f88855e92ed95064d3b5a75946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6bdecd9e455150c3cdb05d93686d572d0d98e5f88855e92ed95064d3b5a75946->leave($__internal_6bdecd9e455150c3cdb05d93686d572d0d98e5f88855e92ed95064d3b5a75946_prof);

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
