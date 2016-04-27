<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_aae8be2bb60b3d46ff9129ec2d277e87b133109cd5580d1b719a18a32e76445b extends Twig_Template
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
        $__internal_4a4cb981bc0a79999c94cb5461ba30f275a9e923349a9ba31e91e84ecfa83fe8 = $this->env->getExtension("native_profiler");
        $__internal_4a4cb981bc0a79999c94cb5461ba30f275a9e923349a9ba31e91e84ecfa83fe8->enter($__internal_4a4cb981bc0a79999c94cb5461ba30f275a9e923349a9ba31e91e84ecfa83fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4a4cb981bc0a79999c94cb5461ba30f275a9e923349a9ba31e91e84ecfa83fe8->leave($__internal_4a4cb981bc0a79999c94cb5461ba30f275a9e923349a9ba31e91e84ecfa83fe8_prof);

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
