<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa52a7b117847333e87513f743554b6d42cf652cae8552fd060964f7ba8032e7 extends Twig_Template
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
        $__internal_ceacac50c58f973007e7680120fc355338ee0745fa90d442e85ed95451c2cdad = $this->env->getExtension("native_profiler");
        $__internal_ceacac50c58f973007e7680120fc355338ee0745fa90d442e85ed95451c2cdad->enter($__internal_ceacac50c58f973007e7680120fc355338ee0745fa90d442e85ed95451c2cdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ceacac50c58f973007e7680120fc355338ee0745fa90d442e85ed95451c2cdad->leave($__internal_ceacac50c58f973007e7680120fc355338ee0745fa90d442e85ed95451c2cdad_prof);

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
