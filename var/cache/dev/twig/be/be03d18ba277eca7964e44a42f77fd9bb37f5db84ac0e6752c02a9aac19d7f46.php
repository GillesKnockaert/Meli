<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_288aebb39abb563da45c783d1a2edb4ec18fb925422ca1683113db4621d6c522 extends Twig_Template
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
        $__internal_55f898fc91e92596e59bdc286e2111bcba692878a04254692cfd0327054be330 = $this->env->getExtension("native_profiler");
        $__internal_55f898fc91e92596e59bdc286e2111bcba692878a04254692cfd0327054be330->enter($__internal_55f898fc91e92596e59bdc286e2111bcba692878a04254692cfd0327054be330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_55f898fc91e92596e59bdc286e2111bcba692878a04254692cfd0327054be330->leave($__internal_55f898fc91e92596e59bdc286e2111bcba692878a04254692cfd0327054be330_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
