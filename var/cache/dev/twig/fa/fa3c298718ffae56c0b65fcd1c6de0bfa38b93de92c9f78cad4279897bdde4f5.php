<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f55332132039237a930345fd38905e8711d3d566d23d5be11a6efdef9666c3c6 extends Twig_Template
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
        $__internal_23ead0c4384492844dd67a35b25cf13be2b5a00c0b1c7882f4f44525ad8d22a5 = $this->env->getExtension("native_profiler");
        $__internal_23ead0c4384492844dd67a35b25cf13be2b5a00c0b1c7882f4f44525ad8d22a5->enter($__internal_23ead0c4384492844dd67a35b25cf13be2b5a00c0b1c7882f4f44525ad8d22a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_23ead0c4384492844dd67a35b25cf13be2b5a00c0b1c7882f4f44525ad8d22a5->leave($__internal_23ead0c4384492844dd67a35b25cf13be2b5a00c0b1c7882f4f44525ad8d22a5_prof);

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
