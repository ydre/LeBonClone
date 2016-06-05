<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2c752756e04811f5c6c52c6ad1bccfee3aad8da2d234c915c1c9b3fdb011292c extends Twig_Template
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
        $__internal_e2d7f83c42fb0cf599df37cf8f8d89828c003b403c4228b4abf5e9a89ea59e72 = $this->env->getExtension("native_profiler");
        $__internal_e2d7f83c42fb0cf599df37cf8f8d89828c003b403c4228b4abf5e9a89ea59e72->enter($__internal_e2d7f83c42fb0cf599df37cf8f8d89828c003b403c4228b4abf5e9a89ea59e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e2d7f83c42fb0cf599df37cf8f8d89828c003b403c4228b4abf5e9a89ea59e72->leave($__internal_e2d7f83c42fb0cf599df37cf8f8d89828c003b403c4228b4abf5e9a89ea59e72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
