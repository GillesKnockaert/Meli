<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_197868c6a0a5fe9209d73d90872f26f71f87912e4b8614c011534ffdc916f3d7 extends Twig_Template
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
        $__internal_8ed9946a0bbf427119a84a076b71eb50673907f1aa44bcd8ef51d0b4256cfde1 = $this->env->getExtension("native_profiler");
        $__internal_8ed9946a0bbf427119a84a076b71eb50673907f1aa44bcd8ef51d0b4256cfde1->enter($__internal_8ed9946a0bbf427119a84a076b71eb50673907f1aa44bcd8ef51d0b4256cfde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8ed9946a0bbf427119a84a076b71eb50673907f1aa44bcd8ef51d0b4256cfde1->leave($__internal_8ed9946a0bbf427119a84a076b71eb50673907f1aa44bcd8ef51d0b4256cfde1_prof);

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
