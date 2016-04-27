<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_38d093a551c5c4a266f35d1672b003096cb330f288fae69c130bcf9e212b65d9 extends Twig_Template
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
        $__internal_1093b60312df98f60f04caf44fa46a244675f0b517bcc697560b20fe77bdd791 = $this->env->getExtension("native_profiler");
        $__internal_1093b60312df98f60f04caf44fa46a244675f0b517bcc697560b20fe77bdd791->enter($__internal_1093b60312df98f60f04caf44fa46a244675f0b517bcc697560b20fe77bdd791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1093b60312df98f60f04caf44fa46a244675f0b517bcc697560b20fe77bdd791->leave($__internal_1093b60312df98f60f04caf44fa46a244675f0b517bcc697560b20fe77bdd791_prof);

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
