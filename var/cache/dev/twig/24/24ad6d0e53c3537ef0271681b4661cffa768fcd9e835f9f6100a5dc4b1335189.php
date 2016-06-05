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
        $__internal_25bc40f25edc96e1beab71f7ccc1298fda908d2a833b2a3682454bbed2cb7aee = $this->env->getExtension("native_profiler");
        $__internal_25bc40f25edc96e1beab71f7ccc1298fda908d2a833b2a3682454bbed2cb7aee->enter($__internal_25bc40f25edc96e1beab71f7ccc1298fda908d2a833b2a3682454bbed2cb7aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_25bc40f25edc96e1beab71f7ccc1298fda908d2a833b2a3682454bbed2cb7aee->leave($__internal_25bc40f25edc96e1beab71f7ccc1298fda908d2a833b2a3682454bbed2cb7aee_prof);

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
