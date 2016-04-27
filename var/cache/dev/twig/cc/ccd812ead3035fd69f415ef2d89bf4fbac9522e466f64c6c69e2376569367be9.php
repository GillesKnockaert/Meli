<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b6abce50e403e528a0d9b22e278a2cf4f199d716df268bda02f343a6ecb00cec extends Twig_Template
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
        $__internal_6403f94e15aeb45a251a337c0f184e7df3cb5b43b80afb5d27faccb079be35cc = $this->env->getExtension("native_profiler");
        $__internal_6403f94e15aeb45a251a337c0f184e7df3cb5b43b80afb5d27faccb079be35cc->enter($__internal_6403f94e15aeb45a251a337c0f184e7df3cb5b43b80afb5d27faccb079be35cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_6403f94e15aeb45a251a337c0f184e7df3cb5b43b80afb5d27faccb079be35cc->leave($__internal_6403f94e15aeb45a251a337c0f184e7df3cb5b43b80afb5d27faccb079be35cc_prof);

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
