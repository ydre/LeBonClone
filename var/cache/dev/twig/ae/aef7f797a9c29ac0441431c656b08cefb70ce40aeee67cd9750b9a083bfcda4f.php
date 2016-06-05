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
        $__internal_1728d0bc5f32857073a15f620b99f1243f4ba9bab55984756d91131df76b854e = $this->env->getExtension("native_profiler");
        $__internal_1728d0bc5f32857073a15f620b99f1243f4ba9bab55984756d91131df76b854e->enter($__internal_1728d0bc5f32857073a15f620b99f1243f4ba9bab55984756d91131df76b854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1728d0bc5f32857073a15f620b99f1243f4ba9bab55984756d91131df76b854e->leave($__internal_1728d0bc5f32857073a15f620b99f1243f4ba9bab55984756d91131df76b854e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a35b9373fc41a53e3b88c9fb17d701b7f811cd663e76e6b9d028d89b34e93a66 = $this->env->getExtension("native_profiler");
        $__internal_a35b9373fc41a53e3b88c9fb17d701b7f811cd663e76e6b9d028d89b34e93a66->enter($__internal_a35b9373fc41a53e3b88c9fb17d701b7f811cd663e76e6b9d028d89b34e93a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a35b9373fc41a53e3b88c9fb17d701b7f811cd663e76e6b9d028d89b34e93a66->leave($__internal_a35b9373fc41a53e3b88c9fb17d701b7f811cd663e76e6b9d028d89b34e93a66_prof);

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
