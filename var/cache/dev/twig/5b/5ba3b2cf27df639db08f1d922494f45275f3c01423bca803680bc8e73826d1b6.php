<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_30b3cc8066c05e6a84d5847c8764b6c3738c4c65364b8d7d1d9443911fe1bfd0 extends Twig_Template
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
        $__internal_31d5ab2820c11f52bb653bf92091d4ce346aa50a03e1d84cfa888e57eeabd4de = $this->env->getExtension("native_profiler");
        $__internal_31d5ab2820c11f52bb653bf92091d4ce346aa50a03e1d84cfa888e57eeabd4de->enter($__internal_31d5ab2820c11f52bb653bf92091d4ce346aa50a03e1d84cfa888e57eeabd4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_31d5ab2820c11f52bb653bf92091d4ce346aa50a03e1d84cfa888e57eeabd4de->leave($__internal_31d5ab2820c11f52bb653bf92091d4ce346aa50a03e1d84cfa888e57eeabd4de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
