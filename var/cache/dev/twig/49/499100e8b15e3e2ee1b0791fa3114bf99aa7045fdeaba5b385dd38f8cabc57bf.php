<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_96d192ab65cab033a05344c0c1fd5979bf21386d802770802019ac05b5222dc9 extends Twig_Template
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
        $__internal_d3131ac1101984172472edd048855dc28da3a4365430c5ad935ffba6ff94ed2f = $this->env->getExtension("native_profiler");
        $__internal_d3131ac1101984172472edd048855dc28da3a4365430c5ad935ffba6ff94ed2f->enter($__internal_d3131ac1101984172472edd048855dc28da3a4365430c5ad935ffba6ff94ed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d3131ac1101984172472edd048855dc28da3a4365430c5ad935ffba6ff94ed2f->leave($__internal_d3131ac1101984172472edd048855dc28da3a4365430c5ad935ffba6ff94ed2f_prof);

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
