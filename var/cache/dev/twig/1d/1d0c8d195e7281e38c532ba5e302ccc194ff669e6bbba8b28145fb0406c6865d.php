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
        $__internal_5184a4441b3eddccc7179e9d47116494e0a72d19b4dbfa2e697e0935e95e213b = $this->env->getExtension("native_profiler");
        $__internal_5184a4441b3eddccc7179e9d47116494e0a72d19b4dbfa2e697e0935e95e213b->enter($__internal_5184a4441b3eddccc7179e9d47116494e0a72d19b4dbfa2e697e0935e95e213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5184a4441b3eddccc7179e9d47116494e0a72d19b4dbfa2e697e0935e95e213b->leave($__internal_5184a4441b3eddccc7179e9d47116494e0a72d19b4dbfa2e697e0935e95e213b_prof);

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
