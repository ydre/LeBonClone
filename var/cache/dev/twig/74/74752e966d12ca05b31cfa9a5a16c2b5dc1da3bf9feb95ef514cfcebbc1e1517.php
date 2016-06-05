<?php

/* CategorieBundle:categorie:new.html.twig */
class __TwigTemplate_f77786614b186144741cd8e55f7710d7b1ea980ea48475883e35bbbf81c5944b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CategorieBundle:categorie:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19117aa7b2ba162649e989625064bc558080a75e80f2af9617898ab0097dabe0 = $this->env->getExtension("native_profiler");
        $__internal_19117aa7b2ba162649e989625064bc558080a75e80f2af9617898ab0097dabe0->enter($__internal_19117aa7b2ba162649e989625064bc558080a75e80f2af9617898ab0097dabe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CategorieBundle:categorie:new.html.twig"));

        // line 2
        $context["page_title"] = "créer catégorie";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19117aa7b2ba162649e989625064bc558080a75e80f2af9617898ab0097dabe0->leave($__internal_19117aa7b2ba162649e989625064bc558080a75e80f2af9617898ab0097dabe0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7903b3138a080fed8d6a2f732aed997380f5062cf0dbd947239dd32168e21ab8 = $this->env->getExtension("native_profiler");
        $__internal_7903b3138a080fed8d6a2f732aed997380f5062cf0dbd947239dd32168e21ab8->enter($__internal_7903b3138a080fed8d6a2f732aed997380f5062cf0dbd947239dd32168e21ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h2>Créer une catégorie</h2>

\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<button type=\"submit\", class=\"btn btn-primary\">Créer</button>
\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_7903b3138a080fed8d6a2f732aed997380f5062cf0dbd947239dd32168e21ab8->leave($__internal_7903b3138a080fed8d6a2f732aed997380f5062cf0dbd947239dd32168e21ab8_prof);

    }

    public function getTemplateName()
    {
        return "CategorieBundle:categorie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  51 => 8,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% set page_title = 'créer catégorie' %}*/
/* */
/* {% block body %}*/
/*     <h2>Créer une catégorie</h2>*/
/* */
/* 	{{ form_start(form) }}*/
/* 	{{ form_widget(form) }}*/
/* 		<button type="submit", class="btn btn-primary">Créer</button>*/
/* 	{{ form_end(form) }}*/
/* */
/* {% endblock %}*/
