<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_72e6265bf1175bcd204f5e5f5bc46a26c2fa7c79cdab4ec41156a130f02849b4 extends Twig_Template
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
        $__internal_7e53dc4897e764cd50d362cd2d23dd8237afaa8695b01df0f0dd13735630d8ed = $this->env->getExtension("native_profiler");
        $__internal_7e53dc4897e764cd50d362cd2d23dd8237afaa8695b01df0f0dd13735630d8ed->enter($__internal_7e53dc4897e764cd50d362cd2d23dd8237afaa8695b01df0f0dd13735630d8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7e53dc4897e764cd50d362cd2d23dd8237afaa8695b01df0f0dd13735630d8ed->leave($__internal_7e53dc4897e764cd50d362cd2d23dd8237afaa8695b01df0f0dd13735630d8ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
