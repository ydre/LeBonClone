<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a8d892958c70a280c698491a931beedea5b134d6a2659e4598d1a9a1f7543292 extends Twig_Template
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
        $__internal_20b387801c7149c6a0881c57c182ad241465e5e1fee6b5be063edfbe84af1aab = $this->env->getExtension("native_profiler");
        $__internal_20b387801c7149c6a0881c57c182ad241465e5e1fee6b5be063edfbe84af1aab->enter($__internal_20b387801c7149c6a0881c57c182ad241465e5e1fee6b5be063edfbe84af1aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_20b387801c7149c6a0881c57c182ad241465e5e1fee6b5be063edfbe84af1aab->leave($__internal_20b387801c7149c6a0881c57c182ad241465e5e1fee6b5be063edfbe84af1aab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
