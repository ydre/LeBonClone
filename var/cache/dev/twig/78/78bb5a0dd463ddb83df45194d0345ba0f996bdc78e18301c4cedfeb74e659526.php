<?php

/* UserBundle:Default:list.html.twig */
class __TwigTemplate_8803e6dc1aede30904f5a648cf1d64b2d1a173f3c5efd28f61961b26057249bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Default:list.html.twig", 1);
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
        $__internal_b0c52576e16e071d6c40d3956c29f7fb99314bf3d669e8f157a0063f10122084 = $this->env->getExtension("native_profiler");
        $__internal_b0c52576e16e071d6c40d3956c29f7fb99314bf3d669e8f157a0063f10122084->enter($__internal_b0c52576e16e071d6c40d3956c29f7fb99314bf3d669e8f157a0063f10122084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:list.html.twig"));

        // line 2
        $context["page_title"] = "vendeur";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c52576e16e071d6c40d3956c29f7fb99314bf3d669e8f157a0063f10122084->leave($__internal_b0c52576e16e071d6c40d3956c29f7fb99314bf3d669e8f157a0063f10122084_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67093a24ebb98fbf7140cb4a0b9299a6a74c6e7ec0b7ff93681b4100195d6850 = $this->env->getExtension("native_profiler");
        $__internal_67093a24ebb98fbf7140cb4a0b9299a6a74c6e7ec0b7ff93681b4100195d6850->enter($__internal_67093a24ebb98fbf7140cb4a0b9299a6a74c6e7ec0b7ff93681b4100195d6850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2>Offres du Vendeur : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2>


   <table class='table table-bordered'>

   \t<thead>
   \t\t<tr>
   \t\t\t<th>titre</th>
   \t\t\t<th>description</th>
   \t\t\t<th>prix</th>
   \t\t</tr>
   \t</thead>\t
   \t<tbody>
\t\t
   \t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 19
            echo "   \t\t\t<tr>
   \t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</td>
   \t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "description", array()), "html", null, true);
            echo "</td>
   \t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "prix", array()), "html", null, true);
            echo " €</td>
   \t\t\t</tr>
   \t\t
   \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
   \t</tbody>\t
   </table>

";
        
        $__internal_67093a24ebb98fbf7140cb4a0b9299a6a74c6e7ec0b7ff93681b4100195d6850->leave($__internal_67093a24ebb98fbf7140cb4a0b9299a6a74c6e7ec0b7ff93681b4100195d6850_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  76 => 22,  72 => 21,  68 => 20,  65 => 19,  61 => 18,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% set page_title = 'vendeur' %}*/
/* {% block body %}*/
/*    <h2>Offres du Vendeur : {{ user.username }}</h2>*/
/* */
/* */
/*    <table class='table table-bordered'>*/
/* */
/*    	<thead>*/
/*    		<tr>*/
/*    			<th>titre</th>*/
/*    			<th>description</th>*/
/*    			<th>prix</th>*/
/*    		</tr>*/
/*    	</thead>	*/
/*    	<tbody>*/
/* 		*/
/*    		{% for offre in offres %}*/
/*    			<tr>*/
/*    				<td>{{ offre.titre }}</td>*/
/*    				<td>{{ offre.description }}</td>*/
/*    				<td>{{ offre.prix }} €</td>*/
/*    			</tr>*/
/*    		*/
/*    		{% endfor %}*/
/* */
/*    	</tbody>	*/
/*    </table>*/
/* */
/* {% endblock %}*/
