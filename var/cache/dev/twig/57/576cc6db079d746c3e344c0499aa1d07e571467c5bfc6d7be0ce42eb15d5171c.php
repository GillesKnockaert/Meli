<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9e48fd3c2b92dda56cbe767a5591beb8784fb53cd63206200e3f08b913c9498d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_313263df36b17231ce8d9235e04b693bc5fd1292da19fe167514f2df204e461b = $this->env->getExtension("native_profiler");
        $__internal_313263df36b17231ce8d9235e04b693bc5fd1292da19fe167514f2df204e461b->enter($__internal_313263df36b17231ce8d9235e04b693bc5fd1292da19fe167514f2df204e461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313263df36b17231ce8d9235e04b693bc5fd1292da19fe167514f2df204e461b->leave($__internal_313263df36b17231ce8d9235e04b693bc5fd1292da19fe167514f2df204e461b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c996be92d05c497d4584576606d540b01d3fb1a64ecc61e28a4f4c15a2f17443 = $this->env->getExtension("native_profiler");
        $__internal_c996be92d05c497d4584576606d540b01d3fb1a64ecc61e28a4f4c15a2f17443->enter($__internal_c996be92d05c497d4584576606d540b01d3fb1a64ecc61e28a4f4c15a2f17443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c996be92d05c497d4584576606d540b01d3fb1a64ecc61e28a4f4c15a2f17443->leave($__internal_c996be92d05c497d4584576606d540b01d3fb1a64ecc61e28a4f4c15a2f17443_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09d5445f9441cfc15f9819afccd4db9b5d0a6c703892e2faa909e7edce1d12b0 = $this->env->getExtension("native_profiler");
        $__internal_09d5445f9441cfc15f9819afccd4db9b5d0a6c703892e2faa909e7edce1d12b0->enter($__internal_09d5445f9441cfc15f9819afccd4db9b5d0a6c703892e2faa909e7edce1d12b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_09d5445f9441cfc15f9819afccd4db9b5d0a6c703892e2faa909e7edce1d12b0->leave($__internal_09d5445f9441cfc15f9819afccd4db9b5d0a6c703892e2faa909e7edce1d12b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6595435319a5012ca69efbde76043d5be7070c63b7e70bc065564dec7e240e4 = $this->env->getExtension("native_profiler");
        $__internal_e6595435319a5012ca69efbde76043d5be7070c63b7e70bc065564dec7e240e4->enter($__internal_e6595435319a5012ca69efbde76043d5be7070c63b7e70bc065564dec7e240e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e6595435319a5012ca69efbde76043d5be7070c63b7e70bc065564dec7e240e4->leave($__internal_e6595435319a5012ca69efbde76043d5be7070c63b7e70bc065564dec7e240e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
