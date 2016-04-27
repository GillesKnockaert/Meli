<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bfdf93916df6a9c09e4e918f7ee00cba61fcfc63e3a33e8972cd788316f1da48 extends Twig_Template
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
        $__internal_0f112cfb9d47aed5ea3ed264443fd9418b37ccccd58b341602b7608c87e1c876 = $this->env->getExtension("native_profiler");
        $__internal_0f112cfb9d47aed5ea3ed264443fd9418b37ccccd58b341602b7608c87e1c876->enter($__internal_0f112cfb9d47aed5ea3ed264443fd9418b37ccccd58b341602b7608c87e1c876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f112cfb9d47aed5ea3ed264443fd9418b37ccccd58b341602b7608c87e1c876->leave($__internal_0f112cfb9d47aed5ea3ed264443fd9418b37ccccd58b341602b7608c87e1c876_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf123f05b2ddbd8f203914b6aae365cf3374cf5e0675c8f0d6209a7a1c4648a4 = $this->env->getExtension("native_profiler");
        $__internal_bf123f05b2ddbd8f203914b6aae365cf3374cf5e0675c8f0d6209a7a1c4648a4->enter($__internal_bf123f05b2ddbd8f203914b6aae365cf3374cf5e0675c8f0d6209a7a1c4648a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bf123f05b2ddbd8f203914b6aae365cf3374cf5e0675c8f0d6209a7a1c4648a4->leave($__internal_bf123f05b2ddbd8f203914b6aae365cf3374cf5e0675c8f0d6209a7a1c4648a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32ba614a144c13232c37a66c256a67d43959a5bb68bc2665a7d52853a9d40336 = $this->env->getExtension("native_profiler");
        $__internal_32ba614a144c13232c37a66c256a67d43959a5bb68bc2665a7d52853a9d40336->enter($__internal_32ba614a144c13232c37a66c256a67d43959a5bb68bc2665a7d52853a9d40336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32ba614a144c13232c37a66c256a67d43959a5bb68bc2665a7d52853a9d40336->leave($__internal_32ba614a144c13232c37a66c256a67d43959a5bb68bc2665a7d52853a9d40336_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8cd1b37b088f4cbf937550f73fa373a97bcd014e26ec62812b3ce4cbc9ad44d = $this->env->getExtension("native_profiler");
        $__internal_a8cd1b37b088f4cbf937550f73fa373a97bcd014e26ec62812b3ce4cbc9ad44d->enter($__internal_a8cd1b37b088f4cbf937550f73fa373a97bcd014e26ec62812b3ce4cbc9ad44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a8cd1b37b088f4cbf937550f73fa373a97bcd014e26ec62812b3ce4cbc9ad44d->leave($__internal_a8cd1b37b088f4cbf937550f73fa373a97bcd014e26ec62812b3ce4cbc9ad44d_prof);

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
