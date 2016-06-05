<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c11466d1fcf3d03cfa08a5006863f9df6550f29cb4eb82fdd206346787fc9b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06e328314cfd50ef99b0cb1c31b57b8eb3334947b297b99b58c9c1c8989d2a5b = $this->env->getExtension("native_profiler");
        $__internal_06e328314cfd50ef99b0cb1c31b57b8eb3334947b297b99b58c9c1c8989d2a5b->enter($__internal_06e328314cfd50ef99b0cb1c31b57b8eb3334947b297b99b58c9c1c8989d2a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_06e328314cfd50ef99b0cb1c31b57b8eb3334947b297b99b58c9c1c8989d2a5b->leave($__internal_06e328314cfd50ef99b0cb1c31b57b8eb3334947b297b99b58c9c1c8989d2a5b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc77a6212ae9eb88854e5b6ed1a9066a88741d4cd78b40471db923d23a9b84dd = $this->env->getExtension("native_profiler");
        $__internal_cc77a6212ae9eb88854e5b6ed1a9066a88741d4cd78b40471db923d23a9b84dd->enter($__internal_cc77a6212ae9eb88854e5b6ed1a9066a88741d4cd78b40471db923d23a9b84dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cc77a6212ae9eb88854e5b6ed1a9066a88741d4cd78b40471db923d23a9b84dd->leave($__internal_cc77a6212ae9eb88854e5b6ed1a9066a88741d4cd78b40471db923d23a9b84dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
