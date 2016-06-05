<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b222441326e7b0f24d851bb2c98bda4cdd0eca230a43ce35cccd42e8f39ef1e3 extends Twig_Template
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
        $__internal_8610be34a0353249a0edd199d2b8b4d919aab38817624e152bca0d9485c90415 = $this->env->getExtension("native_profiler");
        $__internal_8610be34a0353249a0edd199d2b8b4d919aab38817624e152bca0d9485c90415->enter($__internal_8610be34a0353249a0edd199d2b8b4d919aab38817624e152bca0d9485c90415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8610be34a0353249a0edd199d2b8b4d919aab38817624e152bca0d9485c90415->leave($__internal_8610be34a0353249a0edd199d2b8b4d919aab38817624e152bca0d9485c90415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
