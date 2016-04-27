<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_65c093a70ce1b574505b0747120c32c8ccbd0d91aca6bbe28e0acea4914ca773 extends Twig_Template
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
        $__internal_b514383336872c3892cf5940e042c954fcd7154cf1c9b6f717cc3b36d19515a9 = $this->env->getExtension("native_profiler");
        $__internal_b514383336872c3892cf5940e042c954fcd7154cf1c9b6f717cc3b36d19515a9->enter($__internal_b514383336872c3892cf5940e042c954fcd7154cf1c9b6f717cc3b36d19515a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b514383336872c3892cf5940e042c954fcd7154cf1c9b6f717cc3b36d19515a9->leave($__internal_b514383336872c3892cf5940e042c954fcd7154cf1c9b6f717cc3b36d19515a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
