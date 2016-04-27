<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_67d7818eccc38120af68eabbab6ce30423c031910a790074903d9bb0f843b17c extends Twig_Template
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
        $__internal_fa1bc8cf300b2a1af1a77d7c429639de1f4fa5d38323edefe1642c2c81a44e3a = $this->env->getExtension("native_profiler");
        $__internal_fa1bc8cf300b2a1af1a77d7c429639de1f4fa5d38323edefe1642c2c81a44e3a->enter($__internal_fa1bc8cf300b2a1af1a77d7c429639de1f4fa5d38323edefe1642c2c81a44e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fa1bc8cf300b2a1af1a77d7c429639de1f4fa5d38323edefe1642c2c81a44e3a->leave($__internal_fa1bc8cf300b2a1af1a77d7c429639de1f4fa5d38323edefe1642c2c81a44e3a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
