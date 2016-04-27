<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e7d6332c8caf05f43332885dd3701ed0ac31e6d505b8fe47a3589359c3b3093c extends Twig_Template
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
        $__internal_f7fd99b55526270b8a06b4d2e7b0b42dda2d40b5e0a579aacfb0cc0cb3af4b5b = $this->env->getExtension("native_profiler");
        $__internal_f7fd99b55526270b8a06b4d2e7b0b42dda2d40b5e0a579aacfb0cc0cb3af4b5b->enter($__internal_f7fd99b55526270b8a06b4d2e7b0b42dda2d40b5e0a579aacfb0cc0cb3af4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f7fd99b55526270b8a06b4d2e7b0b42dda2d40b5e0a579aacfb0cc0cb3af4b5b->leave($__internal_f7fd99b55526270b8a06b4d2e7b0b42dda2d40b5e0a579aacfb0cc0cb3af4b5b_prof);

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
