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
        $__internal_633c9777e9c0ee7583812077a4be02f3960ca0845a63f285daadf664e6c82f7f = $this->env->getExtension("native_profiler");
        $__internal_633c9777e9c0ee7583812077a4be02f3960ca0845a63f285daadf664e6c82f7f->enter($__internal_633c9777e9c0ee7583812077a4be02f3960ca0845a63f285daadf664e6c82f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_633c9777e9c0ee7583812077a4be02f3960ca0845a63f285daadf664e6c82f7f->leave($__internal_633c9777e9c0ee7583812077a4be02f3960ca0845a63f285daadf664e6c82f7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1102f4fae2c696290bdd3baba3900072ab2c9e395f6916f6768367fba2e2517 = $this->env->getExtension("native_profiler");
        $__internal_e1102f4fae2c696290bdd3baba3900072ab2c9e395f6916f6768367fba2e2517->enter($__internal_e1102f4fae2c696290bdd3baba3900072ab2c9e395f6916f6768367fba2e2517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e1102f4fae2c696290bdd3baba3900072ab2c9e395f6916f6768367fba2e2517->leave($__internal_e1102f4fae2c696290bdd3baba3900072ab2c9e395f6916f6768367fba2e2517_prof);

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
