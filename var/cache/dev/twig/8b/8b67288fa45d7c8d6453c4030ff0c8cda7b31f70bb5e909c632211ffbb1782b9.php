<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_65bdf5d060597c34a30c1251b745b683e2793ed5dc0d81c002c9dbf5b96e8310 extends Twig_Template
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
        $__internal_490c83474f050a25638ad504103472686c502378cbe9d4aa123388a1f62fc862 = $this->env->getExtension("native_profiler");
        $__internal_490c83474f050a25638ad504103472686c502378cbe9d4aa123388a1f62fc862->enter($__internal_490c83474f050a25638ad504103472686c502378cbe9d4aa123388a1f62fc862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_490c83474f050a25638ad504103472686c502378cbe9d4aa123388a1f62fc862->leave($__internal_490c83474f050a25638ad504103472686c502378cbe9d4aa123388a1f62fc862_prof);

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
