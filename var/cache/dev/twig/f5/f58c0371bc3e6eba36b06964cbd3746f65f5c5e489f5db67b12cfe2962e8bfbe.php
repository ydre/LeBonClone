<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b307be951ae02a1e69f7db0edd829e080d6bdc9d3a29d36c849a2205aebef9b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a1bd5f28f2f0792b42142d1c050e40111aeeb0d3375798b16166ff178933547 = $this->env->getExtension("native_profiler");
        $__internal_1a1bd5f28f2f0792b42142d1c050e40111aeeb0d3375798b16166ff178933547->enter($__internal_1a1bd5f28f2f0792b42142d1c050e40111aeeb0d3375798b16166ff178933547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1a1bd5f28f2f0792b42142d1c050e40111aeeb0d3375798b16166ff178933547->leave($__internal_1a1bd5f28f2f0792b42142d1c050e40111aeeb0d3375798b16166ff178933547_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
