<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_32921d477b7dc571ebb000ca69525742c82ac6681936365a7b8363d5d2b15e0e extends Twig_Template
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
        $__internal_cbab03955b82bf0b2c205063231e013264e0dc5519eab6f2ed49a9f47b5d1d2c = $this->env->getExtension("native_profiler");
        $__internal_cbab03955b82bf0b2c205063231e013264e0dc5519eab6f2ed49a9f47b5d1d2c->enter($__internal_cbab03955b82bf0b2c205063231e013264e0dc5519eab6f2ed49a9f47b5d1d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cbab03955b82bf0b2c205063231e013264e0dc5519eab6f2ed49a9f47b5d1d2c->leave($__internal_cbab03955b82bf0b2c205063231e013264e0dc5519eab6f2ed49a9f47b5d1d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
