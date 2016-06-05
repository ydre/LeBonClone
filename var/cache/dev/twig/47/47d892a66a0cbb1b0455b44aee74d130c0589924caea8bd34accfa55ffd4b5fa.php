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
        $__internal_8f0ad6bd7a2c06afeec9a536f54987ce613ac5477f37c816a212743383ea8556 = $this->env->getExtension("native_profiler");
        $__internal_8f0ad6bd7a2c06afeec9a536f54987ce613ac5477f37c816a212743383ea8556->enter($__internal_8f0ad6bd7a2c06afeec9a536f54987ce613ac5477f37c816a212743383ea8556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 2
        $context["page_title"] = "inscription";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0ad6bd7a2c06afeec9a536f54987ce613ac5477f37c816a212743383ea8556->leave($__internal_8f0ad6bd7a2c06afeec9a536f54987ce613ac5477f37c816a212743383ea8556_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a89ef9f85fea9ce6e79ad4aefa36653ef48092713118b521d5a3e9a0d17f9ab = $this->env->getExtension("native_profiler");
        $__internal_3a89ef9f85fea9ce6e79ad4aefa36653ef48092713118b521d5a3e9a0d17f9ab->enter($__internal_3a89ef9f85fea9ce6e79ad4aefa36653ef48092713118b521d5a3e9a0d17f9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3a89ef9f85fea9ce6e79ad4aefa36653ef48092713118b521d5a3e9a0d17f9ab->leave($__internal_3a89ef9f85fea9ce6e79ad4aefa36653ef48092713118b521d5a3e9a0d17f9ab_prof);

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
        return array (  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% set page_title = "inscription" %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
