<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_38ff5035f4fef85ff10b78d72028962c0e1734ff5a8a63c920ad4b0d169f01d8 extends Twig_Template
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
        $__internal_cb558174e1463a8b6dd29ae48f98bfd2f68c07fd623430ffba2bcb2ee0bc53c6 = $this->env->getExtension("native_profiler");
        $__internal_cb558174e1463a8b6dd29ae48f98bfd2f68c07fd623430ffba2bcb2ee0bc53c6->enter($__internal_cb558174e1463a8b6dd29ae48f98bfd2f68c07fd623430ffba2bcb2ee0bc53c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cb558174e1463a8b6dd29ae48f98bfd2f68c07fd623430ffba2bcb2ee0bc53c6->leave($__internal_cb558174e1463a8b6dd29ae48f98bfd2f68c07fd623430ffba2bcb2ee0bc53c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
