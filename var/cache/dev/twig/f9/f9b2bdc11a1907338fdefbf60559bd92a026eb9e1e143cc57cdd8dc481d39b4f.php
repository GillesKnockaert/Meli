<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ed844b95e9ea567195c7616aa1c633b81ee333aeac86b20c3a715c45e9f46ca7 extends Twig_Template
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
        $__internal_6c09afb384ea52043c665852353d162b9991555fb077051cd31f3519eaad5e49 = $this->env->getExtension("native_profiler");
        $__internal_6c09afb384ea52043c665852353d162b9991555fb077051cd31f3519eaad5e49->enter($__internal_6c09afb384ea52043c665852353d162b9991555fb077051cd31f3519eaad5e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6c09afb384ea52043c665852353d162b9991555fb077051cd31f3519eaad5e49->leave($__internal_6c09afb384ea52043c665852353d162b9991555fb077051cd31f3519eaad5e49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
