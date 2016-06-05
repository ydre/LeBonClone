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
        $__internal_625a51e3a9e1327ad5ce38ad2dde6cb77253e9ede8efa357ead6746dcb950411 = $this->env->getExtension("native_profiler");
        $__internal_625a51e3a9e1327ad5ce38ad2dde6cb77253e9ede8efa357ead6746dcb950411->enter($__internal_625a51e3a9e1327ad5ce38ad2dde6cb77253e9ede8efa357ead6746dcb950411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_625a51e3a9e1327ad5ce38ad2dde6cb77253e9ede8efa357ead6746dcb950411->leave($__internal_625a51e3a9e1327ad5ce38ad2dde6cb77253e9ede8efa357ead6746dcb950411_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b4ac3fa3cf1495ea2037261b43fd634d1d8c4e4cc69bb8728da888336c20ef0 = $this->env->getExtension("native_profiler");
        $__internal_6b4ac3fa3cf1495ea2037261b43fd634d1d8c4e4cc69bb8728da888336c20ef0->enter($__internal_6b4ac3fa3cf1495ea2037261b43fd634d1d8c4e4cc69bb8728da888336c20ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b4ac3fa3cf1495ea2037261b43fd634d1d8c4e4cc69bb8728da888336c20ef0->leave($__internal_6b4ac3fa3cf1495ea2037261b43fd634d1d8c4e4cc69bb8728da888336c20ef0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a8d8063110e04b62443abcb347cb7f2cfa321d101a66d87c5217e8d2df1bd1d = $this->env->getExtension("native_profiler");
        $__internal_0a8d8063110e04b62443abcb347cb7f2cfa321d101a66d87c5217e8d2df1bd1d->enter($__internal_0a8d8063110e04b62443abcb347cb7f2cfa321d101a66d87c5217e8d2df1bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a8d8063110e04b62443abcb347cb7f2cfa321d101a66d87c5217e8d2df1bd1d->leave($__internal_0a8d8063110e04b62443abcb347cb7f2cfa321d101a66d87c5217e8d2df1bd1d_prof);

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
