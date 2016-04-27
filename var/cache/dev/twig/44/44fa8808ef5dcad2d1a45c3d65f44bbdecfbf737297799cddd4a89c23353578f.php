<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_677871bb442b4f79952d5aa601fd10f6554129669c079dd05617a5d3c136b1ab extends Twig_Template
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
        $__internal_19cba1cd8061b2f4c8eef3ad91988e60bf3b15dc83872999bb71445843e84a6b = $this->env->getExtension("native_profiler");
        $__internal_19cba1cd8061b2f4c8eef3ad91988e60bf3b15dc83872999bb71445843e84a6b->enter($__internal_19cba1cd8061b2f4c8eef3ad91988e60bf3b15dc83872999bb71445843e84a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_19cba1cd8061b2f4c8eef3ad91988e60bf3b15dc83872999bb71445843e84a6b->leave($__internal_19cba1cd8061b2f4c8eef3ad91988e60bf3b15dc83872999bb71445843e84a6b_prof);

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
