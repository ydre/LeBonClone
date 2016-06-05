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
        $__internal_9a72903ec1dfc7066ba1e7ec5196122596d38de45fcfff06f286544200549471 = $this->env->getExtension("native_profiler");
        $__internal_9a72903ec1dfc7066ba1e7ec5196122596d38de45fcfff06f286544200549471->enter($__internal_9a72903ec1dfc7066ba1e7ec5196122596d38de45fcfff06f286544200549471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9a72903ec1dfc7066ba1e7ec5196122596d38de45fcfff06f286544200549471->leave($__internal_9a72903ec1dfc7066ba1e7ec5196122596d38de45fcfff06f286544200549471_prof);

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
