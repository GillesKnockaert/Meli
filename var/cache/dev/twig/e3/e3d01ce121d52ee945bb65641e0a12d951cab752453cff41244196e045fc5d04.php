<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_521dcdd579c26f8b0fa011ec69a362bbe9983bb47db92b15daeea5baf62a2817 extends Twig_Template
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
        $__internal_136efa42f8f17b19d0979a473e963d800ba47f48485455f6f71d429865a36be3 = $this->env->getExtension("native_profiler");
        $__internal_136efa42f8f17b19d0979a473e963d800ba47f48485455f6f71d429865a36be3->enter($__internal_136efa42f8f17b19d0979a473e963d800ba47f48485455f6f71d429865a36be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_136efa42f8f17b19d0979a473e963d800ba47f48485455f6f71d429865a36be3->leave($__internal_136efa42f8f17b19d0979a473e963d800ba47f48485455f6f71d429865a36be3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
