<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_cf405336a10f1b4d04d9e34528c7a59f3847954102985bc1079bda7c95c3393e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36ffd10463c304803993889e93addfdd2065a19f843c8d75fe81cc1ef2912b7f = $this->env->getExtension("native_profiler");
        $__internal_36ffd10463c304803993889e93addfdd2065a19f843c8d75fe81cc1ef2912b7f->enter($__internal_36ffd10463c304803993889e93addfdd2065a19f843c8d75fe81cc1ef2912b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "

";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
<div class='form-group'>
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Adresse e-mail", "label_attr" => array("class" => "form-label")));
        echo "
 ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "  
</div>
<div class='form-group'>
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d utilisateur", "label_attr" => array("class" => "form-label")));
        echo "
 ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "  
</div>
<div class='form-group'>
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe ", "label_attr" => array("class" => "form-label")));
        echo "
 ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "  
</div>
<div class='form-group'>
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Vérification ", "label_attr" => array("class" => "form-label")));
        echo "
 ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "  
</div>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  <div>
       <input type=\"submit\" value=\"Inscription\"  class=\"btn btn-primary col-md-12\"/>
   </div>
";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_36ffd10463c304803993889e93addfdd2065a19f843c8d75fe81cc1ef2912b7f->leave($__internal_36ffd10463c304803993889e93addfdd2065a19f843c8d75fe81cc1ef2912b7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  86 => 25,  81 => 23,  77 => 22,  73 => 21,  67 => 18,  63 => 17,  59 => 16,  53 => 13,  49 => 12,  45 => 11,  39 => 8,  35 => 7,  31 => 6,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* <div class='form-group'>*/
/* {{ form_label(form.email, null, {'label': 'Adresse e-mail',  'label_attr': {'class': 'form-label'}}) }}*/
/*  {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/* {{ form_errors(form.email) }}  */
/* </div>*/
/* <div class='form-group'>*/
/* {{ form_label(form.username, null, {'label': 'Nom d utilisateur',  'label_attr': {'class': 'form-label'}}) }}*/
/*  {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/* {{ form_errors(form.username) }}  */
/* </div>*/
/* <div class='form-group'>*/
/* {{ form_label(form.plainPassword.first, null, {'label': 'Mot de passe ',  'label_attr': {'class': 'form-label'}}) }}*/
/*  {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}*/
/* {{ form_errors(form.plainPassword.first) }}  */
/* </div>*/
/* <div class='form-group'>*/
/* {{ form_label(form.plainPassword.second, null, {'label': 'Vérification ',  'label_attr': {'class': 'form-label'}}) }}*/
/*  {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}*/
/* {{ form_errors(form.plainPassword.second) }}  */
/* </div>*/
/* {{ form_rest(form)}}*/
/*   <div>*/
/*        <input type="submit" value="Inscription"  class="btn btn-primary col-md-12"/>*/
/*    </div>*/
/* {{form_end(form)}}*/
