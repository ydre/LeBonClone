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
        $__internal_7667571d2f7ad2d7135799f248f22e39173726ea420ef07ac708e4c34fe5bf77 = $this->env->getExtension("native_profiler");
        $__internal_7667571d2f7ad2d7135799f248f22e39173726ea420ef07ac708e4c34fe5bf77->enter($__internal_7667571d2f7ad2d7135799f248f22e39173726ea420ef07ac708e4c34fe5bf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7667571d2f7ad2d7135799f248f22e39173726ea420ef07ac708e4c34fe5bf77->leave($__internal_7667571d2f7ad2d7135799f248f22e39173726ea420ef07ac708e4c34fe5bf77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a128cec41576ac980dc3013728f4c4aaf1a66e68e94e222e1af1ee6b4476f011 = $this->env->getExtension("native_profiler");
        $__internal_a128cec41576ac980dc3013728f4c4aaf1a66e68e94e222e1af1ee6b4476f011->enter($__internal_a128cec41576ac980dc3013728f4c4aaf1a66e68e94e222e1af1ee6b4476f011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a128cec41576ac980dc3013728f4c4aaf1a66e68e94e222e1af1ee6b4476f011->leave($__internal_a128cec41576ac980dc3013728f4c4aaf1a66e68e94e222e1af1ee6b4476f011_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dffbe940439681118e5d1b34d1c6f0701de0c5f595ef5457c58fb4706d0c3b8 = $this->env->getExtension("native_profiler");
        $__internal_2dffbe940439681118e5d1b34d1c6f0701de0c5f595ef5457c58fb4706d0c3b8->enter($__internal_2dffbe940439681118e5d1b34d1c6f0701de0c5f595ef5457c58fb4706d0c3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2dffbe940439681118e5d1b34d1c6f0701de0c5f595ef5457c58fb4706d0c3b8->leave($__internal_2dffbe940439681118e5d1b34d1c6f0701de0c5f595ef5457c58fb4706d0c3b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_518a03ff85c7ed3136dadf258ae8b8ca4b6f9867d1eb0856174f7e40ac946fa7 = $this->env->getExtension("native_profiler");
        $__internal_518a03ff85c7ed3136dadf258ae8b8ca4b6f9867d1eb0856174f7e40ac946fa7->enter($__internal_518a03ff85c7ed3136dadf258ae8b8ca4b6f9867d1eb0856174f7e40ac946fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_518a03ff85c7ed3136dadf258ae8b8ca4b6f9867d1eb0856174f7e40ac946fa7->leave($__internal_518a03ff85c7ed3136dadf258ae8b8ca4b6f9867d1eb0856174f7e40ac946fa7_prof);

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
