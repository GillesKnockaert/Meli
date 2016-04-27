<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_54eaaa370d4fac997d999b1e2d852500ae96432f4f7b2155fb7af67a2e669f28 extends Twig_Template
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
        $__internal_79d7af4c1571a76f7694680cb2d672db6508d5d3824cf05c1a00cdeb12d2f972 = $this->env->getExtension("native_profiler");
        $__internal_79d7af4c1571a76f7694680cb2d672db6508d5d3824cf05c1a00cdeb12d2f972->enter($__internal_79d7af4c1571a76f7694680cb2d672db6508d5d3824cf05c1a00cdeb12d2f972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d7af4c1571a76f7694680cb2d672db6508d5d3824cf05c1a00cdeb12d2f972->leave($__internal_79d7af4c1571a76f7694680cb2d672db6508d5d3824cf05c1a00cdeb12d2f972_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7760ba279c66b376aa7e2af4d4701058c02344535b939f2a01fe0e30f4983b0 = $this->env->getExtension("native_profiler");
        $__internal_c7760ba279c66b376aa7e2af4d4701058c02344535b939f2a01fe0e30f4983b0->enter($__internal_c7760ba279c66b376aa7e2af4d4701058c02344535b939f2a01fe0e30f4983b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7760ba279c66b376aa7e2af4d4701058c02344535b939f2a01fe0e30f4983b0->leave($__internal_c7760ba279c66b376aa7e2af4d4701058c02344535b939f2a01fe0e30f4983b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb8decd854f53a135f0fcaf8182594586082abbfee5c82d3bc5d54605d4871b8 = $this->env->getExtension("native_profiler");
        $__internal_eb8decd854f53a135f0fcaf8182594586082abbfee5c82d3bc5d54605d4871b8->enter($__internal_eb8decd854f53a135f0fcaf8182594586082abbfee5c82d3bc5d54605d4871b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb8decd854f53a135f0fcaf8182594586082abbfee5c82d3bc5d54605d4871b8->leave($__internal_eb8decd854f53a135f0fcaf8182594586082abbfee5c82d3bc5d54605d4871b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95d5e668375586ab8d53610393dba8d81f1dec9f5bb0db25997d86a4bc0ef875 = $this->env->getExtension("native_profiler");
        $__internal_95d5e668375586ab8d53610393dba8d81f1dec9f5bb0db25997d86a4bc0ef875->enter($__internal_95d5e668375586ab8d53610393dba8d81f1dec9f5bb0db25997d86a4bc0ef875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_95d5e668375586ab8d53610393dba8d81f1dec9f5bb0db25997d86a4bc0ef875->leave($__internal_95d5e668375586ab8d53610393dba8d81f1dec9f5bb0db25997d86a4bc0ef875_prof);

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
