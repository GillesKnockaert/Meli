<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_77ff5fd95a273130ea557d118ed317a7c96e775cbf567ab40e7ab012190a14e4 extends Twig_Template
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
        $__internal_f79acf54d276f697989cb371ff7c87e84150ed58619dc9fe97e956427b3df9bd = $this->env->getExtension("native_profiler");
        $__internal_f79acf54d276f697989cb371ff7c87e84150ed58619dc9fe97e956427b3df9bd->enter($__internal_f79acf54d276f697989cb371ff7c87e84150ed58619dc9fe97e956427b3df9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f79acf54d276f697989cb371ff7c87e84150ed58619dc9fe97e956427b3df9bd->leave($__internal_f79acf54d276f697989cb371ff7c87e84150ed58619dc9fe97e956427b3df9bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
