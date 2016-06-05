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
        $__internal_ed86b6f857d72b5cc52aa0adf7cd684f3cd4781a747f7874582adc53f8f5c90f = $this->env->getExtension("native_profiler");
        $__internal_ed86b6f857d72b5cc52aa0adf7cd684f3cd4781a747f7874582adc53f8f5c90f->enter($__internal_ed86b6f857d72b5cc52aa0adf7cd684f3cd4781a747f7874582adc53f8f5c90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed86b6f857d72b5cc52aa0adf7cd684f3cd4781a747f7874582adc53f8f5c90f->leave($__internal_ed86b6f857d72b5cc52aa0adf7cd684f3cd4781a747f7874582adc53f8f5c90f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad3bcb23f5e9543ef1c21f287767ecaf506c38c7746f58e5dded0e0f274262bb = $this->env->getExtension("native_profiler");
        $__internal_ad3bcb23f5e9543ef1c21f287767ecaf506c38c7746f58e5dded0e0f274262bb->enter($__internal_ad3bcb23f5e9543ef1c21f287767ecaf506c38c7746f58e5dded0e0f274262bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_ad3bcb23f5e9543ef1c21f287767ecaf506c38c7746f58e5dded0e0f274262bb->leave($__internal_ad3bcb23f5e9543ef1c21f287767ecaf506c38c7746f58e5dded0e0f274262bb_prof);

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
