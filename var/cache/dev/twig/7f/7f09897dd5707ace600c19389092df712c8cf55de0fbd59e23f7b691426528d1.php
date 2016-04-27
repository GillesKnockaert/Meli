<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ba730742218808ca7db37839af719d40c959f73809f468ea5eceb8457c99a2bc extends Twig_Template
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
        $__internal_bf4d4e7b7d112c1c0ecb607639d76f78a10510098cccfa50f9bcc74ae1f066c4 = $this->env->getExtension("native_profiler");
        $__internal_bf4d4e7b7d112c1c0ecb607639d76f78a10510098cccfa50f9bcc74ae1f066c4->enter($__internal_bf4d4e7b7d112c1c0ecb607639d76f78a10510098cccfa50f9bcc74ae1f066c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bf4d4e7b7d112c1c0ecb607639d76f78a10510098cccfa50f9bcc74ae1f066c4->leave($__internal_bf4d4e7b7d112c1c0ecb607639d76f78a10510098cccfa50f9bcc74ae1f066c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
