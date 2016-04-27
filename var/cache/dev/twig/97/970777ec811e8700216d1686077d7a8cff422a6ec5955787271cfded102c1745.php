<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d9843973881d3c9d5ea411b2d7f3f90a550c4b8ab09e9f1fc3d0ea6c6fd975d9 extends Twig_Template
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
        $__internal_8dc3c16eb92208c662331f05213517ce832c0ab6ba553db45f41a3fba96144d1 = $this->env->getExtension("native_profiler");
        $__internal_8dc3c16eb92208c662331f05213517ce832c0ab6ba553db45f41a3fba96144d1->enter($__internal_8dc3c16eb92208c662331f05213517ce832c0ab6ba553db45f41a3fba96144d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8dc3c16eb92208c662331f05213517ce832c0ab6ba553db45f41a3fba96144d1->leave($__internal_8dc3c16eb92208c662331f05213517ce832c0ab6ba553db45f41a3fba96144d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
