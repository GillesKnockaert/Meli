<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_84491df93428641d60681811f95768657415e9106fe02c87074c8b8fa040c6f4 extends Twig_Template
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
        $__internal_c914e8230bfd0af01e5c4805b4c65e5cc7184b7f11de93e9c38e699ba227d45e = $this->env->getExtension("native_profiler");
        $__internal_c914e8230bfd0af01e5c4805b4c65e5cc7184b7f11de93e9c38e699ba227d45e->enter($__internal_c914e8230bfd0af01e5c4805b4c65e5cc7184b7f11de93e9c38e699ba227d45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c914e8230bfd0af01e5c4805b4c65e5cc7184b7f11de93e9c38e699ba227d45e->leave($__internal_c914e8230bfd0af01e5c4805b4c65e5cc7184b7f11de93e9c38e699ba227d45e_prof);

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
