<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_043a0ca6477b06871e9b8f7c4b21535699e00f730ab416d6f3b2964bb5547f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_19a6340421a121e0e461ab866abcce943532268e352b165106488d0163c2b8be = $this->env->getExtension("native_profiler");
        $__internal_19a6340421a121e0e461ab866abcce943532268e352b165106488d0163c2b8be->enter($__internal_19a6340421a121e0e461ab866abcce943532268e352b165106488d0163c2b8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a6340421a121e0e461ab866abcce943532268e352b165106488d0163c2b8be->leave($__internal_19a6340421a121e0e461ab866abcce943532268e352b165106488d0163c2b8be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_392fc088fa48880eeb2485f2aac56d4bbbd0d45a85a5f867ac4c1f9d765eb6f7 = $this->env->getExtension("native_profiler");
        $__internal_392fc088fa48880eeb2485f2aac56d4bbbd0d45a85a5f867ac4c1f9d765eb6f7->enter($__internal_392fc088fa48880eeb2485f2aac56d4bbbd0d45a85a5f867ac4c1f9d765eb6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_392fc088fa48880eeb2485f2aac56d4bbbd0d45a85a5f867ac4c1f9d765eb6f7->leave($__internal_392fc088fa48880eeb2485f2aac56d4bbbd0d45a85a5f867ac4c1f9d765eb6f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
