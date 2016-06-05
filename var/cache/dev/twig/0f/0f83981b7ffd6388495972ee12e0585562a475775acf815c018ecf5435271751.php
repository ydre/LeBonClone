<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3c8c60dbd84ea0f640271d8f7df53c0a1c009da4b93e7ea9eeaf12e1872f8e15 extends Twig_Template
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
        $__internal_a16dc4a4fc881cb8180645f1fa5915e4ed64861a7732890a386f812a1bb6f50a = $this->env->getExtension("native_profiler");
        $__internal_a16dc4a4fc881cb8180645f1fa5915e4ed64861a7732890a386f812a1bb6f50a->enter($__internal_a16dc4a4fc881cb8180645f1fa5915e4ed64861a7732890a386f812a1bb6f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a16dc4a4fc881cb8180645f1fa5915e4ed64861a7732890a386f812a1bb6f50a->leave($__internal_a16dc4a4fc881cb8180645f1fa5915e4ed64861a7732890a386f812a1bb6f50a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
