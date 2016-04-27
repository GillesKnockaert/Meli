<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d2d8feca72144f4fd3a44ccb20dcacb00bdb6944dcd0c5b03511d2d1c97b7e53 extends Twig_Template
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
        $__internal_2c50705e23abfbafcb7e82bfa90a55dfdb3b271dbdda81e9b21b24d3d1bbcc49 = $this->env->getExtension("native_profiler");
        $__internal_2c50705e23abfbafcb7e82bfa90a55dfdb3b271dbdda81e9b21b24d3d1bbcc49->enter($__internal_2c50705e23abfbafcb7e82bfa90a55dfdb3b271dbdda81e9b21b24d3d1bbcc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2c50705e23abfbafcb7e82bfa90a55dfdb3b271dbdda81e9b21b24d3d1bbcc49->leave($__internal_2c50705e23abfbafcb7e82bfa90a55dfdb3b271dbdda81e9b21b24d3d1bbcc49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
