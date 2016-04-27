<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_81e89267f7fb942971a1d78088898c706ebd588cfe9e3b379da6a27cda90368a extends Twig_Template
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
        $__internal_961e1c92a4b50ca41625c49cb2d056ff986d867755c25804adabc7adcb638983 = $this->env->getExtension("native_profiler");
        $__internal_961e1c92a4b50ca41625c49cb2d056ff986d867755c25804adabc7adcb638983->enter($__internal_961e1c92a4b50ca41625c49cb2d056ff986d867755c25804adabc7adcb638983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_961e1c92a4b50ca41625c49cb2d056ff986d867755c25804adabc7adcb638983->leave($__internal_961e1c92a4b50ca41625c49cb2d056ff986d867755c25804adabc7adcb638983_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
