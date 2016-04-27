<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1d5cfd9bcd25ca2f95955331b47bc0b4464a4ec6e01638241b6392f549dc9e92 extends Twig_Template
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
        $__internal_9f000813e1f8c53673004186618b624715d7db77960e4b48e31a59bc1ca92071 = $this->env->getExtension("native_profiler");
        $__internal_9f000813e1f8c53673004186618b624715d7db77960e4b48e31a59bc1ca92071->enter($__internal_9f000813e1f8c53673004186618b624715d7db77960e4b48e31a59bc1ca92071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9f000813e1f8c53673004186618b624715d7db77960e4b48e31a59bc1ca92071->leave($__internal_9f000813e1f8c53673004186618b624715d7db77960e4b48e31a59bc1ca92071_prof);

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
