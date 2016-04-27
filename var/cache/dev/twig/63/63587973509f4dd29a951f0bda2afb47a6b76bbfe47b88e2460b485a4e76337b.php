<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_91dedb2ae992408229d9fb6bf8f5e68c8e42a4089304478d2fc71cb67eaa82af extends Twig_Template
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
        $__internal_11ab57456b41a78a5928bc6252eb0e7a6f8f1ce798f8dba84659d8f86e334eb5 = $this->env->getExtension("native_profiler");
        $__internal_11ab57456b41a78a5928bc6252eb0e7a6f8f1ce798f8dba84659d8f86e334eb5->enter($__internal_11ab57456b41a78a5928bc6252eb0e7a6f8f1ce798f8dba84659d8f86e334eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_11ab57456b41a78a5928bc6252eb0e7a6f8f1ce798f8dba84659d8f86e334eb5->leave($__internal_11ab57456b41a78a5928bc6252eb0e7a6f8f1ce798f8dba84659d8f86e334eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
