<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2210cde4f81a3edf47e75ea03ea92aaf847a01c679a43d406d5c31f2f904102c extends Twig_Template
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
        $__internal_b5f84bc6ae32b41d598580d04947d2fbb56c737ac10ffe45a99c683270336fd7 = $this->env->getExtension("native_profiler");
        $__internal_b5f84bc6ae32b41d598580d04947d2fbb56c737ac10ffe45a99c683270336fd7->enter($__internal_b5f84bc6ae32b41d598580d04947d2fbb56c737ac10ffe45a99c683270336fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b5f84bc6ae32b41d598580d04947d2fbb56c737ac10ffe45a99c683270336fd7->leave($__internal_b5f84bc6ae32b41d598580d04947d2fbb56c737ac10ffe45a99c683270336fd7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
