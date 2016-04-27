<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_af67d57ffdbbf949ce9b3d297f446928f8b528baefcce1b276aaa17b2b720866 extends Twig_Template
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
        $__internal_56a2d19bd0e7bb55bf8a6f1ad58a78ada592baa37f3ce07e50ba2c21fbc04158 = $this->env->getExtension("native_profiler");
        $__internal_56a2d19bd0e7bb55bf8a6f1ad58a78ada592baa37f3ce07e50ba2c21fbc04158->enter($__internal_56a2d19bd0e7bb55bf8a6f1ad58a78ada592baa37f3ce07e50ba2c21fbc04158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_56a2d19bd0e7bb55bf8a6f1ad58a78ada592baa37f3ce07e50ba2c21fbc04158->leave($__internal_56a2d19bd0e7bb55bf8a6f1ad58a78ada592baa37f3ce07e50ba2c21fbc04158_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
