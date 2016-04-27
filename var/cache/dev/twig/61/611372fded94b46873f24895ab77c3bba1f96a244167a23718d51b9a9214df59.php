<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_42a36a44cf32a83f00b3835a8605d737ad2bb85b3696073f899da6aa22aecdca extends Twig_Template
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
        $__internal_5c57f396422bc16d2fc570ed12629741199bf7bd94e1b01c1767477be3dc93d9 = $this->env->getExtension("native_profiler");
        $__internal_5c57f396422bc16d2fc570ed12629741199bf7bd94e1b01c1767477be3dc93d9->enter($__internal_5c57f396422bc16d2fc570ed12629741199bf7bd94e1b01c1767477be3dc93d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$view['form']->block(\$form, 'attributes', array('attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5c57f396422bc16d2fc570ed12629741199bf7bd94e1b01c1767477be3dc93d9->leave($__internal_5c57f396422bc16d2fc570ed12629741199bf7bd94e1b01c1767477be3dc93d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php use Symfony\Component\Form\ChoiceList\View\ChoiceGroupView;*/
/* */
/* $translatorHelper = $view['translator']; // outside of the loop for performance reasons! ?>*/
/* <?php $formHelper = $view['form']; ?>*/
/* <?php foreach ($choices as $group_label => $choice): ?>*/
/*     <?php if (is_array($choice) || $choice instanceof ChoiceGroupView): ?>*/
/*         <optgroup label="<?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($group_label, array(), $choice_translation_domain) : $group_label) ?>">*/
/*             <?php echo $formHelper->block($form, 'choice_widget_options', array('choices' => $choice)) ?>*/
/*         </optgroup>*/
/*     <?php else: ?>*/
/*         <option value="<?php echo $view->escape($choice->value) ?>" <?php echo $view['form']->block($form, 'attributes', array('attr' => $choice->attr)) ?><?php if ($is_selected($choice->value, $value)): ?> selected="selected"<?php endif?>><?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($choice->label, array(), $choice_translation_domain) : $choice->label) ?></option>*/
/*     <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
