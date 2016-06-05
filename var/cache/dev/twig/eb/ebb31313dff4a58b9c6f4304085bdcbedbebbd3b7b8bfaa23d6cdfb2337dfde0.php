<?php

/* ::base.html.twig */
class __TwigTemplate_afb0b7c737ae508247ed6a344b955a2842b3aa1600aee6c79e5925180781dcf5 extends Twig_Template
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
        $__internal_62510740b5fdbdba4af0210dbcb9729c214c8f8c993343dcd0c90b39fb6a352e = $this->env->getExtension("native_profiler");
        $__internal_62510740b5fdbdba4af0210dbcb9729c214c8f8c993343dcd0c90b39fb6a352e->enter($__internal_62510740b5fdbdba4af0210dbcb9729c214c8f8c993343dcd0c90b39fb6a352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                    <a class=\"navbar-brand\" href=\"/\">LeBonClone</a>
                  </div>

                      <ul class=\"nav navbar-nav\">
                         <li ><a href=\"/\" class=\"active\">Accueil </a></li>
                         <li><a href=\"#\">Link</a></li> 
                      </ul>
                       
                       <ul class=\"nav navbar-nav navbar-right\">                

                          <!--    si membre connecté         -->
                         <li class=\"dropdown\">
                             ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 38
            echo "                                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                                     <ul class=\"dropdown-menu\">
                                       <li><a href=\"/profile\"><span class=\"glyphicon glyphicon-pushpin\"></span> profil</a></li>
                                       <li><a href=\"/profile/edit\"><span class=\"glyphicon glyphicon-edit\"></span> Editer profil</a></li>
                                       <li><a href=\"/logout\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnection</a></li>     
                                     </ul>

                          <!--    si anonyme       -->
                              ";
        } else {
            // line 47
            echo "                                    <li><a href=\"/register\"><span class=\" glyphicon glyphicon-user\"></span> S'inscrire</a></li>  
                                    <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a></li>
                              ";
        }
        // line 49
        echo "  
                               
                          </li>     
                      </ul>
                 
                </div><!-- /.container-fluid -->
              </nav>
          </header>


                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">

  
          ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "

                </div>
                <div class=\"col-md-3\"></div>
          ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "      </body>
</html>
";
        
        $__internal_62510740b5fdbdba4af0210dbcb9729c214c8f8c993343dcd0c90b39fb6a352e->leave($__internal_62510740b5fdbdba4af0210dbcb9729c214c8f8c993343dcd0c90b39fb6a352e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f98d8b0d4c0a895c552641ae885da07e99bd09812cd22bd974711987db9e73c0 = $this->env->getExtension("native_profiler");
        $__internal_f98d8b0d4c0a895c552641ae885da07e99bd09812cd22bd974711987db9e73c0->enter($__internal_f98d8b0d4c0a895c552641ae885da07e99bd09812cd22bd974711987db9e73c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "          ";
        
        $__internal_f98d8b0d4c0a895c552641ae885da07e99bd09812cd22bd974711987db9e73c0->leave($__internal_f98d8b0d4c0a895c552641ae885da07e99bd09812cd22bd974711987db9e73c0_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_193f859ebe2516cf4149dfbae815b0f6641c00135295841190cdadeffcf932e4 = $this->env->getExtension("native_profiler");
        $__internal_193f859ebe2516cf4149dfbae815b0f6641c00135295841190cdadeffcf932e4->enter($__internal_193f859ebe2516cf4149dfbae815b0f6641c00135295841190cdadeffcf932e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "
              <div class=\"wrapper\">
                 <div class=\"container\">
                 </div>
              </div>
              
          ";
        
        $__internal_193f859ebe2516cf4149dfbae815b0f6641c00135295841190cdadeffcf932e4->leave($__internal_193f859ebe2516cf4149dfbae815b0f6641c00135295841190cdadeffcf932e4_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e258e5049f59b96211485a4fb8cb4585d7b3f3b269877f18a9b3ad4e065656a = $this->env->getExtension("native_profiler");
        $__internal_5e258e5049f59b96211485a4fb8cb4585d7b3f3b269877f18a9b3ad4e065656a->enter($__internal_5e258e5049f59b96211485a4fb8cb4585d7b3f3b269877f18a9b3ad4e065656a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e258e5049f59b96211485a4fb8cb4585d7b3f3b269877f18a9b3ad4e065656a->leave($__internal_5e258e5049f59b96211485a4fb8cb4585d7b3f3b269877f18a9b3ad4e065656a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 75,  160 => 64,  154 => 63,  147 => 14,  141 => 13,  132 => 76,  130 => 75,  124 => 71,  122 => 63,  106 => 49,  101 => 47,  88 => 38,  86 => 37,  62 => 16,  59 => 15,  57 => 13,  52 => 11,  48 => 10,  43 => 8,  39 => 7,  31 => 5,  25 => 1,);
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
/*           <header>*/
/*               <nav class="navbar navbar-default" role="navigation">*/
/*                 <div class="container">*/
/*                   <div class="navbar-header">    */
/*                     <a class="navbar-brand" href="/">LeBonClone</a>*/
/*                   </div>*/
/* */
/*                       <ul class="nav navbar-nav">*/
/*                          <li ><a href="/" class="active">Accueil </a></li>*/
/*                          <li><a href="#">Link</a></li> */
/*                       </ul>*/
/*                        */
/*                        <ul class="nav navbar-nav navbar-right">                */
/* */
/*                           <!--    si membre connecté         -->*/
/*                          <li class="dropdown">*/
/*                              {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ app.user.username }}<span class="caret"></span></a>*/
/*                                      <ul class="dropdown-menu">*/
/*                                        <li><a href="/profile"><span class="glyphicon glyphicon-pushpin"></span> profil</a></li>*/
/*                                        <li><a href="/profile/edit"><span class="glyphicon glyphicon-edit"></span> Editer profil</a></li>*/
/*                                        <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Déconnection</a></li>     */
/*                                      </ul>*/
/* */
/*                           <!--    si anonyme       -->*/
/*                               {% else %}*/
/*                                     <li><a href="/register"><span class=" glyphicon glyphicon-user"></span> S'inscrire</a></li>  */
/*                                     <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>*/
/*                               {% endif %}  */
/*                                */
/*                           </li>     */
/*                       </ul>*/
/*                  */
/*                 </div><!-- /.container-fluid -->*/
/*               </nav>*/
/*           </header>*/
/* */
/* */
/*                 <div class="col-md-3"></div>*/
/*                 <div class="col-md-6">*/
/* */
/*   */
/*           {% block body %}*/
/* */
/*               <div class="wrapper">*/
/*                  <div class="container">*/
/*                  </div>*/
/*               </div>*/
/*               */
/*           {% endblock %}*/
/* */
/* */
/*                 </div>*/
/*                 <div class="col-md-3"></div>*/
/*           {% block javascripts %}{% endblock %}*/
/*       </body>*/
/* </html>*/
/* */
