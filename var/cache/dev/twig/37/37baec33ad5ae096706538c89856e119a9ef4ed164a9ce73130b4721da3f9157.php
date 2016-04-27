<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_75320216d74496a5b78a3e481894c5da95edb0e85525dc4f17df24a6ba192527 extends Twig_Template
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
        $__internal_b5cd3aa71cb553005e8cf47d474fe3b330c880c41fd5637dd076293402433305 = $this->env->getExtension("native_profiler");
        $__internal_b5cd3aa71cb553005e8cf47d474fe3b330c880c41fd5637dd076293402433305->enter($__internal_b5cd3aa71cb553005e8cf47d474fe3b330c880c41fd5637dd076293402433305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5cd3aa71cb553005e8cf47d474fe3b330c880c41fd5637dd076293402433305->leave($__internal_b5cd3aa71cb553005e8cf47d474fe3b330c880c41fd5637dd076293402433305_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
