<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2262657f3e3979c274cda29ff6c75442ce55d767257cdce6c6c0138be941dc28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_56ba1305e7b373b676d5cd31051d5f21ca23f44511a2ee3980d3de2258f9cb6c = $this->env->getExtension("native_profiler");
        $__internal_56ba1305e7b373b676d5cd31051d5f21ca23f44511a2ee3980d3de2258f9cb6c->enter($__internal_56ba1305e7b373b676d5cd31051d5f21ca23f44511a2ee3980d3de2258f9cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ba1305e7b373b676d5cd31051d5f21ca23f44511a2ee3980d3de2258f9cb6c->leave($__internal_56ba1305e7b373b676d5cd31051d5f21ca23f44511a2ee3980d3de2258f9cb6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5df28aae158e74d66f767d3be1fece5600bf8b4a77389d87ff46c50341b40b72 = $this->env->getExtension("native_profiler");
        $__internal_5df28aae158e74d66f767d3be1fece5600bf8b4a77389d87ff46c50341b40b72->enter($__internal_5df28aae158e74d66f767d3be1fece5600bf8b4a77389d87ff46c50341b40b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5df28aae158e74d66f767d3be1fece5600bf8b4a77389d87ff46c50341b40b72->leave($__internal_5df28aae158e74d66f767d3be1fece5600bf8b4a77389d87ff46c50341b40b72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13edb1dce79a50fde934bf86f903af58602a7f205cc8d0567f4be73ee297a107 = $this->env->getExtension("native_profiler");
        $__internal_13edb1dce79a50fde934bf86f903af58602a7f205cc8d0567f4be73ee297a107->enter($__internal_13edb1dce79a50fde934bf86f903af58602a7f205cc8d0567f4be73ee297a107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_13edb1dce79a50fde934bf86f903af58602a7f205cc8d0567f4be73ee297a107->leave($__internal_13edb1dce79a50fde934bf86f903af58602a7f205cc8d0567f4be73ee297a107_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d796191a7e739aff19949d0e2f70a55bc1229cd09eda0e0f3841603760a33916 = $this->env->getExtension("native_profiler");
        $__internal_d796191a7e739aff19949d0e2f70a55bc1229cd09eda0e0f3841603760a33916->enter($__internal_d796191a7e739aff19949d0e2f70a55bc1229cd09eda0e0f3841603760a33916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d796191a7e739aff19949d0e2f70a55bc1229cd09eda0e0f3841603760a33916->leave($__internal_d796191a7e739aff19949d0e2f70a55bc1229cd09eda0e0f3841603760a33916_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
