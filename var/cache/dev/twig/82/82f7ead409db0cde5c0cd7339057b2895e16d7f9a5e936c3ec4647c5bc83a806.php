<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_56c5e58d609399901a20b8167e888c27edbd2ddc16fe4a02da298f40b655b7d4 extends Twig_Template
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
        $__internal_f01f659bc9366ed1a9a2c1aca7c81f01c6bc7723d29171f6276e4f55c8012a57 = $this->env->getExtension("native_profiler");
        $__internal_f01f659bc9366ed1a9a2c1aca7c81f01c6bc7723d29171f6276e4f55c8012a57->enter($__internal_f01f659bc9366ed1a9a2c1aca7c81f01c6bc7723d29171f6276e4f55c8012a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "

";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label" => "Vérification ", "label_attr" => array("class" => "form-label")));
        echo "
 ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "  
</div>
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  <div>
       <input type=\"submit\" value=\"Editer\"  class=\"btn btn-primary col-md-12\"/>
   </div>
";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_f01f659bc9366ed1a9a2c1aca7c81f01c6bc7723d29171f6276e4f55c8012a57->leave($__internal_f01f659bc9366ed1a9a2c1aca7c81f01c6bc7723d29171f6276e4f55c8012a57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  72 => 20,  67 => 18,  63 => 17,  59 => 16,  53 => 13,  49 => 12,  45 => 11,  39 => 8,  35 => 7,  31 => 6,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*  <div class='form-group'>*/
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
/* {{ form_label(form.current_password, null, {'label': 'Vérification ',  'label_attr': {'class': 'form-label'}}) }}*/
/*  {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}*/
/* {{ form_errors(form.current_password) }}  */
/* </div>*/
/* {{ form_rest(form)}}*/
/*   <div>*/
/*        <input type="submit" value="Editer"  class="btn btn-primary col-md-12"/>*/
/*    </div>*/
/* {{form_end(form)}}*/
