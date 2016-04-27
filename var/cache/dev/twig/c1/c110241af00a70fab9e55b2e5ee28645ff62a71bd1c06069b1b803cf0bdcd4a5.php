<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bc333cba84ece8d7a324970a7e47485fc152841dc89a484485f58a08e8e5611b extends Twig_Template
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
        $__internal_4c89cc95ee20631707bfe8c46f5974d3187e364954a4d9391dddaa776f70bddd = $this->env->getExtension("native_profiler");
        $__internal_4c89cc95ee20631707bfe8c46f5974d3187e364954a4d9391dddaa776f70bddd->enter($__internal_4c89cc95ee20631707bfe8c46f5974d3187e364954a4d9391dddaa776f70bddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4c89cc95ee20631707bfe8c46f5974d3187e364954a4d9391dddaa776f70bddd->leave($__internal_4c89cc95ee20631707bfe8c46f5974d3187e364954a4d9391dddaa776f70bddd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
