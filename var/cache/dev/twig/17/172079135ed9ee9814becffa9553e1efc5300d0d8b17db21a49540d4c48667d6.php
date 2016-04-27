<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3cc897c8d4a3826f12027e42e0953c0fff934c023f31bc49abc151f5ed9ea17a extends Twig_Template
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
        $__internal_0bd240c72cacede63c9f7ad95e39f932aa023d9b1db9cfbbc42e8de05e6eeeff = $this->env->getExtension("native_profiler");
        $__internal_0bd240c72cacede63c9f7ad95e39f932aa023d9b1db9cfbbc42e8de05e6eeeff->enter($__internal_0bd240c72cacede63c9f7ad95e39f932aa023d9b1db9cfbbc42e8de05e6eeeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0bd240c72cacede63c9f7ad95e39f932aa023d9b1db9cfbbc42e8de05e6eeeff->leave($__internal_0bd240c72cacede63c9f7ad95e39f932aa023d9b1db9cfbbc42e8de05e6eeeff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
