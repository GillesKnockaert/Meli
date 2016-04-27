<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4b7752ab0a85df040d58ff1d4b1266ef30f46bfe8beef06a4aba568180fffff4 extends Twig_Template
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
        $__internal_3c3f56608bab8965826674ad25632fed9a2a40170fdab081cb265f2662c2aa33 = $this->env->getExtension("native_profiler");
        $__internal_3c3f56608bab8965826674ad25632fed9a2a40170fdab081cb265f2662c2aa33->enter($__internal_3c3f56608bab8965826674ad25632fed9a2a40170fdab081cb265f2662c2aa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3c3f56608bab8965826674ad25632fed9a2a40170fdab081cb265f2662c2aa33->leave($__internal_3c3f56608bab8965826674ad25632fed9a2a40170fdab081cb265f2662c2aa33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
