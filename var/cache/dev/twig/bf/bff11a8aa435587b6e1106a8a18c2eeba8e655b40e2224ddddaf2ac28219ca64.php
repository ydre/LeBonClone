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
        $__internal_6ba6aec6cf09f4ed6f9caba3d42d3dd5e52edc4afc621a7f20219588945e549d = $this->env->getExtension("native_profiler");
        $__internal_6ba6aec6cf09f4ed6f9caba3d42d3dd5e52edc4afc621a7f20219588945e549d->enter($__internal_6ba6aec6cf09f4ed6f9caba3d42d3dd5e52edc4afc621a7f20219588945e549d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_6ba6aec6cf09f4ed6f9caba3d42d3dd5e52edc4afc621a7f20219588945e549d->leave($__internal_6ba6aec6cf09f4ed6f9caba3d42d3dd5e52edc4afc621a7f20219588945e549d_prof);

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
