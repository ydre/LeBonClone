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
        $__internal_13cad03bbed0366e7e58015d0655b925290a53798d16b54086edf41857e1e7c1 = $this->env->getExtension("native_profiler");
        $__internal_13cad03bbed0366e7e58015d0655b925290a53798d16b54086edf41857e1e7c1->enter($__internal_13cad03bbed0366e7e58015d0655b925290a53798d16b54086edf41857e1e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_13cad03bbed0366e7e58015d0655b925290a53798d16b54086edf41857e1e7c1->leave($__internal_13cad03bbed0366e7e58015d0655b925290a53798d16b54086edf41857e1e7c1_prof);

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
