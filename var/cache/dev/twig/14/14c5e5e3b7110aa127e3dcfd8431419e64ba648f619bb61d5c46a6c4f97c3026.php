<?php

/* default/index.html.twig */
class __TwigTemplate_ee538c1f47234a2b9ae22304075871920b71c866235dc468f1f96ed3b0c2cb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4a331183ff090304804d200fcad0dc95b0711a5c4a29b483ba191c2e0bcba94 = $this->env->getExtension("native_profiler");
        $__internal_c4a331183ff090304804d200fcad0dc95b0711a5c4a29b483ba191c2e0bcba94->enter($__internal_c4a331183ff090304804d200fcad0dc95b0711a5c4a29b483ba191c2e0bcba94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a331183ff090304804d200fcad0dc95b0711a5c4a29b483ba191c2e0bcba94->leave($__internal_c4a331183ff090304804d200fcad0dc95b0711a5c4a29b483ba191c2e0bcba94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b54574db6366a663a77964b22367936174b5bd30f2d087fb7696747e337de5ed = $this->env->getExtension("native_profiler");
        $__internal_b54574db6366a663a77964b22367936174b5bd30f2d087fb7696747e337de5ed->enter($__internal_b54574db6366a663a77964b22367936174b5bd30f2d087fb7696747e337de5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <p >index</p>
";
        
        $__internal_b54574db6366a663a77964b22367936174b5bd30f2d087fb7696747e337de5ed->leave($__internal_b54574db6366a663a77964b22367936174b5bd30f2d087fb7696747e337de5ed_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd286d4afbe08d1b4e9c1b2d882bb70522e90504dc9a3f50740530c283944183 = $this->env->getExtension("native_profiler");
        $__internal_bd286d4afbe08d1b4e9c1b2d882bb70522e90504dc9a3f50740530c283944183->enter($__internal_bd286d4afbe08d1b4e9c1b2d882bb70522e90504dc9a3f50740530c283944183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_bd286d4afbe08d1b4e9c1b2d882bb70522e90504dc9a3f50740530c283944183->leave($__internal_bd286d4afbe08d1b4e9c1b2d882bb70522e90504dc9a3f50740530c283944183_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <p >index</p>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
