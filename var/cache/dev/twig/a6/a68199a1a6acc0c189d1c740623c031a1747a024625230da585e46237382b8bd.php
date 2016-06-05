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
        $__internal_76fc0383ed33ab6f0a1027777431d5bbe638806db790b931e9bf1e7d73a160e6 = $this->env->getExtension("native_profiler");
        $__internal_76fc0383ed33ab6f0a1027777431d5bbe638806db790b931e9bf1e7d73a160e6->enter($__internal_76fc0383ed33ab6f0a1027777431d5bbe638806db790b931e9bf1e7d73a160e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        $context["page_title"] = "connexion";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76fc0383ed33ab6f0a1027777431d5bbe638806db790b931e9bf1e7d73a160e6->leave($__internal_76fc0383ed33ab6f0a1027777431d5bbe638806db790b931e9bf1e7d73a160e6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e71b4fb05b320f445e5063986c4581efa7cbd85b6c71ddbea0b346f7772b5da = $this->env->getExtension("native_profiler");
        $__internal_6e71b4fb05b320f445e5063986c4581efa7cbd85b6c71ddbea0b346f7772b5da->enter($__internal_6e71b4fb05b320f445e5063986c4581efa7cbd85b6c71ddbea0b346f7772b5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_6e71b4fb05b320f445e5063986c4581efa7cbd85b6c71ddbea0b346f7772b5da->leave($__internal_6e71b4fb05b320f445e5063986c4581efa7cbd85b6c71ddbea0b346f7772b5da_prof);

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
