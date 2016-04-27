<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_67d45650c175bfb0f5b6aeb9e0d7db1b2a082e3f434bb0b59b8f4b07c7f5324d extends Twig_Template
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
        $__internal_865db3ea2775321dbbea770a8eb73b00759672dce7b4eb3b12ba4e0d1dba9b55 = $this->env->getExtension("native_profiler");
        $__internal_865db3ea2775321dbbea770a8eb73b00759672dce7b4eb3b12ba4e0d1dba9b55->enter($__internal_865db3ea2775321dbbea770a8eb73b00759672dce7b4eb3b12ba4e0d1dba9b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_865db3ea2775321dbbea770a8eb73b00759672dce7b4eb3b12ba4e0d1dba9b55->leave($__internal_865db3ea2775321dbbea770a8eb73b00759672dce7b4eb3b12ba4e0d1dba9b55_prof);

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
