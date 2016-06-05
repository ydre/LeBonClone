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
        $__internal_baa35b0b86b82f77b78b778b8d85b83774f4772ad0f45238082bcb7c720aa0e7 = $this->env->getExtension("native_profiler");
        $__internal_baa35b0b86b82f77b78b778b8d85b83774f4772ad0f45238082bcb7c720aa0e7->enter($__internal_baa35b0b86b82f77b78b778b8d85b83774f4772ad0f45238082bcb7c720aa0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

       <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/menu.css"), "html", null, true);
        echo "\"/>
           
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
         
          ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
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
        // line 38
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
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
            // line 48
            echo "                                    <li><a href=\"/register\"><span class=\" glyphicon glyphicon-user\"></span> S'inscrire</a></li>  
                                    <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a></li>
                              ";
        }
        // line 50
        echo "  
                               
                          </li>     
                      </ul>
                 
                </div><!-- /.container-fluid -->
              </nav>
          </header>


                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">

  
          ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "

                </div>
                <div class=\"col-md-3\"></div>
          ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "      </body>
</html>
";
        
        $__internal_baa35b0b86b82f77b78b778b8d85b83774f4772ad0f45238082bcb7c720aa0e7->leave($__internal_baa35b0b86b82f77b78b778b8d85b83774f4772ad0f45238082bcb7c720aa0e7_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0990e0f6d667c69472aca0158384cccab578f15a7b2a854da9d05183bc41bc47 = $this->env->getExtension("native_profiler");
        $__internal_0990e0f6d667c69472aca0158384cccab578f15a7b2a854da9d05183bc41bc47->enter($__internal_0990e0f6d667c69472aca0158384cccab578f15a7b2a854da9d05183bc41bc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "          ";
        
        $__internal_0990e0f6d667c69472aca0158384cccab578f15a7b2a854da9d05183bc41bc47->leave($__internal_0990e0f6d667c69472aca0158384cccab578f15a7b2a854da9d05183bc41bc47_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_0362da2a2cea2d6f3f0578197d584b77447606b39279de99de13a96c3e0f888e = $this->env->getExtension("native_profiler");
        $__internal_0362da2a2cea2d6f3f0578197d584b77447606b39279de99de13a96c3e0f888e->enter($__internal_0362da2a2cea2d6f3f0578197d584b77447606b39279de99de13a96c3e0f888e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "
              <div class=\"wrapper\">
                 <div class=\"container\">
                 </div>
              </div>
              
          ";
        
        $__internal_0362da2a2cea2d6f3f0578197d584b77447606b39279de99de13a96c3e0f888e->leave($__internal_0362da2a2cea2d6f3f0578197d584b77447606b39279de99de13a96c3e0f888e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_548eaa74920f8f2faf9a4718a4347d2cbab295a31c365f80cad85a72427534b6 = $this->env->getExtension("native_profiler");
        $__internal_548eaa74920f8f2faf9a4718a4347d2cbab295a31c365f80cad85a72427534b6->enter($__internal_548eaa74920f8f2faf9a4718a4347d2cbab295a31c365f80cad85a72427534b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_548eaa74920f8f2faf9a4718a4347d2cbab295a31c365f80cad85a72427534b6->leave($__internal_548eaa74920f8f2faf9a4718a4347d2cbab295a31c365f80cad85a72427534b6_prof);

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
        return array (  171 => 76,  158 => 65,  152 => 64,  145 => 15,  139 => 14,  130 => 77,  128 => 76,  122 => 72,  120 => 64,  104 => 50,  99 => 48,  86 => 39,  84 => 38,  60 => 17,  57 => 16,  55 => 14,  50 => 12,  46 => 11,  41 => 9,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>LeBonClone {% if page_title is defined %} - {{ page_title }}{% endif %}</title>*/
/* */
/*        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
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
