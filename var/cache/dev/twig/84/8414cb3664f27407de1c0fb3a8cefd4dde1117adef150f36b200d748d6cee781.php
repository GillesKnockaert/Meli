<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_66392b5b2b812a087d9c9cd904ba5d914b5be3c66692b75a015c193338977079 extends Twig_Template
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
        $__internal_3740af28e0499626408933f5137e9b74047efb836aabc15dffaf3052a02370f1 = $this->env->getExtension("native_profiler");
        $__internal_3740af28e0499626408933f5137e9b74047efb836aabc15dffaf3052a02370f1->enter($__internal_3740af28e0499626408933f5137e9b74047efb836aabc15dffaf3052a02370f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3740af28e0499626408933f5137e9b74047efb836aabc15dffaf3052a02370f1->leave($__internal_3740af28e0499626408933f5137e9b74047efb836aabc15dffaf3052a02370f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
