<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_40e5b6f115829353a1429b108462b9f9732370744d2f6305d8f312b2774f5c63 extends Twig_Template
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
        $__internal_71c9bd998ea62da51733b0a7d66d7ebd056b8e34ff032947e7d7b258b9389128 = $this->env->getExtension("native_profiler");
        $__internal_71c9bd998ea62da51733b0a7d66d7ebd056b8e34ff032947e7d7b258b9389128->enter($__internal_71c9bd998ea62da51733b0a7d66d7ebd056b8e34ff032947e7d7b258b9389128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_71c9bd998ea62da51733b0a7d66d7ebd056b8e34ff032947e7d7b258b9389128->leave($__internal_71c9bd998ea62da51733b0a7d66d7ebd056b8e34ff032947e7d7b258b9389128_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
