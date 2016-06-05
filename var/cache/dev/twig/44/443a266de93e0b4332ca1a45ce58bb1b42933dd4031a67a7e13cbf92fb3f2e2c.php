<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_89fbc792e0d694ffd88211282950537334bac18650895ee9968882051aae07c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_e6bbdea07c1255d84628d84b4b0ffa4f5035d29ecc39bb92334ea1f7fde32177 = $this->env->getExtension("native_profiler");
        $__internal_e6bbdea07c1255d84628d84b4b0ffa4f5035d29ecc39bb92334ea1f7fde32177->enter($__internal_e6bbdea07c1255d84628d84b4b0ffa4f5035d29ecc39bb92334ea1f7fde32177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6bbdea07c1255d84628d84b4b0ffa4f5035d29ecc39bb92334ea1f7fde32177->leave($__internal_e6bbdea07c1255d84628d84b4b0ffa4f5035d29ecc39bb92334ea1f7fde32177_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1716189e7813f4789b6674fe3975ce7d8137ae4ec3842b7db322cf10ef532761 = $this->env->getExtension("native_profiler");
        $__internal_1716189e7813f4789b6674fe3975ce7d8137ae4ec3842b7db322cf10ef532761->enter($__internal_1716189e7813f4789b6674fe3975ce7d8137ae4ec3842b7db322cf10ef532761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1716189e7813f4789b6674fe3975ce7d8137ae4ec3842b7db322cf10ef532761->leave($__internal_1716189e7813f4789b6674fe3975ce7d8137ae4ec3842b7db322cf10ef532761_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0adde7fc67ee28b88c8cb305609329d2a3ca0f25a4637d1cc3ea593e40124343 = $this->env->getExtension("native_profiler");
        $__internal_0adde7fc67ee28b88c8cb305609329d2a3ca0f25a4637d1cc3ea593e40124343->enter($__internal_0adde7fc67ee28b88c8cb305609329d2a3ca0f25a4637d1cc3ea593e40124343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0adde7fc67ee28b88c8cb305609329d2a3ca0f25a4637d1cc3ea593e40124343->leave($__internal_0adde7fc67ee28b88c8cb305609329d2a3ca0f25a4637d1cc3ea593e40124343_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
