<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cca03183013cd0156d5ccd63539f6da8a98772a012128532ead0831edb3d96b4 extends Twig_Template
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
        $__internal_1fc9841b22a7eec9a04a3a5c62bd3e902aa80c56ace6515f10c0aa13e9c18f55 = $this->env->getExtension("native_profiler");
        $__internal_1fc9841b22a7eec9a04a3a5c62bd3e902aa80c56ace6515f10c0aa13e9c18f55->enter($__internal_1fc9841b22a7eec9a04a3a5c62bd3e902aa80c56ace6515f10c0aa13e9c18f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1fc9841b22a7eec9a04a3a5c62bd3e902aa80c56ace6515f10c0aa13e9c18f55->leave($__internal_1fc9841b22a7eec9a04a3a5c62bd3e902aa80c56ace6515f10c0aa13e9c18f55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
