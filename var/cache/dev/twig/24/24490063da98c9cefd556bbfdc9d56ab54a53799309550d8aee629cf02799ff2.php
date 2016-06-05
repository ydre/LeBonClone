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
        $__internal_9499e8d8d249d010499e16d8d1d2795634fce0b27277118599c419d7b7714c6d = $this->env->getExtension("native_profiler");
        $__internal_9499e8d8d249d010499e16d8d1d2795634fce0b27277118599c419d7b7714c6d->enter($__internal_9499e8d8d249d010499e16d8d1d2795634fce0b27277118599c419d7b7714c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9499e8d8d249d010499e16d8d1d2795634fce0b27277118599c419d7b7714c6d->leave($__internal_9499e8d8d249d010499e16d8d1d2795634fce0b27277118599c419d7b7714c6d_prof);

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
