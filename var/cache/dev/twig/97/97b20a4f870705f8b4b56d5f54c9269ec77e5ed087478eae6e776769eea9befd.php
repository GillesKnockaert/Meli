<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cb1a3b447739879f91679ac86e61dc5316c988b4e299646330952c4de5082648 extends Twig_Template
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
        $__internal_7b4f8b26ec6eeadcbeeea0bf7e6badaf38ba6fc5e805d0a67765c83633c2ff6b = $this->env->getExtension("native_profiler");
        $__internal_7b4f8b26ec6eeadcbeeea0bf7e6badaf38ba6fc5e805d0a67765c83633c2ff6b->enter($__internal_7b4f8b26ec6eeadcbeeea0bf7e6badaf38ba6fc5e805d0a67765c83633c2ff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_7b4f8b26ec6eeadcbeeea0bf7e6badaf38ba6fc5e805d0a67765c83633c2ff6b->leave($__internal_7b4f8b26ec6eeadcbeeea0bf7e6badaf38ba6fc5e805d0a67765c83633c2ff6b_prof);

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
