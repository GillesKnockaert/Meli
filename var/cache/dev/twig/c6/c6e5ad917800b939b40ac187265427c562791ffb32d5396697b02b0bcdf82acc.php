<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f8146a26544410caf5c34ede1e1f98c1233f8ccc8d2cc77115ef4be99d8035cd extends Twig_Template
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
        $__internal_1b31761757f6b866a0db9aa075e83f04bcdefa8c2af601d00be966d0d0922b31 = $this->env->getExtension("native_profiler");
        $__internal_1b31761757f6b866a0db9aa075e83f04bcdefa8c2af601d00be966d0d0922b31->enter($__internal_1b31761757f6b866a0db9aa075e83f04bcdefa8c2af601d00be966d0d0922b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1b31761757f6b866a0db9aa075e83f04bcdefa8c2af601d00be966d0d0922b31->leave($__internal_1b31761757f6b866a0db9aa075e83f04bcdefa8c2af601d00be966d0d0922b31_prof);

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
