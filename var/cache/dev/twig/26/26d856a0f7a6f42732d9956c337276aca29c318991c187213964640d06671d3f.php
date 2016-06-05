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
        $__internal_28521e45230bf8492d9186908aaaf7b712de6ab1930d1b6b3936e84a0d7d0da6 = $this->env->getExtension("native_profiler");
        $__internal_28521e45230bf8492d9186908aaaf7b712de6ab1930d1b6b3936e84a0d7d0da6->enter($__internal_28521e45230bf8492d9186908aaaf7b712de6ab1930d1b6b3936e84a0d7d0da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                         <li><a href=\"/offre\">Offres</a></li> 
                         ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                          <li><a href=\"/categorie\">Catégorie</li>
                       ";
        }
        // line 36
        echo "                      </ul>
                       
                       <ul class=\"nav navbar-nav navbar-right\">                

                          <!--    si membre connecté         -->
                         <li class=\"dropdown\">
                             ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
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
            // line 52
            echo "                                    <li><a href=\"/register\"><span class=\" glyphicon glyphicon-user\"></span> S'inscrire</a></li>  
                                    <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a></li>
                              ";
        }
        // line 54
        echo "  
                               
                          </li>     
                      </ul>
                 
                </div><!-- /.container-fluid -->
              </nav>
          </header>


                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">

  
          ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "

                </div>
                <div class=\"col-md-3\"></div>
          ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "      </body>
</html>
";
        
        $__internal_28521e45230bf8492d9186908aaaf7b712de6ab1930d1b6b3936e84a0d7d0da6->leave($__internal_28521e45230bf8492d9186908aaaf7b712de6ab1930d1b6b3936e84a0d7d0da6_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d78e657aa37963248770c36b0b1884e5f557c1e15b7a56902909368a70209b79 = $this->env->getExtension("native_profiler");
        $__internal_d78e657aa37963248770c36b0b1884e5f557c1e15b7a56902909368a70209b79->enter($__internal_d78e657aa37963248770c36b0b1884e5f557c1e15b7a56902909368a70209b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "          ";
        
        $__internal_d78e657aa37963248770c36b0b1884e5f557c1e15b7a56902909368a70209b79->leave($__internal_d78e657aa37963248770c36b0b1884e5f557c1e15b7a56902909368a70209b79_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dc31102c1bb27988c20643709d867466591749666af1d1a0fa982353bc7a7b1 = $this->env->getExtension("native_profiler");
        $__internal_3dc31102c1bb27988c20643709d867466591749666af1d1a0fa982353bc7a7b1->enter($__internal_3dc31102c1bb27988c20643709d867466591749666af1d1a0fa982353bc7a7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "
              <div class=\"wrapper\">
                 <div class=\"container\">
                 </div>
              </div>
              
          ";
        
        $__internal_3dc31102c1bb27988c20643709d867466591749666af1d1a0fa982353bc7a7b1->leave($__internal_3dc31102c1bb27988c20643709d867466591749666af1d1a0fa982353bc7a7b1_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5e4df83217daf4b74e053d0050d6392e19ad24f5e637a24ff7438c90052d7d2 = $this->env->getExtension("native_profiler");
        $__internal_e5e4df83217daf4b74e053d0050d6392e19ad24f5e637a24ff7438c90052d7d2->enter($__internal_e5e4df83217daf4b74e053d0050d6392e19ad24f5e637a24ff7438c90052d7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5e4df83217daf4b74e053d0050d6392e19ad24f5e637a24ff7438c90052d7d2->leave($__internal_e5e4df83217daf4b74e053d0050d6392e19ad24f5e637a24ff7438c90052d7d2_prof);

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
        return array (  180 => 80,  167 => 69,  161 => 68,  154 => 15,  148 => 14,  139 => 81,  137 => 80,  131 => 76,  129 => 68,  113 => 54,  108 => 52,  95 => 43,  93 => 42,  85 => 36,  81 => 34,  79 => 33,  60 => 17,  57 => 16,  55 => 14,  50 => 12,  46 => 11,  41 => 9,  31 => 5,  25 => 1,);
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
/* */
/*           <header>*/
/*               <nav class="navbar navbar-default" role="navigation">*/
/*                 <div class="container">*/
/*                   <div class="navbar-header">    */
/*                     <a class="navbar-brand" href="/">LeBonClone</a>*/
/*                   </div>*/
/* */
/*                       <ul class="nav navbar-nav">*/
/*                          <li ><a href="/" class="active">Accueil </a></li>*/
/*                          <li><a href="/offre">Offres</a></li> */
/*                          {% if is_granted('ROLE_ADMIN')%}*/
/*                           <li><a href="/categorie">Catégorie</li>*/
/*                        {% endif %}*/
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
