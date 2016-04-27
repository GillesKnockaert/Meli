<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_2819b006b2af6fa0c2148bfac0213debe06fcb58dcfd67f9a4ebc84a28bcff8c extends Twig_Template
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
        $__internal_a07422ee750166c0657133f2670e74c95c058bfe46506641bc3b9bc3bf6ceed0 = $this->env->getExtension("native_profiler");
        $__internal_a07422ee750166c0657133f2670e74c95c058bfe46506641bc3b9bc3bf6ceed0->enter($__internal_a07422ee750166c0657133f2670e74c95c058bfe46506641bc3b9bc3bf6ceed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a07422ee750166c0657133f2670e74c95c058bfe46506641bc3b9bc3bf6ceed0->leave($__internal_a07422ee750166c0657133f2670e74c95c058bfe46506641bc3b9bc3bf6ceed0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
