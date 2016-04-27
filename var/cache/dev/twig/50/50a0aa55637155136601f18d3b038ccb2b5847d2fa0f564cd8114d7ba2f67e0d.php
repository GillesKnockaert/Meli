<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f18ddc3190946f65d222b5a78a07a4930336599c7d915b749d6adaeaa7cf9fbc extends Twig_Template
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
        $__internal_67ae929e937080f7ebbe17a7cc19890b93ab6013116b27f53c3a78a7b4aa1349 = $this->env->getExtension("native_profiler");
        $__internal_67ae929e937080f7ebbe17a7cc19890b93ab6013116b27f53c3a78a7b4aa1349->enter($__internal_67ae929e937080f7ebbe17a7cc19890b93ab6013116b27f53c3a78a7b4aa1349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_67ae929e937080f7ebbe17a7cc19890b93ab6013116b27f53c3a78a7b4aa1349->leave($__internal_67ae929e937080f7ebbe17a7cc19890b93ab6013116b27f53c3a78a7b4aa1349_prof);

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
