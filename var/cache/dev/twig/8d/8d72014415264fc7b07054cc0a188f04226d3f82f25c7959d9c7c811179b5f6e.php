<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_33f36e0cac157c4c9c4ae46cdd77f7be76b668e0664c34e4a653ddcbf1166dc0 extends Twig_Template
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
        $__internal_2e30421760a324cba730d7196b8710954fd9c4d1e5ae4b2733c800f5b324b805 = $this->env->getExtension("native_profiler");
        $__internal_2e30421760a324cba730d7196b8710954fd9c4d1e5ae4b2733c800f5b324b805->enter($__internal_2e30421760a324cba730d7196b8710954fd9c4d1e5ae4b2733c800f5b324b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2e30421760a324cba730d7196b8710954fd9c4d1e5ae4b2733c800f5b324b805->leave($__internal_2e30421760a324cba730d7196b8710954fd9c4d1e5ae4b2733c800f5b324b805_prof);

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
