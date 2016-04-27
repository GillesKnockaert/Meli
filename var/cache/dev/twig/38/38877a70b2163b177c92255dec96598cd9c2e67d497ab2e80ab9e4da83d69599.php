<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_88e263399274da76eb528925731f9f7877b48a7f19ea61298e83fbab4cbea00e extends Twig_Template
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
        $__internal_467f3669c292def8d94611795e4c85ac7807c0bc1504b65079840f53d7fc3c10 = $this->env->getExtension("native_profiler");
        $__internal_467f3669c292def8d94611795e4c85ac7807c0bc1504b65079840f53d7fc3c10->enter($__internal_467f3669c292def8d94611795e4c85ac7807c0bc1504b65079840f53d7fc3c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_467f3669c292def8d94611795e4c85ac7807c0bc1504b65079840f53d7fc3c10->leave($__internal_467f3669c292def8d94611795e4c85ac7807c0bc1504b65079840f53d7fc3c10_prof);

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
