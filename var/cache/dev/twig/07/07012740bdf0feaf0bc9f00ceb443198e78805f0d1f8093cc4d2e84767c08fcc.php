<?php

/* UserBundle:Default:layout.html.twig */
class __TwigTemplate_1522feb823973854070c1973a4ea10970a02b08e23cf797a5b1f7f5497f6f07d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Default:layout.html.twig", 1);
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
        $__internal_f21a052dca703f4629e6999da69ad318f10be3215997c32f0f5116dbcaaf9857 = $this->env->getExtension("native_profiler");
        $__internal_f21a052dca703f4629e6999da69ad318f10be3215997c32f0f5116dbcaaf9857->enter($__internal_f21a052dca703f4629e6999da69ad318f10be3215997c32f0f5116dbcaaf9857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21a052dca703f4629e6999da69ad318f10be3215997c32f0f5116dbcaaf9857->leave($__internal_f21a052dca703f4629e6999da69ad318f10be3215997c32f0f5116dbcaaf9857_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_985364fba75c8c804c541241e1684eac184f3153eb53716953e28ea3feff52e4 = $this->env->getExtension("native_profiler");
        $__internal_985364fba75c8c804c541241e1684eac184f3153eb53716953e28ea3feff52e4->enter($__internal_985364fba75c8c804c541241e1684eac184f3153eb53716953e28ea3feff52e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_985364fba75c8c804c541241e1684eac184f3153eb53716953e28ea3feff52e4->leave($__internal_985364fba75c8c804c541241e1684eac184f3153eb53716953e28ea3feff52e4_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b086f628f98ce821a6d01f13c71eee4d9c12ad9f9cc0e3adc0e28487e0351c39 = $this->env->getExtension("native_profiler");
        $__internal_b086f628f98ce821a6d01f13c71eee4d9c12ad9f9cc0e3adc0e28487e0351c39->enter($__internal_b086f628f98ce821a6d01f13c71eee4d9c12ad9f9cc0e3adc0e28487e0351c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "
            ";
        
        $__internal_b086f628f98ce821a6d01f13c71eee4d9c12ad9f9cc0e3adc0e28487e0351c39->leave($__internal_b086f628f98ce821a6d01f13c71eee4d9c12ad9f9cc0e3adc0e28487e0351c39_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:layout.html.twig";
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
