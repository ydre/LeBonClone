<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_973d4869166bc6504f7d50cf5bc237f7563fcbbcf80361dadeafd8cf8d1df57b extends Twig_Template
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
        $__internal_b2e0397d2b5145020177a53a86f3c23ed66a255c669fb3534e550e4d2c6843d8 = $this->env->getExtension("native_profiler");
        $__internal_b2e0397d2b5145020177a53a86f3c23ed66a255c669fb3534e550e4d2c6843d8->enter($__internal_b2e0397d2b5145020177a53a86f3c23ed66a255c669fb3534e550e4d2c6843d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b2e0397d2b5145020177a53a86f3c23ed66a255c669fb3534e550e4d2c6843d8->leave($__internal_b2e0397d2b5145020177a53a86f3c23ed66a255c669fb3534e550e4d2c6843d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
