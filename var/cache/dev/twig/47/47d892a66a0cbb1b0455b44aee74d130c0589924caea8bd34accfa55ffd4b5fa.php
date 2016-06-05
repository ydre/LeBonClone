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
        $__internal_976743604e676e717c94c79cc284e2c93ee30c39652d327ab8ff7ff2634dc42e = $this->env->getExtension("native_profiler");
        $__internal_976743604e676e717c94c79cc284e2c93ee30c39652d327ab8ff7ff2634dc42e->enter($__internal_976743604e676e717c94c79cc284e2c93ee30c39652d327ab8ff7ff2634dc42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 2
        $context["page_title"] = "inscription";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976743604e676e717c94c79cc284e2c93ee30c39652d327ab8ff7ff2634dc42e->leave($__internal_976743604e676e717c94c79cc284e2c93ee30c39652d327ab8ff7ff2634dc42e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0ac53c4bf705ab1b964c731f58c41860f8169aba5a0005abec486f27771ad1b = $this->env->getExtension("native_profiler");
        $__internal_e0ac53c4bf705ab1b964c731f58c41860f8169aba5a0005abec486f27771ad1b->enter($__internal_e0ac53c4bf705ab1b964c731f58c41860f8169aba5a0005abec486f27771ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e0ac53c4bf705ab1b964c731f58c41860f8169aba5a0005abec486f27771ad1b->leave($__internal_e0ac53c4bf705ab1b964c731f58c41860f8169aba5a0005abec486f27771ad1b_prof);

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
