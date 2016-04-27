<?php

/* BazookasBundle:Default:index.html.twig */
class __TwigTemplate_f306ff161a0139483e4c9b8a84debb532c07f59902cee0fb49d914870e51a3af extends Twig_Template
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
        $__internal_8119838bf3041438bf75402b32bb272a55819bea833c72076822fd3e89696773 = $this->env->getExtension("native_profiler");
        $__internal_8119838bf3041438bf75402b32bb272a55819bea833c72076822fd3e89696773->enter($__internal_8119838bf3041438bf75402b32bb272a55819bea833c72076822fd3e89696773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazookasBundle:Default:index.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_8119838bf3041438bf75402b32bb272a55819bea833c72076822fd3e89696773->leave($__internal_8119838bf3041438bf75402b32bb272a55819bea833c72076822fd3e89696773_prof);

    }

    public function getTemplateName()
    {
        return "BazookasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
