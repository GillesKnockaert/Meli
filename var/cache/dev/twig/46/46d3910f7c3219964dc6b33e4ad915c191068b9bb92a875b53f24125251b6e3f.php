<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_91ce3dcd45efd841e74f0f843e38a41331c8f27f6b47c8fa9273425d2365cfeb extends Twig_Template
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
        $__internal_2a6c51ab304f480aa06caccdfb53a242f3c7e6d966a804436fec8b04fbd27fc6 = $this->env->getExtension("native_profiler");
        $__internal_2a6c51ab304f480aa06caccdfb53a242f3c7e6d966a804436fec8b04fbd27fc6->enter($__internal_2a6c51ab304f480aa06caccdfb53a242f3c7e6d966a804436fec8b04fbd27fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2a6c51ab304f480aa06caccdfb53a242f3c7e6d966a804436fec8b04fbd27fc6->leave($__internal_2a6c51ab304f480aa06caccdfb53a242f3c7e6d966a804436fec8b04fbd27fc6_prof);

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
