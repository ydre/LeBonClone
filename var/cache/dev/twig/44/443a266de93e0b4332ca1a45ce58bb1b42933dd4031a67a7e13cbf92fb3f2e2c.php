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
        $__internal_4759ab94863eec7456fa7a25e426beeef7147df957481b060b1be164aa54455d = $this->env->getExtension("native_profiler");
        $__internal_4759ab94863eec7456fa7a25e426beeef7147df957481b060b1be164aa54455d->enter($__internal_4759ab94863eec7456fa7a25e426beeef7147df957481b060b1be164aa54455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4759ab94863eec7456fa7a25e426beeef7147df957481b060b1be164aa54455d->leave($__internal_4759ab94863eec7456fa7a25e426beeef7147df957481b060b1be164aa54455d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb67c15cc6444ecfd84d180f43f7b7f0b5ce908cd8dd10076160eae3ef34e725 = $this->env->getExtension("native_profiler");
        $__internal_cb67c15cc6444ecfd84d180f43f7b7f0b5ce908cd8dd10076160eae3ef34e725->enter($__internal_cb67c15cc6444ecfd84d180f43f7b7f0b5ce908cd8dd10076160eae3ef34e725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cb67c15cc6444ecfd84d180f43f7b7f0b5ce908cd8dd10076160eae3ef34e725->leave($__internal_cb67c15cc6444ecfd84d180f43f7b7f0b5ce908cd8dd10076160eae3ef34e725_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6bf61952972139b96abfac2f9b8e4fb8e416f728af895de55e014fc74571776 = $this->env->getExtension("native_profiler");
        $__internal_c6bf61952972139b96abfac2f9b8e4fb8e416f728af895de55e014fc74571776->enter($__internal_c6bf61952972139b96abfac2f9b8e4fb8e416f728af895de55e014fc74571776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6bf61952972139b96abfac2f9b8e4fb8e416f728af895de55e014fc74571776->leave($__internal_c6bf61952972139b96abfac2f9b8e4fb8e416f728af895de55e014fc74571776_prof);

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
