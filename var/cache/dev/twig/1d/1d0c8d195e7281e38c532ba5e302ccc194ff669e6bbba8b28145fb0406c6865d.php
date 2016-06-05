<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_66ba5fb20338c024ce9151f2087964ddca71f5db0c69cb3bafd065ec638fe851 extends Twig_Template
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
        $__internal_8fdaa039e3a3a9f686afed7285d9ac2d8fa62da01e1133f1169a859e2b58128e = $this->env->getExtension("native_profiler");
        $__internal_8fdaa039e3a3a9f686afed7285d9ac2d8fa62da01e1133f1169a859e2b58128e->enter($__internal_8fdaa039e3a3a9f686afed7285d9ac2d8fa62da01e1133f1169a859e2b58128e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8fdaa039e3a3a9f686afed7285d9ac2d8fa62da01e1133f1169a859e2b58128e->leave($__internal_8fdaa039e3a3a9f686afed7285d9ac2d8fa62da01e1133f1169a859e2b58128e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
