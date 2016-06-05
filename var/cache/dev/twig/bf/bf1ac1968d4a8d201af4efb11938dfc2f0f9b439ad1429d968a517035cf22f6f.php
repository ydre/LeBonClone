<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_17f91e87bac41b381f547e05d6fd9f2ed7b7d3008b63ee6fe631b981438fa381 extends Twig_Template
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
        $__internal_71769a22970604df7d33315c3114d96d4066a550943e69197dd9f956f00103cb = $this->env->getExtension("native_profiler");
        $__internal_71769a22970604df7d33315c3114d96d4066a550943e69197dd9f956f00103cb->enter($__internal_71769a22970604df7d33315c3114d96d4066a550943e69197dd9f956f00103cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_71769a22970604df7d33315c3114d96d4066a550943e69197dd9f956f00103cb->leave($__internal_71769a22970604df7d33315c3114d96d4066a550943e69197dd9f956f00103cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
