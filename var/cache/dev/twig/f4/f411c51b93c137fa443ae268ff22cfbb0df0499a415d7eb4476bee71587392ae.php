<?php

/* OffreBundle:offre:index.html.twig */
class __TwigTemplate_b89080f55ade87d4d4904d7772499e3a8a699659557ea97104857e3a9c758610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OffreBundle:offre:index.html.twig", 1);
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
        $__internal_a112382f318120408a2316d8e2b6788625889eec1253878380a0c7bc37f8e310 = $this->env->getExtension("native_profiler");
        $__internal_a112382f318120408a2316d8e2b6788625889eec1253878380a0c7bc37f8e310->enter($__internal_a112382f318120408a2316d8e2b6788625889eec1253878380a0c7bc37f8e310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OffreBundle:offre:index.html.twig"));

        // line 2
        $context["page_title"] = "index offres";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a112382f318120408a2316d8e2b6788625889eec1253878380a0c7bc37f8e310->leave($__internal_a112382f318120408a2316d8e2b6788625889eec1253878380a0c7bc37f8e310_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f4a17c38ed88a22acf78d1a1333847e6f0bac4952e1578944387a4f2be6d99c = $this->env->getExtension("native_profiler");
        $__internal_4f4a17c38ed88a22acf78d1a1333847e6f0bac4952e1578944387a4f2be6d99c->enter($__internal_4f4a17c38ed88a22acf78d1a1333847e6f0bac4952e1578944387a4f2be6d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Liste des Offres</h2>

    <table class=\" table table-striped\">
        <thead>
            <tr>
                
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Vendeur</th>
                ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "
                <th>Actions</th>
                 ";
        }
        // line 17
        echo "  
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 22
            echo "            <tr>
               
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "prix", array()), "html", null, true);
            echo "  €</td>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vendor_list", array("id" => $this->getAttribute($this->getAttribute($context["offre"], "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "user", array()), "username", array()), "html", null, true);
            echo "</a></td>
                ";
            // line 28
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 29
                echo "                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_show", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span> show</a>
                        </li>
                          ";
                // line 34
                if ($this->env->getExtension('security')->isGranted("edit", $context["offre"])) {
                    // line 35
                    echo "                            <li>
                                <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span> edit</a>
                            </li>
                        ";
                }
                // line 39
                echo "                    </ul>
                </td>
                 ";
            }
            // line 41
            echo "  
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

";
        // line 47
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 48
            echo "    <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("offre_new");
            echo "\">Poster une nouvelle offre</a>
        </li>
    </ul>
   ";
        }
        // line 53
        echo "  
";
        
        $__internal_4f4a17c38ed88a22acf78d1a1333847e6f0bac4952e1578944387a4f2be6d99c->leave($__internal_4f4a17c38ed88a22acf78d1a1333847e6f0bac4952e1578944387a4f2be6d99c_prof);

    }

    public function getTemplateName()
    {
        return "OffreBundle:offre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 53,  141 => 50,  137 => 48,  135 => 47,  130 => 44,  122 => 41,  117 => 39,  111 => 36,  108 => 35,  106 => 34,  101 => 32,  96 => 29,  94 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 22,  68 => 21,  62 => 17,  57 => 15,  55 => 14,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% set page_title = 'index offres' %}*/
/* {% block body %}*/
/*    <h2>Liste des Offres</h2>*/
/* */
/*     <table class=" table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 */
/*                 <th>Titre</th>*/
/*                 <th>Description</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Vendeur</th>*/
/*                 {% if is_granted("IS_AUTHENTICATED_FULLY") %}*/
/* */
/*                 <th>Actions</th>*/
/*                  {% endif %}  */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for offre in offres %}*/
/*             <tr>*/
/*                */
/*                 <td>{{ offre.titre }}</td>*/
/*                 <td>{{ offre.description }}</td>*/
/*                 <td>{{ offre.prix }}  €</td>*/
/*                 <td><a href="{{ path('vendor_list', { 'id': offre.user.id }) }}">{{ offre.user.username }}</a></td>*/
/*                 {% if is_granted("IS_AUTHENTICATED_FULLY") %}*/
/*                 <td>*/
/*                     <ul class="list-unstyled">*/
/*                         <li>*/
/*                             <a href="{{ path('offre_show', { 'id': offre.id }) }}"><span class="glyphicon glyphicon-search"></span> show</a>*/
/*                         </li>*/
/*                           {% if is_granted('edit',offre) %}*/
/*                             <li>*/
/*                                 <a href="{{ path('offre_edit', { 'id': offre.id }) }}"><span class="glyphicon glyphicon-list-alt"></span> edit</a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </td>*/
/*                  {% endif %}  */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% if is_granted("IS_AUTHENTICATED_FULLY") %}*/
/*     <ul class="list-unstyled">*/
/*         <li>*/
/*             <a href="{{ path('offre_new') }}">Poster une nouvelle offre</a>*/
/*         </li>*/
/*     </ul>*/
/*    {% endif %}  */
/* {% endblock %}*/
/* */
/* */
