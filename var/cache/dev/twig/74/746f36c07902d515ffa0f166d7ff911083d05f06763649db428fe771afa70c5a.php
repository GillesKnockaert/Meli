<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_64ca93a01af3392184073ad3d7b0b9ab761e96db72cbd2dfeb93be25c5cdd2f8 extends Twig_Template
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
        $__internal_43df7f878590cb672fd4685cabb534c16cfae33c91ecc853d7a67eaf9d3c6f27 = $this->env->getExtension("native_profiler");
        $__internal_43df7f878590cb672fd4685cabb534c16cfae33c91ecc853d7a67eaf9d3c6f27->enter($__internal_43df7f878590cb672fd4685cabb534c16cfae33c91ecc853d7a67eaf9d3c6f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_43df7f878590cb672fd4685cabb534c16cfae33c91ecc853d7a67eaf9d3c6f27->leave($__internal_43df7f878590cb672fd4685cabb534c16cfae33c91ecc853d7a67eaf9d3c6f27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
