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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df788045f437ff9c644da346e10a5f46f93b0685341fdc904787475c93a0276f = $this->env->getExtension("native_profiler");
        $__internal_df788045f437ff9c644da346e10a5f46f93b0685341fdc904787475c93a0276f->enter($__internal_df788045f437ff9c644da346e10a5f46f93b0685341fdc904787475c93a0276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df788045f437ff9c644da346e10a5f46f93b0685341fdc904787475c93a0276f->leave($__internal_df788045f437ff9c644da346e10a5f46f93b0685341fdc904787475c93a0276f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d809363335bc5233715132391e3906875d7ea26b4953f91d8f82a5a768206612 = $this->env->getExtension("native_profiler");
        $__internal_d809363335bc5233715132391e3906875d7ea26b4953f91d8f82a5a768206612->enter($__internal_d809363335bc5233715132391e3906875d7ea26b4953f91d8f82a5a768206612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            

        </div>
    </div>
";
        
        $__internal_d809363335bc5233715132391e3906875d7ea26b4953f91d8f82a5a768206612->leave($__internal_d809363335bc5233715132391e3906875d7ea26b4953f91d8f82a5a768206612_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
