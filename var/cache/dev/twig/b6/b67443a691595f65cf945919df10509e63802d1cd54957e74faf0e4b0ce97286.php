<?php

/* @User/Default/layout.html.twig */
class __TwigTemplate_2d2c25ba2c0e3290b88fc8cf80e241f129e7b26566330e70b3b9b65c73cde920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/Default/layout.html.twig", 1);
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
        $__internal_a18f53e7685a38fc64f211edf90b0516b9ee21da3a09cddadcf3504418abe77f = $this->env->getExtension("native_profiler");
        $__internal_a18f53e7685a38fc64f211edf90b0516b9ee21da3a09cddadcf3504418abe77f->enter($__internal_a18f53e7685a38fc64f211edf90b0516b9ee21da3a09cddadcf3504418abe77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a18f53e7685a38fc64f211edf90b0516b9ee21da3a09cddadcf3504418abe77f->leave($__internal_a18f53e7685a38fc64f211edf90b0516b9ee21da3a09cddadcf3504418abe77f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_587a0fb9b6c2e94e8a32dc86d17ab0903ba45191736f960489ce15f1355fc189 = $this->env->getExtension("native_profiler");
        $__internal_587a0fb9b6c2e94e8a32dc86d17ab0903ba45191736f960489ce15f1355fc189->enter($__internal_587a0fb9b6c2e94e8a32dc86d17ab0903ba45191736f960489ce15f1355fc189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_587a0fb9b6c2e94e8a32dc86d17ab0903ba45191736f960489ce15f1355fc189->leave($__internal_587a0fb9b6c2e94e8a32dc86d17ab0903ba45191736f960489ce15f1355fc189_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_297321b14ab8284f6fae81d851723f930abb5ded84e2b69908054eed4927319f = $this->env->getExtension("native_profiler");
        $__internal_297321b14ab8284f6fae81d851723f930abb5ded84e2b69908054eed4927319f->enter($__internal_297321b14ab8284f6fae81d851723f930abb5ded84e2b69908054eed4927319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "
            ";
        
        $__internal_297321b14ab8284f6fae81d851723f930abb5ded84e2b69908054eed4927319f->leave($__internal_297321b14ab8284f6fae81d851723f930abb5ded84e2b69908054eed4927319f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/layout.html.twig";
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
