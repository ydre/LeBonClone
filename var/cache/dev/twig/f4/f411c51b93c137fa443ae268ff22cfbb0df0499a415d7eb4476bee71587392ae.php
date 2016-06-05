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
        $__internal_b68b35a3b71c18acf249b21533331cb396dbb7ac2651cbd5a1668c29e1abf8ae = $this->env->getExtension("native_profiler");
        $__internal_b68b35a3b71c18acf249b21533331cb396dbb7ac2651cbd5a1668c29e1abf8ae->enter($__internal_b68b35a3b71c18acf249b21533331cb396dbb7ac2651cbd5a1668c29e1abf8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OffreBundle:offre:index.html.twig"));

        // line 2
        $context["page_title"] = "index offres";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68b35a3b71c18acf249b21533331cb396dbb7ac2651cbd5a1668c29e1abf8ae->leave($__internal_b68b35a3b71c18acf249b21533331cb396dbb7ac2651cbd5a1668c29e1abf8ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a24c9dccbb6d26241390a90a8b50013644b8a8a134b061bc4dd4337610fcc5dc = $this->env->getExtension("native_profiler");
        $__internal_a24c9dccbb6d26241390a90a8b50013644b8a8a134b061bc4dd4337610fcc5dc->enter($__internal_a24c9dccbb6d26241390a90a8b50013644b8a8a134b061bc4dd4337610fcc5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Liste des Offres</h2>

<table class=\" table table-striped\">
        <thead>
            <tr>
                
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Vendeur</th>
                <th>Catégorie</th>
                ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "
                <th>Actions</th>
                 ";
        }
        // line 18
        echo "  
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 23
            echo "            <tr>
               
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "prix", array()), "html", null, true);
            echo "  €</td>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vendor_list", array("id" => $this->getAttribute($this->getAttribute($context["offre"], "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "user", array()), "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            if ($this->getAttribute($this->getAttribute($context["offre"], "categorie", array(), "any", false, true), "nom", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "categorie", array()), "nom", array()), "html", null, true);
            }
            echo "</td>
                ";
            // line 30
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 31
                echo "                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_show", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span> show</a>
                        </li>
                          ";
                // line 36
                if ($this->env->getExtension('security')->isGranted("edit", $context["offre"])) {
                    // line 37
                    echo "                            <li>
                                <a href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span> edit</a>
                            </li>
                        ";
                }
                // line 41
                echo "                    </ul>
                </td>
                 ";
            }
            // line 43
            echo "  
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 50
            echo "    <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("offre_new");
            echo "\">Poster une nouvelle offre</a>
        </li>
    </ul>
   ";
        }
        // line 55
        echo "  
";
        
        $__internal_a24c9dccbb6d26241390a90a8b50013644b8a8a134b061bc4dd4337610fcc5dc->leave($__internal_a24c9dccbb6d26241390a90a8b50013644b8a8a134b061bc4dd4337610fcc5dc_prof);

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
        return array (  155 => 55,  148 => 52,  144 => 50,  142 => 49,  137 => 46,  129 => 43,  124 => 41,  118 => 38,  115 => 37,  113 => 36,  108 => 34,  103 => 31,  101 => 30,  95 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 23,  69 => 22,  63 => 18,  58 => 16,  56 => 15,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% set page_title = 'index offres' %}*/
/* {% block body %}*/
/*    <h2>Liste des Offres</h2>*/
/* */
/* <table class=" table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 */
/*                 <th>Titre</th>*/
/*                 <th>Description</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Vendeur</th>*/
/*                 <th>Catégorie</th>*/
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
/*                 <td>{% if offre.categorie.nom is defined %}{{ offre.categorie.nom }}{% endif %}</td>*/
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
