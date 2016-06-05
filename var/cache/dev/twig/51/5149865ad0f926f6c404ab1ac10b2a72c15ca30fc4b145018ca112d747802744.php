<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fd13d2c13cc479b10be9ce587f153acb606cba3274415d3cbe67062b3f0142f7 extends Twig_Template
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
        $__internal_8fdeb7ffedd83b960abed6561bc8797be3b4e6b8142bfc71a670f58e690c6933 = $this->env->getExtension("native_profiler");
        $__internal_8fdeb7ffedd83b960abed6561bc8797be3b4e6b8142bfc71a670f58e690c6933->enter($__internal_8fdeb7ffedd83b960abed6561bc8797be3b4e6b8142bfc71a670f58e690c6933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8fdeb7ffedd83b960abed6561bc8797be3b4e6b8142bfc71a670f58e690c6933->leave($__internal_8fdeb7ffedd83b960abed6561bc8797be3b4e6b8142bfc71a670f58e690c6933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
