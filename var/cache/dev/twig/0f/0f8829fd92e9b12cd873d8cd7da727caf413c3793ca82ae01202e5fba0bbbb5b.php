<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_01d4f3003d262af2cf849b3d036554ae4021893dd941c6705ca074b128db5ba4 extends Twig_Template
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
        $__internal_720af27d33252d52ca48af99c9426bbac1eacb7e22a53aa1209e325bc550950e = $this->env->getExtension("native_profiler");
        $__internal_720af27d33252d52ca48af99c9426bbac1eacb7e22a53aa1209e325bc550950e->enter($__internal_720af27d33252d52ca48af99c9426bbac1eacb7e22a53aa1209e325bc550950e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_720af27d33252d52ca48af99c9426bbac1eacb7e22a53aa1209e325bc550950e->leave($__internal_720af27d33252d52ca48af99c9426bbac1eacb7e22a53aa1209e325bc550950e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
