<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2ae5549ff626ba3ee261c6450c055b4cce507b76ecdf4f988f63218eb4289cb8 extends Twig_Template
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
        $__internal_472769d7cffa120eeba457d5e654634570c8d113842f2d36a7f4a1a511d279fa = $this->env->getExtension("native_profiler");
        $__internal_472769d7cffa120eeba457d5e654634570c8d113842f2d36a7f4a1a511d279fa->enter($__internal_472769d7cffa120eeba457d5e654634570c8d113842f2d36a7f4a1a511d279fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_472769d7cffa120eeba457d5e654634570c8d113842f2d36a7f4a1a511d279fa->leave($__internal_472769d7cffa120eeba457d5e654634570c8d113842f2d36a7f4a1a511d279fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
