<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bb523fb4f87dfdf803c3e2bc0d0baf062d643c4d1ff4e4c3ec9fbc8407c9fa8d extends Twig_Template
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
        $__internal_bbf21dae65b5d80df675b074415dea89b61d3ff30281c61d82bff092900f9413 = $this->env->getExtension("native_profiler");
        $__internal_bbf21dae65b5d80df675b074415dea89b61d3ff30281c61d82bff092900f9413->enter($__internal_bbf21dae65b5d80df675b074415dea89b61d3ff30281c61d82bff092900f9413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bbf21dae65b5d80df675b074415dea89b61d3ff30281c61d82bff092900f9413->leave($__internal_bbf21dae65b5d80df675b074415dea89b61d3ff30281c61d82bff092900f9413_prof);

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
