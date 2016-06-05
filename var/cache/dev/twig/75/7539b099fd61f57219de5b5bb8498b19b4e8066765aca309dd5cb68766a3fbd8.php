<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f5db310cdb4a775af044e195cccdf6054329329b1c2c285970b9d71bea7f7efb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b80a376725f556c42488bff690fab91130d4f6d79903911e8056e1dde468d2e = $this->env->getExtension("native_profiler");
        $__internal_8b80a376725f556c42488bff690fab91130d4f6d79903911e8056e1dde468d2e->enter($__internal_8b80a376725f556c42488bff690fab91130d4f6d79903911e8056e1dde468d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b80a376725f556c42488bff690fab91130d4f6d79903911e8056e1dde468d2e->leave($__internal_8b80a376725f556c42488bff690fab91130d4f6d79903911e8056e1dde468d2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_572cc0df0c75d257eaa4283ee082cf394f966ba2b9156d5b675daade5e6db2c2 = $this->env->getExtension("native_profiler");
        $__internal_572cc0df0c75d257eaa4283ee082cf394f966ba2b9156d5b675daade5e6db2c2->enter($__internal_572cc0df0c75d257eaa4283ee082cf394f966ba2b9156d5b675daade5e6db2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
        <div>
            ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "        </div>


";
        
        $__internal_572cc0df0c75d257eaa4283ee082cf394f966ba2b9156d5b675daade5e6db2c2->leave($__internal_572cc0df0c75d257eaa4283ee082cf394f966ba2b9156d5b675daade5e6db2c2_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85417f795410767263f7a1ceb5c539736118009f89411ee27632e2930704a16b = $this->env->getExtension("native_profiler");
        $__internal_85417f795410767263f7a1ceb5c539736118009f89411ee27632e2930704a16b->enter($__internal_85417f795410767263f7a1ceb5c539736118009f89411ee27632e2930704a16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "
            ";
        
        $__internal_85417f795410767263f7a1ceb5c539736118009f89411ee27632e2930704a16b->leave($__internal_85417f795410767263f7a1ceb5c539736118009f89411ee27632e2930704a16b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 16,  90 => 15,  80 => 18,  78 => 15,  74 => 13,  68 => 12,  59 => 9,  54 => 8,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}       */
/* */
/* {% block body %}*/
/*     */
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/* */
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
