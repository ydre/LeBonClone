<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_64a374416044712ff155d35f16be1a44b155f9ce885c8eb59a450805b0344d3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83477a26f63d7321ff3be872d5fbe191f192af320c9aadf486dcc7a4b66cee59 = $this->env->getExtension("native_profiler");
        $__internal_83477a26f63d7321ff3be872d5fbe191f192af320c9aadf486dcc7a4b66cee59->enter($__internal_83477a26f63d7321ff3be872d5fbe191f192af320c9aadf486dcc7a4b66cee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83477a26f63d7321ff3be872d5fbe191f192af320c9aadf486dcc7a4b66cee59->leave($__internal_83477a26f63d7321ff3be872d5fbe191f192af320c9aadf486dcc7a4b66cee59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80c3605a87f38d7e7dd210496df2156d823fde4aa53c061eb2d7f4200c32ec43 = $this->env->getExtension("native_profiler");
        $__internal_80c3605a87f38d7e7dd210496df2156d823fde4aa53c061eb2d7f4200c32ec43->enter($__internal_80c3605a87f38d7e7dd210496df2156d823fde4aa53c061eb2d7f4200c32ec43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_80c3605a87f38d7e7dd210496df2156d823fde4aa53c061eb2d7f4200c32ec43->leave($__internal_80c3605a87f38d7e7dd210496df2156d823fde4aa53c061eb2d7f4200c32ec43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b67c237bc4166d078ce061f284b2bb82940c3d121607ced1c2886ddcf281117 = $this->env->getExtension("native_profiler");
        $__internal_4b67c237bc4166d078ce061f284b2bb82940c3d121607ced1c2886ddcf281117->enter($__internal_4b67c237bc4166d078ce061f284b2bb82940c3d121607ced1c2886ddcf281117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4b67c237bc4166d078ce061f284b2bb82940c3d121607ced1c2886ddcf281117->leave($__internal_4b67c237bc4166d078ce061f284b2bb82940c3d121607ced1c2886ddcf281117_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
