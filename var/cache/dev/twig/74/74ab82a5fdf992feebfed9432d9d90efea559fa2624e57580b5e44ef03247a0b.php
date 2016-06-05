<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d866cbb351bcf5324f61fa63880bc3edd3894c4bcbcb4b761316c30175cac061 extends Twig_Template
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
        $__internal_87fef08b816ab98540992c28053d0638165c1ff2da1469882a0ac7f047963891 = $this->env->getExtension("native_profiler");
        $__internal_87fef08b816ab98540992c28053d0638165c1ff2da1469882a0ac7f047963891->enter($__internal_87fef08b816ab98540992c28053d0638165c1ff2da1469882a0ac7f047963891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_87fef08b816ab98540992c28053d0638165c1ff2da1469882a0ac7f047963891->leave($__internal_87fef08b816ab98540992c28053d0638165c1ff2da1469882a0ac7f047963891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
