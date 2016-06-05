<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c820ebc0fd5c931cae188b3d1251648dd69d3e86e06f1d62b637f002c934a7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f325a3da65d7a242e7f542bdb5e71c3eb97f4f6b4d9f7f869b1f5c2a08d51140 = $this->env->getExtension("native_profiler");
        $__internal_f325a3da65d7a242e7f542bdb5e71c3eb97f4f6b4d9f7f869b1f5c2a08d51140->enter($__internal_f325a3da65d7a242e7f542bdb5e71c3eb97f4f6b4d9f7f869b1f5c2a08d51140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f325a3da65d7a242e7f542bdb5e71c3eb97f4f6b4d9f7f869b1f5c2a08d51140->leave($__internal_f325a3da65d7a242e7f542bdb5e71c3eb97f4f6b4d9f7f869b1f5c2a08d51140_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05af8d85a478655a577f9f187db5e19cff00435c9e1373c412ed1e3976bf5169 = $this->env->getExtension("native_profiler");
        $__internal_05af8d85a478655a577f9f187db5e19cff00435c9e1373c412ed1e3976bf5169->enter($__internal_05af8d85a478655a577f9f187db5e19cff00435c9e1373c412ed1e3976bf5169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_05af8d85a478655a577f9f187db5e19cff00435c9e1373c412ed1e3976bf5169->leave($__internal_05af8d85a478655a577f9f187db5e19cff00435c9e1373c412ed1e3976bf5169_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
