<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b9d6ad25b157ca60010348cccef3387efa7432144b2444b4de11f34730b27720 extends Twig_Template
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
        $__internal_ec99db1ed84e32d2e847183d6d98eeae5fe07ed7645ce564cc5ccda471c1a9a0 = $this->env->getExtension("native_profiler");
        $__internal_ec99db1ed84e32d2e847183d6d98eeae5fe07ed7645ce564cc5ccda471c1a9a0->enter($__internal_ec99db1ed84e32d2e847183d6d98eeae5fe07ed7645ce564cc5ccda471c1a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ec99db1ed84e32d2e847183d6d98eeae5fe07ed7645ce564cc5ccda471c1a9a0->leave($__internal_ec99db1ed84e32d2e847183d6d98eeae5fe07ed7645ce564cc5ccda471c1a9a0_prof);

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
