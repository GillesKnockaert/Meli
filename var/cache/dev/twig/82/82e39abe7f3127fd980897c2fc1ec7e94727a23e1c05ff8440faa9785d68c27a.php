<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_00c4766f3db3ef4b7b7c068cbcddc2e4b750f39ee2f16a3a7eb5374d2c9508e1 extends Twig_Template
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
        $__internal_db06984fa8006b1e50e78c13c3121f181ec0c39699657187b99a3c9617cb1d5f = $this->env->getExtension("native_profiler");
        $__internal_db06984fa8006b1e50e78c13c3121f181ec0c39699657187b99a3c9617cb1d5f->enter($__internal_db06984fa8006b1e50e78c13c3121f181ec0c39699657187b99a3c9617cb1d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_db06984fa8006b1e50e78c13c3121f181ec0c39699657187b99a3c9617cb1d5f->leave($__internal_db06984fa8006b1e50e78c13c3121f181ec0c39699657187b99a3c9617cb1d5f_prof);

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
