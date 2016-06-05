<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c76aafa93804980be1e139b046518712e738a32d8bcba087c6e30a7e01eafede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7f0923b951f35f8097cd368d33b1753a4cbf9bd69aab177e559dbe040dd6cd5e = $this->env->getExtension("native_profiler");
        $__internal_7f0923b951f35f8097cd368d33b1753a4cbf9bd69aab177e559dbe040dd6cd5e->enter($__internal_7f0923b951f35f8097cd368d33b1753a4cbf9bd69aab177e559dbe040dd6cd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f0923b951f35f8097cd368d33b1753a4cbf9bd69aab177e559dbe040dd6cd5e->leave($__internal_7f0923b951f35f8097cd368d33b1753a4cbf9bd69aab177e559dbe040dd6cd5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bed3157a10eb97753ced71dcbe13dec5b164c28b17a1556f8be6f54b4c5e924 = $this->env->getExtension("native_profiler");
        $__internal_6bed3157a10eb97753ced71dcbe13dec5b164c28b17a1556f8be6f54b4c5e924->enter($__internal_6bed3157a10eb97753ced71dcbe13dec5b164c28b17a1556f8be6f54b4c5e924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6bed3157a10eb97753ced71dcbe13dec5b164c28b17a1556f8be6f54b4c5e924->leave($__internal_6bed3157a10eb97753ced71dcbe13dec5b164c28b17a1556f8be6f54b4c5e924_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
