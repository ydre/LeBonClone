<?php

/* OffreBundle:offre:edit.html.twig */
class __TwigTemplate_85cd4e086622b7f1059e917f1c810f7f6ae3f968cc6af20110670fa2358d5881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OffreBundle:offre:edit.html.twig", 1);
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
        $__internal_ded06c7077ce13b9256a545e17db55fd79d392a942474cdfe582a8f03fbfbd0c = $this->env->getExtension("native_profiler");
        $__internal_ded06c7077ce13b9256a545e17db55fd79d392a942474cdfe582a8f03fbfbd0c->enter($__internal_ded06c7077ce13b9256a545e17db55fd79d392a942474cdfe582a8f03fbfbd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OffreBundle:offre:edit.html.twig"));

        // line 2
        $context["page_title"] = "Editer offre";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded06c7077ce13b9256a545e17db55fd79d392a942474cdfe582a8f03fbfbd0c->leave($__internal_ded06c7077ce13b9256a545e17db55fd79d392a942474cdfe582a8f03fbfbd0c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_30eb4dfc7dd539d04246d1d9fce09e96fdf4e40508ed0fb7243a217484966094 = $this->env->getExtension("native_profiler");
        $__internal_30eb4dfc7dd539d04246d1d9fce09e96fdf4e40508ed0fb7243a217484966094->enter($__internal_30eb4dfc7dd539d04246d1d9fce09e96fdf4e40508ed0fb7243a217484966094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h2>Editer une offre</h2>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class='form-group'>
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'label', array("label" => "titre", "label_attr" => array("class" => "form-label")));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'errors');
        echo "  
       </div>
        <div class='form-group'>
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label', array("label" => "description", "label_attr" => array("class" => "form-label")));
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "  
       </div>
        <div class='form-group'>
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'label', array("label" => "prix", "label_attr" => array("class" => "form-label")));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'errors');
        echo "  
       </div>

       ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
   <div>
       <input type=\"submit\" value=\"Edit\"  class=\"btn btn-primary col-md-12\"/>
   </div>
    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul class='list-unstyled'>
        
        <li>
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-warning col-md-12\">
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("offre_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_30eb4dfc7dd539d04246d1d9fce09e96fdf4e40508ed0fb7243a217484966094->leave($__internal_30eb4dfc7dd539d04246d1d9fce09e96fdf4e40508ed0fb7243a217484966094_prof);

    }

    public function getTemplateName()
    {
        return "OffreBundle:offre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  114 => 35,  109 => 33,  101 => 28,  94 => 24,  88 => 21,  84 => 20,  80 => 19,  74 => 16,  70 => 15,  66 => 14,  60 => 11,  56 => 10,  52 => 9,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% set page_title = 'Editer offre' %}*/
/* */
/* {% block body %}*/
/*     <h2>Editer une offre</h2>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         <div class='form-group'>*/
/*             {{ form_label(edit_form.titre, null, {'label': 'titre',  'label_attr': {'class': 'form-label'}}) }}*/
/*             {{ form_widget(edit_form.titre, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(edit_form.titre) }}  */
/*        </div>*/
/*         <div class='form-group'>*/
/*             {{ form_label(edit_form.description, null, {'label': 'description',  'label_attr': {'class': 'form-label'}}) }}*/
/*             {{ form_widget(edit_form.description, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(edit_form.description) }}  */
/*        </div>*/
/*         <div class='form-group'>*/
/*             {{ form_label(edit_form.prix, null, {'label': 'prix',  'label_attr': {'class': 'form-label'}}) }}*/
/*             {{ form_widget(edit_form.prix, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(edit_form.prix) }}  */
/*        </div>*/
/* */
/*        {{ form_rest(edit_form)}}*/
/*    <div>*/
/*        <input type="submit" value="Edit"  class="btn btn-primary col-md-12"/>*/
/*    </div>*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul class='list-unstyled'>*/
/*         */
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete" class="btn btn-warning col-md-12">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('offre_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
