<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4ee87c548dcc7ef7dd7810282b060395cdda5f841bb18e7b9a87a2b0f8f703cd extends Twig_Template
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
        $__internal_0886df5620186d2052463cecfe3a401988ad658322f0f83093a5fecbe976db35 = $this->env->getExtension("native_profiler");
        $__internal_0886df5620186d2052463cecfe3a401988ad658322f0f83093a5fecbe976db35->enter($__internal_0886df5620186d2052463cecfe3a401988ad658322f0f83093a5fecbe976db35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0886df5620186d2052463cecfe3a401988ad658322f0f83093a5fecbe976db35->leave($__internal_0886df5620186d2052463cecfe3a401988ad658322f0f83093a5fecbe976db35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
