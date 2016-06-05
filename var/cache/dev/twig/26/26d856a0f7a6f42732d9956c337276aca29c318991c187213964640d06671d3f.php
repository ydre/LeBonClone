<?php

/* base.html.twig */
class __TwigTemplate_91505a5535615a15240f904f9024588f82b6751d969a37e11aaaca7fc3a0c331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77fa35a57cdf35f25e23a618fa2b3b8b7d9f0ff6f6c671b06b39fa6b3841cb74 = $this->env->getExtension("native_profiler");
        $__internal_77fa35a57cdf35f25e23a618fa2b3b8b7d9f0ff6f6c671b06b39fa6b3841cb74->enter($__internal_77fa35a57cdf35f25e23a618fa2b3b8b7d9f0ff6f6c671b06b39fa6b3841cb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>LeBonClone ";
        // line 5
        if (array_key_exists("page_title", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
        }
        echo "</title>

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/menu.css"), "html", null, true);
        echo "\"/>
           
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
         
          ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
   
    </head>
   
    <body>

        <header>
            <nav class=\"navbar navbar-default\" role=\"navigation\">
              <div class=\"container\">
                <div class=\"navbar-header\">    
                  <a class=\"navbar-brand\" href=\"#\">LeBonClone23</a>
                </div>

                    <ul class=\"nav navbar-nav\">
                       <li ><a href=\"#\" class=\"active\">Accueil </a></li>
                       <li><a href=\"#\">Link</a></li> 
                    </ul>
                     
                     <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">S'inscrire</a></li>     
                     </ul>
               
              </div><!-- /.container-fluid -->
            </nav>
        </header>
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "   
    </body>
</html>
";
        
        $__internal_77fa35a57cdf35f25e23a618fa2b3b8b7d9f0ff6f6c671b06b39fa6b3841cb74->leave($__internal_77fa35a57cdf35f25e23a618fa2b3b8b7d9f0ff6f6c671b06b39fa6b3841cb74_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e1403dd07b62fc8430b2a372dcb044b9ce5a17180d5c1981a617cce40579e2d = $this->env->getExtension("native_profiler");
        $__internal_0e1403dd07b62fc8430b2a372dcb044b9ce5a17180d5c1981a617cce40579e2d->enter($__internal_0e1403dd07b62fc8430b2a372dcb044b9ce5a17180d5c1981a617cce40579e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "          ";
        
        $__internal_0e1403dd07b62fc8430b2a372dcb044b9ce5a17180d5c1981a617cce40579e2d->leave($__internal_0e1403dd07b62fc8430b2a372dcb044b9ce5a17180d5c1981a617cce40579e2d_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_bee03f06bc738f1524e76c4ea34b3ccbf8e154daf3edc1bcc2ff2c69a81f4948 = $this->env->getExtension("native_profiler");
        $__internal_bee03f06bc738f1524e76c4ea34b3ccbf8e154daf3edc1bcc2ff2c69a81f4948->enter($__internal_bee03f06bc738f1524e76c4ea34b3ccbf8e154daf3edc1bcc2ff2c69a81f4948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bee03f06bc738f1524e76c4ea34b3ccbf8e154daf3edc1bcc2ff2c69a81f4948->leave($__internal_bee03f06bc738f1524e76c4ea34b3ccbf8e154daf3edc1bcc2ff2c69a81f4948_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72eb018b95d72cf546cc21a40cb9c94a57e88a4c2885ee26cdbe580a22b5a224 = $this->env->getExtension("native_profiler");
        $__internal_72eb018b95d72cf546cc21a40cb9c94a57e88a4c2885ee26cdbe580a22b5a224->enter($__internal_72eb018b95d72cf546cc21a40cb9c94a57e88a4c2885ee26cdbe580a22b5a224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72eb018b95d72cf546cc21a40cb9c94a57e88a4c2885ee26cdbe580a22b5a224->leave($__internal_72eb018b95d72cf546cc21a40cb9c94a57e88a4c2885ee26cdbe580a22b5a224_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  118 => 41,  111 => 14,  105 => 13,  95 => 43,  92 => 42,  90 => 41,  62 => 16,  59 => 15,  57 => 13,  52 => 11,  48 => 10,  43 => 8,  39 => 7,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>LeBonClone {% if page_title is defined %} - {{ page_title }}{% endif %}</title>*/
/* */
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/bootstrap.min.css')}}"/>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/menu.css')}}"/>*/
/*            */
/*         <script src="{{ asset('bundles/framework/js/jquery.js')}}"></script>*/
/*         <script src="{{ asset('bundles/framework/js/bootstrap.min.js')}}"></script>*/
/*          */
/*           {% block stylesheets %}*/
/*           {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*    */
/*     </head>*/
/*    */
/*     <body>*/
/* */
/*         <header>*/
/*             <nav class="navbar navbar-default" role="navigation">*/
/*               <div class="container">*/
/*                 <div class="navbar-header">    */
/*                   <a class="navbar-brand" href="#">LeBonClone23</a>*/
/*                 </div>*/
/* */
/*                     <ul class="nav navbar-nav">*/
/*                        <li ><a href="#" class="active">Accueil </a></li>*/
/*                        <li><a href="#">Link</a></li> */
/*                     </ul>*/
/*                      */
/*                      <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="#">S'inscrire</a></li>     */
/*                      </ul>*/
/*                */
/*               </div><!-- /.container-fluid -->*/
/*             </nav>*/
/*         </header>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*    */
/*     </body>*/
/* </html>*/
/* */
