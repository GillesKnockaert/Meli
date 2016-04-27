<?php

/* @Bazookas/Default/form.html.twig */
class __TwigTemplate_461f24d4fbe11534ea5e1b496187079618dac317a6d84d58321bb330611f6f11 extends Twig_Template
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
        $__internal_59cdf0db1e2c48835a44266458caaf2b8016ea182a9f3616b21f184fedab452b = $this->env->getExtension("native_profiler");
        $__internal_59cdf0db1e2c48835a44266458caaf2b8016ea182a9f3616b21f184fedab452b->enter($__internal_59cdf0db1e2c48835a44266458caaf2b8016ea182a9f3616b21f184fedab452b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Bazookas/Default/form.html.twig"));

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
        echo "
";
        
        $__internal_59cdf0db1e2c48835a44266458caaf2b8016ea182a9f3616b21f184fedab452b->leave($__internal_59cdf0db1e2c48835a44266458caaf2b8016ea182a9f3616b21f184fedab452b_prof);

    }

    public function getTemplateName()
    {
        return "@Bazookas/Default/form.html.twig";
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
/* */
