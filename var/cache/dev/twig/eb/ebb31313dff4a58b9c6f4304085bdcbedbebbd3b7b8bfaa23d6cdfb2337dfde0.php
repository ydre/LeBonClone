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
        $__internal_c59c00d0b19eefcf4b3141aafba8fc18ddb416300612bcc9a76db3ebc00635cf = $this->env->getExtension("native_profiler");
        $__internal_c59c00d0b19eefcf4b3141aafba8fc18ddb416300612bcc9a76db3ebc00635cf->enter($__internal_c59c00d0b19eefcf4b3141aafba8fc18ddb416300612bcc9a76db3ebc00635cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c59c00d0b19eefcf4b3141aafba8fc18ddb416300612bcc9a76db3ebc00635cf->leave($__internal_c59c00d0b19eefcf4b3141aafba8fc18ddb416300612bcc9a76db3ebc00635cf_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_564dd3dae96f42785563291897c5164b8abdc3da2f89ed0bd2a07d3ffd164e83 = $this->env->getExtension("native_profiler");
        $__internal_564dd3dae96f42785563291897c5164b8abdc3da2f89ed0bd2a07d3ffd164e83->enter($__internal_564dd3dae96f42785563291897c5164b8abdc3da2f89ed0bd2a07d3ffd164e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "          ";
        
        $__internal_564dd3dae96f42785563291897c5164b8abdc3da2f89ed0bd2a07d3ffd164e83->leave($__internal_564dd3dae96f42785563291897c5164b8abdc3da2f89ed0bd2a07d3ffd164e83_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_282384db73a0a9a60994a3502c2cef47e78e4e6cec1afe02fb916c86ee370ed9 = $this->env->getExtension("native_profiler");
        $__internal_282384db73a0a9a60994a3502c2cef47e78e4e6cec1afe02fb916c86ee370ed9->enter($__internal_282384db73a0a9a60994a3502c2cef47e78e4e6cec1afe02fb916c86ee370ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "
              <div class=\"wrapper\">
                 <div class=\"container\">
                 </div>
              </div>
              
          ";
        
        $__internal_282384db73a0a9a60994a3502c2cef47e78e4e6cec1afe02fb916c86ee370ed9->leave($__internal_282384db73a0a9a60994a3502c2cef47e78e4e6cec1afe02fb916c86ee370ed9_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d55f18aef3a156f35dfa2a7977b7f60cf1c2e81a6012f2ec35c68b8249e8a196 = $this->env->getExtension("native_profiler");
        $__internal_d55f18aef3a156f35dfa2a7977b7f60cf1c2e81a6012f2ec35c68b8249e8a196->enter($__internal_d55f18aef3a156f35dfa2a7977b7f60cf1c2e81a6012f2ec35c68b8249e8a196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d55f18aef3a156f35dfa2a7977b7f60cf1c2e81a6012f2ec35c68b8249e8a196->leave($__internal_d55f18aef3a156f35dfa2a7977b7f60cf1c2e81a6012f2ec35c68b8249e8a196_prof);

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
