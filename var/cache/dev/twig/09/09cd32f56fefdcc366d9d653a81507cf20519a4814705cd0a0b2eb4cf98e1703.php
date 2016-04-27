<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_242ed53959f9e020933fc0bed8956434ee9ef0779b7bbdb2e3cbe1a789eb810c extends Twig_Template
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
        $__internal_4b965aae1058bfcd797d5bd588ce1ce9bc8f96a096a5ce519f21fb0e75e74c28 = $this->env->getExtension("native_profiler");
        $__internal_4b965aae1058bfcd797d5bd588ce1ce9bc8f96a096a5ce519f21fb0e75e74c28->enter($__internal_4b965aae1058bfcd797d5bd588ce1ce9bc8f96a096a5ce519f21fb0e75e74c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4b965aae1058bfcd797d5bd588ce1ce9bc8f96a096a5ce519f21fb0e75e74c28->leave($__internal_4b965aae1058bfcd797d5bd588ce1ce9bc8f96a096a5ce519f21fb0e75e74c28_prof);

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
