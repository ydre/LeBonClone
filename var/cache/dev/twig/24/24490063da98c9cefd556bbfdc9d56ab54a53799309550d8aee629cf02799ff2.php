<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_97f36df192e4de25472f268604392ab8573202724d30c9d3ec76685f5993b915 extends Twig_Template
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
        $__internal_9584612ce56e65ecac6534ad5db72332e8ba97f8d9dba89899c93bbaa7dc186f = $this->env->getExtension("native_profiler");
        $__internal_9584612ce56e65ecac6534ad5db72332e8ba97f8d9dba89899c93bbaa7dc186f->enter($__internal_9584612ce56e65ecac6534ad5db72332e8ba97f8d9dba89899c93bbaa7dc186f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9584612ce56e65ecac6534ad5db72332e8ba97f8d9dba89899c93bbaa7dc186f->leave($__internal_9584612ce56e65ecac6534ad5db72332e8ba97f8d9dba89899c93bbaa7dc186f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
