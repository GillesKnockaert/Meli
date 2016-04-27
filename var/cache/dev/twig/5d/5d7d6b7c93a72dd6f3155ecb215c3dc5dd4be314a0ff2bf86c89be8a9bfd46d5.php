<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_be77d9f9c8a57ceb47138743607003a06afabc38361a2a0978d765cc6444f55d extends Twig_Template
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
        $__internal_097b879869ce9889950a9fc3238550bed7f1d169f3f6a273c0dddd5aa4c7effe = $this->env->getExtension("native_profiler");
        $__internal_097b879869ce9889950a9fc3238550bed7f1d169f3f6a273c0dddd5aa4c7effe->enter($__internal_097b879869ce9889950a9fc3238550bed7f1d169f3f6a273c0dddd5aa4c7effe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_097b879869ce9889950a9fc3238550bed7f1d169f3f6a273c0dddd5aa4c7effe->leave($__internal_097b879869ce9889950a9fc3238550bed7f1d169f3f6a273c0dddd5aa4c7effe_prof);

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
