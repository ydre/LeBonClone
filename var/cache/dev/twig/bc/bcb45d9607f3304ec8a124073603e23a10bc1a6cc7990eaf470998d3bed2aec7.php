<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_23afc3cf4a87134c629d92384d5defb23cf1df05fe3060698818a55c55a5cf47 extends Twig_Template
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
        $__internal_eb63096f28332f8ff6616db0c213a936becdf19657acbdc8567a25de49d53a94 = $this->env->getExtension("native_profiler");
        $__internal_eb63096f28332f8ff6616db0c213a936becdf19657acbdc8567a25de49d53a94->enter($__internal_eb63096f28332f8ff6616db0c213a936becdf19657acbdc8567a25de49d53a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eb63096f28332f8ff6616db0c213a936becdf19657acbdc8567a25de49d53a94->leave($__internal_eb63096f28332f8ff6616db0c213a936becdf19657acbdc8567a25de49d53a94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
