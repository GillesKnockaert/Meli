<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b579c02854cf77d20570eb7a9fb629418d5b3346c4649c0952da17172964b68b extends Twig_Template
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
        $__internal_f06e910215ed778c90e67efa9b6b4d4a81fa6ee88703a852037c31d0d52f243d = $this->env->getExtension("native_profiler");
        $__internal_f06e910215ed778c90e67efa9b6b4d4a81fa6ee88703a852037c31d0d52f243d->enter($__internal_f06e910215ed778c90e67efa9b6b4d4a81fa6ee88703a852037c31d0d52f243d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f06e910215ed778c90e67efa9b6b4d4a81fa6ee88703a852037c31d0d52f243d->leave($__internal_f06e910215ed778c90e67efa9b6b4d4a81fa6ee88703a852037c31d0d52f243d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
