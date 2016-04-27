<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_68c0d6d24106bba0fc382196670483f6dae64ff66f458cd3d85be23af86bed58 extends Twig_Template
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
        $__internal_ae6d9dc399c2a7552f7331fad9b46947db37fe67971df2b7dffaa0318f475167 = $this->env->getExtension("native_profiler");
        $__internal_ae6d9dc399c2a7552f7331fad9b46947db37fe67971df2b7dffaa0318f475167->enter($__internal_ae6d9dc399c2a7552f7331fad9b46947db37fe67971df2b7dffaa0318f475167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ae6d9dc399c2a7552f7331fad9b46947db37fe67971df2b7dffaa0318f475167->leave($__internal_ae6d9dc399c2a7552f7331fad9b46947db37fe67971df2b7dffaa0318f475167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
