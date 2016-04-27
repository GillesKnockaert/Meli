<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3581e11a18fa5ae4ba8ed6fdad3a112ad3da7161fe4d5ff41414286144380007 extends Twig_Template
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
        $__internal_2f444681c0f8065827052ade0743aa6580cf9b4eb18686a26a05f9aa619fa035 = $this->env->getExtension("native_profiler");
        $__internal_2f444681c0f8065827052ade0743aa6580cf9b4eb18686a26a05f9aa619fa035->enter($__internal_2f444681c0f8065827052ade0743aa6580cf9b4eb18686a26a05f9aa619fa035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2f444681c0f8065827052ade0743aa6580cf9b4eb18686a26a05f9aa619fa035->leave($__internal_2f444681c0f8065827052ade0743aa6580cf9b4eb18686a26a05f9aa619fa035_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
