<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_98093752b7bbd86a1f23421319742275e2efb72a0f18e2c94124154292f81ecc extends Twig_Template
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
        $__internal_27e8f072a580c73bbe7119d24241aac31afbc4b3d53ba504845e1f349fed6ec6 = $this->env->getExtension("native_profiler");
        $__internal_27e8f072a580c73bbe7119d24241aac31afbc4b3d53ba504845e1f349fed6ec6->enter($__internal_27e8f072a580c73bbe7119d24241aac31afbc4b3d53ba504845e1f349fed6ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_27e8f072a580c73bbe7119d24241aac31afbc4b3d53ba504845e1f349fed6ec6->leave($__internal_27e8f072a580c73bbe7119d24241aac31afbc4b3d53ba504845e1f349fed6ec6_prof);

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
