<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_04ba3ee13c6b9fed2952d51a3c63dab8009a8a87f9ad57ad270fb88656873618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0d66081add01b516e81cf68721faa612de4367d49b28895d8b8b76daa55b5aae = $this->env->getExtension("native_profiler");
        $__internal_0d66081add01b516e81cf68721faa612de4367d49b28895d8b8b76daa55b5aae->enter($__internal_0d66081add01b516e81cf68721faa612de4367d49b28895d8b8b76daa55b5aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d66081add01b516e81cf68721faa612de4367d49b28895d8b8b76daa55b5aae->leave($__internal_0d66081add01b516e81cf68721faa612de4367d49b28895d8b8b76daa55b5aae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_757476b93d0549989b611754aac661195f20035e84516a9a0a49415809d6dd8d = $this->env->getExtension("native_profiler");
        $__internal_757476b93d0549989b611754aac661195f20035e84516a9a0a49415809d6dd8d->enter($__internal_757476b93d0549989b611754aac661195f20035e84516a9a0a49415809d6dd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_757476b93d0549989b611754aac661195f20035e84516a9a0a49415809d6dd8d->leave($__internal_757476b93d0549989b611754aac661195f20035e84516a9a0a49415809d6dd8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
