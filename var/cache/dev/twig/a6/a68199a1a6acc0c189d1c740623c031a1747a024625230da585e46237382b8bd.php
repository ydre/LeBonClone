<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c45ac82e61ad0627c726a9ac64cdcd3bc919ca229967d5f825369950b4771c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_700579c235cf8151c6df911cbf9b0c2a6e65efd48256ac6c679eca1e355157e8 = $this->env->getExtension("native_profiler");
        $__internal_700579c235cf8151c6df911cbf9b0c2a6e65efd48256ac6c679eca1e355157e8->enter($__internal_700579c235cf8151c6df911cbf9b0c2a6e65efd48256ac6c679eca1e355157e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        $context["page_title"] = "connexion";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700579c235cf8151c6df911cbf9b0c2a6e65efd48256ac6c679eca1e355157e8->leave($__internal_700579c235cf8151c6df911cbf9b0c2a6e65efd48256ac6c679eca1e355157e8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40fc87be90f2ba1e3a589c88cc2b0df86a1ae44d0a1cb1dd5f003e03487f1e74 = $this->env->getExtension("native_profiler");
        $__internal_40fc87be90f2ba1e3a589c88cc2b0df86a1ae44d0a1cb1dd5f003e03487f1e74->enter($__internal_40fc87be90f2ba1e3a589c88cc2b0df86a1ae44d0a1cb1dd5f003e03487f1e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t<h2>Connexion</h2>
\t  ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "                   <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 11
        echo "               
                <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                   <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <div class=\"form-group\">
                        <label for=\"username\" class=\"form-label\"> </label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"votre pseudo\"/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\" class=\"form-label\"></label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"votre mdp\"/>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                           <label for=\"remember_me\" class=\"form-label\">se rappeler de moi</label>
                    </div>
                   <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" class=\"btn btn-primary col-md-12\"/>
                </form>
                <p>Vous n'avez pas de compte? <a href=\"/register\">Créer un compte</a></p>\t
";
        
        $__internal_40fc87be90f2ba1e3a589c88cc2b0df86a1ae44d0a1cb1dd5f003e03487f1e74->leave($__internal_40fc87be90f2ba1e3a589c88cc2b0df86a1ae44d0a1cb1dd5f003e03487f1e74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  62 => 13,  58 => 12,  55 => 11,  49 => 9,  47 => 8,  43 => 6,  37 => 5,  30 => 1,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% set page_title = 'connexion' %}*/
/* {% block fos_user_content %}*/
/* */
/* 	<h2>Connexion</h2>*/
/* 	  {% if error %}*/
/*                    <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/*                */
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="username" class="form-label"> </label>*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" placeholder="votre pseudo"/>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="password" class="form-label"></label>*/
/*                         <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="votre mdp"/>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                            <label for="remember_me" class="form-label">se rappeler de moi</label>*/
/*                     </div>*/
/*                    <input type="submit" id="_submit" name="_submit" value="Se connecter" class="btn btn-primary col-md-12"/>*/
/*                 </form>*/
/*                 <p>Vous n'avez pas de compte? <a href="/register">Créer un compte</a></p>	*/
/* {% endblock fos_user_content %}*/
/* */
