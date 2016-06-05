<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a1e94e8940b2ecc53c7a46df5baefa0c2dc98002fc4ede499bccb29157f23fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4b040cbabd428d1d0cc5d817e128c0c91b56f9df85f64b8e981c6fe4546fff62 = $this->env->getExtension("native_profiler");
        $__internal_4b040cbabd428d1d0cc5d817e128c0c91b56f9df85f64b8e981c6fe4546fff62->enter($__internal_4b040cbabd428d1d0cc5d817e128c0c91b56f9df85f64b8e981c6fe4546fff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b040cbabd428d1d0cc5d817e128c0c91b56f9df85f64b8e981c6fe4546fff62->leave($__internal_4b040cbabd428d1d0cc5d817e128c0c91b56f9df85f64b8e981c6fe4546fff62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6097c2cbb78a2d1d130d6b399759af6da9b49617d118d5eeaea5321d5e9502ad = $this->env->getExtension("native_profiler");
        $__internal_6097c2cbb78a2d1d130d6b399759af6da9b49617d118d5eeaea5321d5e9502ad->enter($__internal_6097c2cbb78a2d1d130d6b399759af6da9b49617d118d5eeaea5321d5e9502ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6097c2cbb78a2d1d130d6b399759af6da9b49617d118d5eeaea5321d5e9502ad->leave($__internal_6097c2cbb78a2d1d130d6b399759af6da9b49617d118d5eeaea5321d5e9502ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
