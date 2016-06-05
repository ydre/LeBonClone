<?php

/* OffreBundle:offre:new.html.twig */
class __TwigTemplate_adb6af083153c707868be7fa06eaa49a062426e2dd22bc59fd2f4c9923c1a5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OffreBundle:offre:new.html.twig", 1);
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
        $__internal_13a10e8425c5c5002436c2717da463b7a20a29930140eff01113e953c17a60f3 = $this->env->getExtension("native_profiler");
        $__internal_13a10e8425c5c5002436c2717da463b7a20a29930140eff01113e953c17a60f3->enter($__internal_13a10e8425c5c5002436c2717da463b7a20a29930140eff01113e953c17a60f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OffreBundle:offre:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a10e8425c5c5002436c2717da463b7a20a29930140eff01113e953c17a60f3->leave($__internal_13a10e8425c5c5002436c2717da463b7a20a29930140eff01113e953c17a60f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c300d1e565a069154657d4c2cec08941155c4e8261fc16b739f2bc646297f19 = $this->env->getExtension("native_profiler");
        $__internal_4c300d1e565a069154657d4c2cec08941155c4e8261fc16b739f2bc646297f19->enter($__internal_4c300d1e565a069154657d4c2cec08941155c4e8261fc16b739f2bc646297f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Créer une offre</h2>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class='form-group'>
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "titre", "label_attr" => array("class" => "form-label")));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "  
       </div>
        <div class='form-group'>
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "description", "label_attr" => array("class" => "form-label")));
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "  
       </div>
        <div class='form-group'>
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label" => "prix", "label_attr" => array("class" => "form-label")));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'errors');
        echo "  
       </div>

       ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
   <div>
       <input type=\"submit\" value=\"Create\"  class=\"btn btn-primary col-md-12\"/>
   </div>
      

    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("offre_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4c300d1e565a069154657d4c2cec08941155c4e8261fc16b739f2bc646297f19->leave($__internal_4c300d1e565a069154657d4c2cec08941155c4e8261fc16b739f2bc646297f19_prof);

    }

    public function getTemplateName()
    {
        return "OffreBundle:offre:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  101 => 30,  92 => 24,  86 => 21,  82 => 20,  78 => 19,  72 => 16,  68 => 15,  64 => 14,  58 => 11,  54 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2>Créer une offre</h2>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*         <div class='form-group'>*/
/*             {{ form_label(form.titre, null, {'label': 'titre',  'label_attr': {'class': 'form-label'}}) }}*/
/*             {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.titre) }}  */
/*        </div>*/
/*         <div class='form-group'>*/
/*             {{ form_label(form.description, null, {'label': 'description',  'label_attr': {'class': 'form-label'}}) }}*/
/*             {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.description) }}  */
/*        </div>*/
/*         <div class='form-group'>*/
/*             {{ form_label(form.prix, null, {'label': 'prix',  'label_attr': {'class': 'form-label'}}) }}*/
/*             {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.prix) }}  */
/*        </div>*/
/* */
/*        {{ form_rest(form)}}*/
/*    <div>*/
/*        <input type="submit" value="Create"  class="btn btn-primary col-md-12"/>*/
/*    </div>*/
/*       */
/* */
/*     {{ form_end(form) }}*/
/* */
/*     <ul class="list-unstyled">*/
/*         <li>*/
/*             <a href="{{ path('offre_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
