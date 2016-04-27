<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eda07d113ba321e2ae3229b3c988b94925acb612352c714c6c0a615a2af27557 extends Twig_Template
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
        $__internal_0a4f89c5d42cafd2c0627274b15d357ec2ac68e236f8497292693a30f0de8c13 = $this->env->getExtension("native_profiler");
        $__internal_0a4f89c5d42cafd2c0627274b15d357ec2ac68e236f8497292693a30f0de8c13->enter($__internal_0a4f89c5d42cafd2c0627274b15d357ec2ac68e236f8497292693a30f0de8c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0a4f89c5d42cafd2c0627274b15d357ec2ac68e236f8497292693a30f0de8c13->leave($__internal_0a4f89c5d42cafd2c0627274b15d357ec2ac68e236f8497292693a30f0de8c13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
