<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c69978bd22ffe3a0fce5697300d7537391cd04abc0d538ef5869a958846ae750 extends Twig_Template
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
        $__internal_4e1bf4ccc95d919f5ad16b76e6fd1ce49c24e2176bf8d8462e9fa9871e585568 = $this->env->getExtension("native_profiler");
        $__internal_4e1bf4ccc95d919f5ad16b76e6fd1ce49c24e2176bf8d8462e9fa9871e585568->enter($__internal_4e1bf4ccc95d919f5ad16b76e6fd1ce49c24e2176bf8d8462e9fa9871e585568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4e1bf4ccc95d919f5ad16b76e6fd1ce49c24e2176bf8d8462e9fa9871e585568->leave($__internal_4e1bf4ccc95d919f5ad16b76e6fd1ce49c24e2176bf8d8462e9fa9871e585568_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
