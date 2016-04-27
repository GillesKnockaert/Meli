<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_086f558e823b7349c9631e8b40accd7a3a22f4aea7a0368f887bebf5db587826 extends Twig_Template
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
        $__internal_fbf1bd43547c89d594b06c80a10c9f1f63b62be6c2c0a193141415bee4aae227 = $this->env->getExtension("native_profiler");
        $__internal_fbf1bd43547c89d594b06c80a10c9f1f63b62be6c2c0a193141415bee4aae227->enter($__internal_fbf1bd43547c89d594b06c80a10c9f1f63b62be6c2c0a193141415bee4aae227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fbf1bd43547c89d594b06c80a10c9f1f63b62be6c2c0a193141415bee4aae227->leave($__internal_fbf1bd43547c89d594b06c80a10c9f1f63b62be6c2c0a193141415bee4aae227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
