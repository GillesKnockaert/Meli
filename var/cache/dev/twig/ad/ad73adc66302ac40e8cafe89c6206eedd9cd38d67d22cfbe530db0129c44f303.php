<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_929bcf400d304f66d8adc97ef50ee760a08acbf5c1beee1b81203866ed4a9961 extends Twig_Template
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
        $__internal_8dff542cfa5044295038df1f0fa7c0a6eab043b322d84c2a17190d70acb12fa7 = $this->env->getExtension("native_profiler");
        $__internal_8dff542cfa5044295038df1f0fa7c0a6eab043b322d84c2a17190d70acb12fa7->enter($__internal_8dff542cfa5044295038df1f0fa7c0a6eab043b322d84c2a17190d70acb12fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8dff542cfa5044295038df1f0fa7c0a6eab043b322d84c2a17190d70acb12fa7->leave($__internal_8dff542cfa5044295038df1f0fa7c0a6eab043b322d84c2a17190d70acb12fa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
