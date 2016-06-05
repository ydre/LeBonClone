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
        $__internal_b5cfb3a9142c5bac5dc007d0fcfe79da03ba525bc0c6d78052b8af34e46796d6 = $this->env->getExtension("native_profiler");
        $__internal_b5cfb3a9142c5bac5dc007d0fcfe79da03ba525bc0c6d78052b8af34e46796d6->enter($__internal_b5cfb3a9142c5bac5dc007d0fcfe79da03ba525bc0c6d78052b8af34e46796d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b5cfb3a9142c5bac5dc007d0fcfe79da03ba525bc0c6d78052b8af34e46796d6->leave($__internal_b5cfb3a9142c5bac5dc007d0fcfe79da03ba525bc0c6d78052b8af34e46796d6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba71363bf72599af5f4272fc9c396f593fa0dbe8a9467675d033fcad4942bc1b = $this->env->getExtension("native_profiler");
        $__internal_ba71363bf72599af5f4272fc9c396f593fa0dbe8a9467675d033fcad4942bc1b->enter($__internal_ba71363bf72599af5f4272fc9c396f593fa0dbe8a9467675d033fcad4942bc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ba71363bf72599af5f4272fc9c396f593fa0dbe8a9467675d033fcad4942bc1b->leave($__internal_ba71363bf72599af5f4272fc9c396f593fa0dbe8a9467675d033fcad4942bc1b_prof);

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
