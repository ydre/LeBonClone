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
        $__internal_f5682f96cddc41f37d84886d5f3a44cdfa7411ca11f6021a1e328a77cc06edd5 = $this->env->getExtension("native_profiler");
        $__internal_f5682f96cddc41f37d84886d5f3a44cdfa7411ca11f6021a1e328a77cc06edd5->enter($__internal_f5682f96cddc41f37d84886d5f3a44cdfa7411ca11f6021a1e328a77cc06edd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5682f96cddc41f37d84886d5f3a44cdfa7411ca11f6021a1e328a77cc06edd5->leave($__internal_f5682f96cddc41f37d84886d5f3a44cdfa7411ca11f6021a1e328a77cc06edd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6d90732cce394c9210be298726e55f888dd959b72dbff06c813c4651f9139de = $this->env->getExtension("native_profiler");
        $__internal_e6d90732cce394c9210be298726e55f888dd959b72dbff06c813c4651f9139de->enter($__internal_e6d90732cce394c9210be298726e55f888dd959b72dbff06c813c4651f9139de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e6d90732cce394c9210be298726e55f888dd959b72dbff06c813c4651f9139de->leave($__internal_e6d90732cce394c9210be298726e55f888dd959b72dbff06c813c4651f9139de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81d5b8dbd8e0c242e6cbc41617519a1f10e920ca8f3f55f8c19d1b5ca68db208 = $this->env->getExtension("native_profiler");
        $__internal_81d5b8dbd8e0c242e6cbc41617519a1f10e920ca8f3f55f8c19d1b5ca68db208->enter($__internal_81d5b8dbd8e0c242e6cbc41617519a1f10e920ca8f3f55f8c19d1b5ca68db208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81d5b8dbd8e0c242e6cbc41617519a1f10e920ca8f3f55f8c19d1b5ca68db208->leave($__internal_81d5b8dbd8e0c242e6cbc41617519a1f10e920ca8f3f55f8c19d1b5ca68db208_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e34bf6927dda6ed90414f89166469adac1160bfc002ab350809abb11ba52ba0 = $this->env->getExtension("native_profiler");
        $__internal_8e34bf6927dda6ed90414f89166469adac1160bfc002ab350809abb11ba52ba0->enter($__internal_8e34bf6927dda6ed90414f89166469adac1160bfc002ab350809abb11ba52ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8e34bf6927dda6ed90414f89166469adac1160bfc002ab350809abb11ba52ba0->leave($__internal_8e34bf6927dda6ed90414f89166469adac1160bfc002ab350809abb11ba52ba0_prof);

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
