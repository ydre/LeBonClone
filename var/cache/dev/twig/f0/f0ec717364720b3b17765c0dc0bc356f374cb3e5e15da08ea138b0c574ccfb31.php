<?php

/* CategorieBundle:categorie:index.html.twig */
class __TwigTemplate_db6cac408534b747b0d33b45290b897b74111502c9c4daf7cc500bd090c894d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CategorieBundle:categorie:index.html.twig", 1);
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
        $__internal_5f2c47e48fc98f16649ec76e7cf66895f394862e9842f1cbde35d5e7b8ed2202 = $this->env->getExtension("native_profiler");
        $__internal_5f2c47e48fc98f16649ec76e7cf66895f394862e9842f1cbde35d5e7b8ed2202->enter($__internal_5f2c47e48fc98f16649ec76e7cf66895f394862e9842f1cbde35d5e7b8ed2202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CategorieBundle:categorie:index.html.twig"));

        // line 2
        $context["page_title"] = "Liste catégories";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f2c47e48fc98f16649ec76e7cf66895f394862e9842f1cbde35d5e7b8ed2202->leave($__internal_5f2c47e48fc98f16649ec76e7cf66895f394862e9842f1cbde35d5e7b8ed2202_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_aca783ff5fc6347eedb8c156840906af7942301670d36f5cbc225ff9b8e7fff8 = $this->env->getExtension("native_profiler");
        $__internal_aca783ff5fc6347eedb8c156840906af7942301670d36f5cbc225ff9b8e7fff8->enter($__internal_aca783ff5fc6347eedb8c156840906af7942301670d36f5cbc225ff9b8e7fff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h2>Liste des catégories</h2>


\t<table class=\"table table-bordered\">
\t\t<thead>
\t\t\t<tr><th>nom</th></tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 13
        if (array_key_exists("categories", $context)) {
            echo "\t
\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 15
                echo "\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                echo "</td></tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t";
        }
        echo "\t
\t\t</tbody>
\t</table>

\t <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("categorie_new");
        echo "\">Créer une catégorie</a>
        </li>
    </ul>

";
        
        $__internal_aca783ff5fc6347eedb8c156840906af7942301670d36f5cbc225ff9b8e7fff8->leave($__internal_aca783ff5fc6347eedb8c156840906af7942301670d36f5cbc225ff9b8e7fff8_prof);

    }

    public function getTemplateName()
    {
        return "CategorieBundle:categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  70 => 17,  61 => 15,  57 => 14,  53 => 13,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% set page_title = 'Liste catégories' %}*/
/* */
/* {% block body %}*/
/*     <h2>Liste des catégories</h2>*/
/* */
/* */
/* 	<table class="table table-bordered">*/
/* 		<thead>*/
/* 			<tr><th>nom</th></tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% if categories is defined %}	*/
/* 			{% for categorie in categories %}*/
/* 				<tr><td>{{ categorie.nom }}</td></tr>*/
/* 			{% endfor %}*/
/* 		{% endif %}	*/
/* 		</tbody>*/
/* 	</table>*/
/* */
/* 	 <ul class="list-unstyled">*/
/*         <li>*/
/*             <a href="{{ path('categorie_new') }}">Créer une catégorie</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
