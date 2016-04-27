<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_71861fbf5950bcd3633b1751a1674605a137047380af3c02b1a7ee54929fe71e extends Twig_Template
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
        $__internal_167a250985dbd4d46ff6686f653cc596cb6368a51f5f746f48bc5866da0e3e33 = $this->env->getExtension("native_profiler");
        $__internal_167a250985dbd4d46ff6686f653cc596cb6368a51f5f746f48bc5866da0e3e33->enter($__internal_167a250985dbd4d46ff6686f653cc596cb6368a51f5f746f48bc5866da0e3e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_167a250985dbd4d46ff6686f653cc596cb6368a51f5f746f48bc5866da0e3e33->leave($__internal_167a250985dbd4d46ff6686f653cc596cb6368a51f5f746f48bc5866da0e3e33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
