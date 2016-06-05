<?php

/* OffreBundle:offre:show.html.twig */
class __TwigTemplate_43a205c007ef8c0ee77dea2a83fb655d72fb2e5fb7228c539faa5f9e7952a0d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OffreBundle:offre:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbebf7f3a89c7fd263600e21d5c6056c4bb8e0725998416f28340dc22b4ff00e = $this->env->getExtension("native_profiler");
        $__internal_dbebf7f3a89c7fd263600e21d5c6056c4bb8e0725998416f28340dc22b4ff00e->enter($__internal_dbebf7f3a89c7fd263600e21d5c6056c4bb8e0725998416f28340dc22b4ff00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OffreBundle:offre:show.html.twig"));

        // line 2
        $context["page_title"] = "Détails offre";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbebf7f3a89c7fd263600e21d5c6056c4bb8e0725998416f28340dc22b4ff00e->leave($__internal_dbebf7f3a89c7fd263600e21d5c6056c4bb8e0725998416f28340dc22b4ff00e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_24e2e9c5c9aa3f26374dfa07e682b7ff1a4df01777b5736cb30d9ab84d9fb6c9 = $this->env->getExtension("native_profiler");
        $__internal_24e2e9c5c9aa3f26374dfa07e682b7ff1a4df01777b5736cb30d9ab84d9fb6c9->enter($__internal_24e2e9c5c9aa3f26374dfa07e682b7ff1a4df01777b5736cb30d9ab84d9fb6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h2>Offre: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</h2>

    <table class='table table-bordered'>

    <thead>
        <tr>
            <th>titre</th>
            <th>description</th>
            <th>prix</th>
        </tr>
    </thead>    
    <tbody>        
            <tr>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prix", array()), "html", null, true);
        echo " €</td>
            </tr>
    </tbody>    
   </table>

    <ul class='list-unstyled'>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("offre_index");
        echo "\">Back to the list</a>
        </li>
         ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("edit", (isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")))) {
            // line 30
            echo "            <li>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
            </li>
            <li>
                ";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                    <input type=\"submit\" value=\"Delete\">
                ";
            // line 36
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
            </li>
        ";
        }
        // line 39
        echo "    </ul>
";
        
        $__internal_24e2e9c5c9aa3f26374dfa07e682b7ff1a4df01777b5736cb30d9ab84d9fb6c9->leave($__internal_24e2e9c5c9aa3f26374dfa07e682b7ff1a4df01777b5736cb30d9ab84d9fb6c9_prof);

    }

    public function getTemplateName()
    {
        return "OffreBundle:offre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  99 => 36,  94 => 34,  88 => 31,  85 => 30,  83 => 29,  78 => 27,  68 => 20,  64 => 19,  60 => 18,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% set page_title = 'Détails offre' %}*/
/* */
/* {% block body %}*/
/*     <h2>Offre: {{ offre.titre }}</h2>*/
/* */
/*     <table class='table table-bordered'>*/
/* */
/*     <thead>*/
/*         <tr>*/
/*             <th>titre</th>*/
/*             <th>description</th>*/
/*             <th>prix</th>*/
/*         </tr>*/
/*     </thead>    */
/*     <tbody>        */
/*             <tr>*/
/*                 <td>{{ offre.titre }}</td>*/
/*                 <td>{{ offre.description }}</td>*/
/*                 <td>{{ offre.prix }} €</td>*/
/*             </tr>*/
/*     </tbody>    */
/*    </table>*/
/* */
/*     <ul class='list-unstyled'>*/
/*         <li>*/
/*             <a href="{{ path('offre_index') }}">Back to the list</a>*/
/*         </li>*/
/*          {% if is_granted('edit',offre) %}*/
/*             <li>*/
/*                 <a href="{{ path('offre_edit', { 'id': offre.id }) }}">Edit</a>*/
/*             </li>*/
/*             <li>*/
/*                 {{ form_start(delete_form) }}*/
/*                     <input type="submit" value="Delete">*/
/*                 {{ form_end(delete_form) }}*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
