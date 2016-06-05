<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a86cb8cb9c889af961417debdece70d43cce7755fb270a7d134739bf75380152 extends Twig_Template
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
        $__internal_c03f11c62383fb35b4b2c6688901dd78642af91c3d53904056e367e130d58145 = $this->env->getExtension("native_profiler");
        $__internal_c03f11c62383fb35b4b2c6688901dd78642af91c3d53904056e367e130d58145->enter($__internal_c03f11c62383fb35b4b2c6688901dd78642af91c3d53904056e367e130d58145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c03f11c62383fb35b4b2c6688901dd78642af91c3d53904056e367e130d58145->leave($__internal_c03f11c62383fb35b4b2c6688901dd78642af91c3d53904056e367e130d58145_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
