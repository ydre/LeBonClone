<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b672ebd6221d747f5b5731a97f78e3968b93a4f7d0c033471afe8faaded6098d extends Twig_Template
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
        $__internal_c2cbb20c227e3c34020ea574443eb673c36b33fbec1f7e0ad172181fa12d294f = $this->env->getExtension("native_profiler");
        $__internal_c2cbb20c227e3c34020ea574443eb673c36b33fbec1f7e0ad172181fa12d294f->enter($__internal_c2cbb20c227e3c34020ea574443eb673c36b33fbec1f7e0ad172181fa12d294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c2cbb20c227e3c34020ea574443eb673c36b33fbec1f7e0ad172181fa12d294f->leave($__internal_c2cbb20c227e3c34020ea574443eb673c36b33fbec1f7e0ad172181fa12d294f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
