<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2e45c316b175248b9b7e0fc6ec3ec4a7579912266d6bbe8ebc21db471de9937e extends Twig_Template
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
        $__internal_dceaf911aa2f26b41ffd5a1dd542c29b6d59d91537be402301aa1a29436a595a = $this->env->getExtension("native_profiler");
        $__internal_dceaf911aa2f26b41ffd5a1dd542c29b6d59d91537be402301aa1a29436a595a->enter($__internal_dceaf911aa2f26b41ffd5a1dd542c29b6d59d91537be402301aa1a29436a595a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dceaf911aa2f26b41ffd5a1dd542c29b6d59d91537be402301aa1a29436a595a->leave($__internal_dceaf911aa2f26b41ffd5a1dd542c29b6d59d91537be402301aa1a29436a595a_prof);

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
