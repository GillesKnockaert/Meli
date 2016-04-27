<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ce959c53d355b5f811a8e8ea1d2583efb059c1afa67f8877538715b20f2cc760 extends Twig_Template
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
        $__internal_a7313e2b14ef55e77efd5c3ca466e0f63c0ca417f137eca53436d2f5de9959f7 = $this->env->getExtension("native_profiler");
        $__internal_a7313e2b14ef55e77efd5c3ca466e0f63c0ca417f137eca53436d2f5de9959f7->enter($__internal_a7313e2b14ef55e77efd5c3ca466e0f63c0ca417f137eca53436d2f5de9959f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a7313e2b14ef55e77efd5c3ca466e0f63c0ca417f137eca53436d2f5de9959f7->leave($__internal_a7313e2b14ef55e77efd5c3ca466e0f63c0ca417f137eca53436d2f5de9959f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
