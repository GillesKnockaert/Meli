<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6d6cd6c7de3b19f8262846f7f55a8430ddf45b2a61fb396064ab2ba522cd724b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_534f1dd42482b189068dafa610aea23ffedb9570615e232adc3ed92251ca8613 = $this->env->getExtension("native_profiler");
        $__internal_534f1dd42482b189068dafa610aea23ffedb9570615e232adc3ed92251ca8613->enter($__internal_534f1dd42482b189068dafa610aea23ffedb9570615e232adc3ed92251ca8613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_534f1dd42482b189068dafa610aea23ffedb9570615e232adc3ed92251ca8613->leave($__internal_534f1dd42482b189068dafa610aea23ffedb9570615e232adc3ed92251ca8613_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2366de8bdcdeedfea34ec746f4b0ea62093bddbdf38837a84fd011bb9a8c1677 = $this->env->getExtension("native_profiler");
        $__internal_2366de8bdcdeedfea34ec746f4b0ea62093bddbdf38837a84fd011bb9a8c1677->enter($__internal_2366de8bdcdeedfea34ec746f4b0ea62093bddbdf38837a84fd011bb9a8c1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2366de8bdcdeedfea34ec746f4b0ea62093bddbdf38837a84fd011bb9a8c1677->leave($__internal_2366de8bdcdeedfea34ec746f4b0ea62093bddbdf38837a84fd011bb9a8c1677_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75e68bf5ab0a2c2363b9cf82fbeb8318acb802ed98fb690122a443b8fe8f1bd3 = $this->env->getExtension("native_profiler");
        $__internal_75e68bf5ab0a2c2363b9cf82fbeb8318acb802ed98fb690122a443b8fe8f1bd3->enter($__internal_75e68bf5ab0a2c2363b9cf82fbeb8318acb802ed98fb690122a443b8fe8f1bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75e68bf5ab0a2c2363b9cf82fbeb8318acb802ed98fb690122a443b8fe8f1bd3->leave($__internal_75e68bf5ab0a2c2363b9cf82fbeb8318acb802ed98fb690122a443b8fe8f1bd3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe48302500dc71db957d9cd59884a898074004cf63fe5dbe149eb86ddfcfe47 = $this->env->getExtension("native_profiler");
        $__internal_fbe48302500dc71db957d9cd59884a898074004cf63fe5dbe149eb86ddfcfe47->enter($__internal_fbe48302500dc71db957d9cd59884a898074004cf63fe5dbe149eb86ddfcfe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fbe48302500dc71db957d9cd59884a898074004cf63fe5dbe149eb86ddfcfe47->leave($__internal_fbe48302500dc71db957d9cd59884a898074004cf63fe5dbe149eb86ddfcfe47_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
