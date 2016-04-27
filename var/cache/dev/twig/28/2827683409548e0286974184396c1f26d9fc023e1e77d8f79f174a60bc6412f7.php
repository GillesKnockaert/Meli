<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_05750e2a2b1cd0a3332cfc6459acbb4c014cc78eb1edf9f8ca407185ae9a1d4f extends Twig_Template
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
        $__internal_5f930c0a8782079d41a8ebee342e157fe0f056cff8718aae571923408d953220 = $this->env->getExtension("native_profiler");
        $__internal_5f930c0a8782079d41a8ebee342e157fe0f056cff8718aae571923408d953220->enter($__internal_5f930c0a8782079d41a8ebee342e157fe0f056cff8718aae571923408d953220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5f930c0a8782079d41a8ebee342e157fe0f056cff8718aae571923408d953220->leave($__internal_5f930c0a8782079d41a8ebee342e157fe0f056cff8718aae571923408d953220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
