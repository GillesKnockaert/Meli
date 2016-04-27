<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3a355f0ff1c53032a35cd0abbd21f31e504bf431b6f34a1275719cd73baf1312 extends Twig_Template
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
        $__internal_f5b7beed1f2a4c9c3f569a331bdee2eea48091ab435a7079fb19cee9b000163b = $this->env->getExtension("native_profiler");
        $__internal_f5b7beed1f2a4c9c3f569a331bdee2eea48091ab435a7079fb19cee9b000163b->enter($__internal_f5b7beed1f2a4c9c3f569a331bdee2eea48091ab435a7079fb19cee9b000163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f5b7beed1f2a4c9c3f569a331bdee2eea48091ab435a7079fb19cee9b000163b->leave($__internal_f5b7beed1f2a4c9c3f569a331bdee2eea48091ab435a7079fb19cee9b000163b_prof);

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
