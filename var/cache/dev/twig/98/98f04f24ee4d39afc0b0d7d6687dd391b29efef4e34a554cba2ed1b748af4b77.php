<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5a2e8c06d31504abb1ad4d1b00d72fb809a4f31a16d69d81f429c18e688454ca extends Twig_Template
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
        $__internal_82ce46b01aca6730d71cf298f242d471ef1ec30e7ee86a1d87cce476fd12205f = $this->env->getExtension("native_profiler");
        $__internal_82ce46b01aca6730d71cf298f242d471ef1ec30e7ee86a1d87cce476fd12205f->enter($__internal_82ce46b01aca6730d71cf298f242d471ef1ec30e7ee86a1d87cce476fd12205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_82ce46b01aca6730d71cf298f242d471ef1ec30e7ee86a1d87cce476fd12205f->leave($__internal_82ce46b01aca6730d71cf298f242d471ef1ec30e7ee86a1d87cce476fd12205f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
