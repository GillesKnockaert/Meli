<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9ca3f78664f84dc0657e471a57db69f3f13f319d2d23a9eeed71ececa9898dbe extends Twig_Template
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
        $__internal_9566f7670864aef486b218d3148938a8e4eadd7d67c49a0b5e0a7ab09dde4052 = $this->env->getExtension("native_profiler");
        $__internal_9566f7670864aef486b218d3148938a8e4eadd7d67c49a0b5e0a7ab09dde4052->enter($__internal_9566f7670864aef486b218d3148938a8e4eadd7d67c49a0b5e0a7ab09dde4052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9566f7670864aef486b218d3148938a8e4eadd7d67c49a0b5e0a7ab09dde4052->leave($__internal_9566f7670864aef486b218d3148938a8e4eadd7d67c49a0b5e0a7ab09dde4052_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
