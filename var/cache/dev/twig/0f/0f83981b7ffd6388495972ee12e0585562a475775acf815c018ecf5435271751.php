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
        $__internal_d06e437f6156bcba702dee2fe45c23c62f94629c214c7c2b381ebd1722f9724f = $this->env->getExtension("native_profiler");
        $__internal_d06e437f6156bcba702dee2fe45c23c62f94629c214c7c2b381ebd1722f9724f->enter($__internal_d06e437f6156bcba702dee2fe45c23c62f94629c214c7c2b381ebd1722f9724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d06e437f6156bcba702dee2fe45c23c62f94629c214c7c2b381ebd1722f9724f->leave($__internal_d06e437f6156bcba702dee2fe45c23c62f94629c214c7c2b381ebd1722f9724f_prof);

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
