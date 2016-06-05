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
        $__internal_54c7db2c0b69b3582425d5e25dbb7418249d0684542c9a32c21fa9e614b7dbb8 = $this->env->getExtension("native_profiler");
        $__internal_54c7db2c0b69b3582425d5e25dbb7418249d0684542c9a32c21fa9e614b7dbb8->enter($__internal_54c7db2c0b69b3582425d5e25dbb7418249d0684542c9a32c21fa9e614b7dbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_54c7db2c0b69b3582425d5e25dbb7418249d0684542c9a32c21fa9e614b7dbb8->leave($__internal_54c7db2c0b69b3582425d5e25dbb7418249d0684542c9a32c21fa9e614b7dbb8_prof);

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
