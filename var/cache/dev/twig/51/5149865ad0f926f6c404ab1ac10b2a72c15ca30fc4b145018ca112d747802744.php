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
        $__internal_dad8b723f2a5f1d9863cdca986330b7da34ec7db00dcdbc553a4538a18ca762a = $this->env->getExtension("native_profiler");
        $__internal_dad8b723f2a5f1d9863cdca986330b7da34ec7db00dcdbc553a4538a18ca762a->enter($__internal_dad8b723f2a5f1d9863cdca986330b7da34ec7db00dcdbc553a4538a18ca762a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dad8b723f2a5f1d9863cdca986330b7da34ec7db00dcdbc553a4538a18ca762a->leave($__internal_dad8b723f2a5f1d9863cdca986330b7da34ec7db00dcdbc553a4538a18ca762a_prof);

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
