<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7e0badb9a4825fea352826d205036080c84db4a6fda96d4ffc579c07ebf3d845 extends Twig_Template
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
        $__internal_303d51091d382a2bc49bf84876a493c8b2b9bd76d193589e547f542ea177cb86 = $this->env->getExtension("native_profiler");
        $__internal_303d51091d382a2bc49bf84876a493c8b2b9bd76d193589e547f542ea177cb86->enter($__internal_303d51091d382a2bc49bf84876a493c8b2b9bd76d193589e547f542ea177cb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_303d51091d382a2bc49bf84876a493c8b2b9bd76d193589e547f542ea177cb86->leave($__internal_303d51091d382a2bc49bf84876a493c8b2b9bd76d193589e547f542ea177cb86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
