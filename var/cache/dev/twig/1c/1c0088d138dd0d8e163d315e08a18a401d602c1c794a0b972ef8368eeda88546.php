<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f12318bb1cd2e8a0abebf0e08f27dc6122fe9544d5c30d14105c6999f85e2e7b extends Twig_Template
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
        $__internal_f5f68da6e7e7b07922e5dbe58cacbf3d472f8b000594df21300b82768800b0c1 = $this->env->getExtension("native_profiler");
        $__internal_f5f68da6e7e7b07922e5dbe58cacbf3d472f8b000594df21300b82768800b0c1->enter($__internal_f5f68da6e7e7b07922e5dbe58cacbf3d472f8b000594df21300b82768800b0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f5f68da6e7e7b07922e5dbe58cacbf3d472f8b000594df21300b82768800b0c1->leave($__internal_f5f68da6e7e7b07922e5dbe58cacbf3d472f8b000594df21300b82768800b0c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
