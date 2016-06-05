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
        $__internal_5cb8df3ea6560df46c5c915d39dee1e435c262987ee1cb54a57790b73eab0beb = $this->env->getExtension("native_profiler");
        $__internal_5cb8df3ea6560df46c5c915d39dee1e435c262987ee1cb54a57790b73eab0beb->enter($__internal_5cb8df3ea6560df46c5c915d39dee1e435c262987ee1cb54a57790b73eab0beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb8df3ea6560df46c5c915d39dee1e435c262987ee1cb54a57790b73eab0beb->leave($__internal_5cb8df3ea6560df46c5c915d39dee1e435c262987ee1cb54a57790b73eab0beb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5311fa66991648ee08cbcbb1da33a4f916f83ae73452ee8ccc10850218168fa2 = $this->env->getExtension("native_profiler");
        $__internal_5311fa66991648ee08cbcbb1da33a4f916f83ae73452ee8ccc10850218168fa2->enter($__internal_5311fa66991648ee08cbcbb1da33a4f916f83ae73452ee8ccc10850218168fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <p >index</p>
";
        
        $__internal_5311fa66991648ee08cbcbb1da33a4f916f83ae73452ee8ccc10850218168fa2->leave($__internal_5311fa66991648ee08cbcbb1da33a4f916f83ae73452ee8ccc10850218168fa2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d99913e100ed56f9cf384ce4dbb318e5b64535b46581bd7c367098d1ea433122 = $this->env->getExtension("native_profiler");
        $__internal_d99913e100ed56f9cf384ce4dbb318e5b64535b46581bd7c367098d1ea433122->enter($__internal_d99913e100ed56f9cf384ce4dbb318e5b64535b46581bd7c367098d1ea433122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_d99913e100ed56f9cf384ce4dbb318e5b64535b46581bd7c367098d1ea433122->leave($__internal_d99913e100ed56f9cf384ce4dbb318e5b64535b46581bd7c367098d1ea433122_prof);

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
