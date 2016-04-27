<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8656c0297e15290c50d5a1802db73fc03864523e2f185b36d56806dd65fb0016 extends Twig_Template
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
        $__internal_29e8c8dd32219160872c47b49a6b546fd61a749bb57b9970ed04852755a66e52 = $this->env->getExtension("native_profiler");
        $__internal_29e8c8dd32219160872c47b49a6b546fd61a749bb57b9970ed04852755a66e52->enter($__internal_29e8c8dd32219160872c47b49a6b546fd61a749bb57b9970ed04852755a66e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_29e8c8dd32219160872c47b49a6b546fd61a749bb57b9970ed04852755a66e52->leave($__internal_29e8c8dd32219160872c47b49a6b546fd61a749bb57b9970ed04852755a66e52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
