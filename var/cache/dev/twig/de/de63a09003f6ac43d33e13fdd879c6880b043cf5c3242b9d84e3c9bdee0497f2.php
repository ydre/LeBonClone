<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_765692780f5605abefc0e1fe99b064780191eb00d959ba260bc0889ee72becb0 extends Twig_Template
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
        $__internal_f3b682425e24791ec3f571d5d8728bb493d1659ab306ad7cf324aab60825d807 = $this->env->getExtension("native_profiler");
        $__internal_f3b682425e24791ec3f571d5d8728bb493d1659ab306ad7cf324aab60825d807->enter($__internal_f3b682425e24791ec3f571d5d8728bb493d1659ab306ad7cf324aab60825d807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f3b682425e24791ec3f571d5d8728bb493d1659ab306ad7cf324aab60825d807->leave($__internal_f3b682425e24791ec3f571d5d8728bb493d1659ab306ad7cf324aab60825d807_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
