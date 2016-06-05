<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6cb6c2e3a5e40bbf6f7313664d0a64ac2aa0a6e38d54261dd713cdbeb7ab8145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c80801265b8aa73b2bb3e5c23264c60f820cf696a4c845596191782b983dcba1 = $this->env->getExtension("native_profiler");
        $__internal_c80801265b8aa73b2bb3e5c23264c60f820cf696a4c845596191782b983dcba1->enter($__internal_c80801265b8aa73b2bb3e5c23264c60f820cf696a4c845596191782b983dcba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80801265b8aa73b2bb3e5c23264c60f820cf696a4c845596191782b983dcba1->leave($__internal_c80801265b8aa73b2bb3e5c23264c60f820cf696a4c845596191782b983dcba1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3d73ab8f76353c07fd93507e794419443a021767409a1b0602a6477cbda2355 = $this->env->getExtension("native_profiler");
        $__internal_a3d73ab8f76353c07fd93507e794419443a021767409a1b0602a6477cbda2355->enter($__internal_a3d73ab8f76353c07fd93507e794419443a021767409a1b0602a6477cbda2355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3d73ab8f76353c07fd93507e794419443a021767409a1b0602a6477cbda2355->leave($__internal_a3d73ab8f76353c07fd93507e794419443a021767409a1b0602a6477cbda2355_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b67986d5fc3832f75242bcbe1f747aede44786cb27d31cc4c245a0a1d8926bb = $this->env->getExtension("native_profiler");
        $__internal_4b67986d5fc3832f75242bcbe1f747aede44786cb27d31cc4c245a0a1d8926bb->enter($__internal_4b67986d5fc3832f75242bcbe1f747aede44786cb27d31cc4c245a0a1d8926bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b67986d5fc3832f75242bcbe1f747aede44786cb27d31cc4c245a0a1d8926bb->leave($__internal_4b67986d5fc3832f75242bcbe1f747aede44786cb27d31cc4c245a0a1d8926bb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b88edd665976a90bf2741f984ab71b91ac754a351b0f8b9dc692b67c270f376e = $this->env->getExtension("native_profiler");
        $__internal_b88edd665976a90bf2741f984ab71b91ac754a351b0f8b9dc692b67c270f376e->enter($__internal_b88edd665976a90bf2741f984ab71b91ac754a351b0f8b9dc692b67c270f376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b88edd665976a90bf2741f984ab71b91ac754a351b0f8b9dc692b67c270f376e->leave($__internal_b88edd665976a90bf2741f984ab71b91ac754a351b0f8b9dc692b67c270f376e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
