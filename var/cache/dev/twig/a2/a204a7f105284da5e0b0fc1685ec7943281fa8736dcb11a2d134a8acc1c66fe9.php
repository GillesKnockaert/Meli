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
        $__internal_91f94c3b325ad0c35eee12b3d25db4bbc11b8fbc91a55a6dd48bea52eef84304 = $this->env->getExtension("native_profiler");
        $__internal_91f94c3b325ad0c35eee12b3d25db4bbc11b8fbc91a55a6dd48bea52eef84304->enter($__internal_91f94c3b325ad0c35eee12b3d25db4bbc11b8fbc91a55a6dd48bea52eef84304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f94c3b325ad0c35eee12b3d25db4bbc11b8fbc91a55a6dd48bea52eef84304->leave($__internal_91f94c3b325ad0c35eee12b3d25db4bbc11b8fbc91a55a6dd48bea52eef84304_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdf8bb09bdfdc449cbe70d3ba312f650c6f9020f70924da9cf27e5375dde97a7 = $this->env->getExtension("native_profiler");
        $__internal_fdf8bb09bdfdc449cbe70d3ba312f650c6f9020f70924da9cf27e5375dde97a7->enter($__internal_fdf8bb09bdfdc449cbe70d3ba312f650c6f9020f70924da9cf27e5375dde97a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fdf8bb09bdfdc449cbe70d3ba312f650c6f9020f70924da9cf27e5375dde97a7->leave($__internal_fdf8bb09bdfdc449cbe70d3ba312f650c6f9020f70924da9cf27e5375dde97a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_068a40196d87d2ac07f1a75e5163458d5c415ad3b6fc59950faf56314e3f0f3a = $this->env->getExtension("native_profiler");
        $__internal_068a40196d87d2ac07f1a75e5163458d5c415ad3b6fc59950faf56314e3f0f3a->enter($__internal_068a40196d87d2ac07f1a75e5163458d5c415ad3b6fc59950faf56314e3f0f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_068a40196d87d2ac07f1a75e5163458d5c415ad3b6fc59950faf56314e3f0f3a->leave($__internal_068a40196d87d2ac07f1a75e5163458d5c415ad3b6fc59950faf56314e3f0f3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce1d93ca7eb7c1d52ca37e1ee05ffb6c68dd4b11b6b461b1364a54e6e1cbc32c = $this->env->getExtension("native_profiler");
        $__internal_ce1d93ca7eb7c1d52ca37e1ee05ffb6c68dd4b11b6b461b1364a54e6e1cbc32c->enter($__internal_ce1d93ca7eb7c1d52ca37e1ee05ffb6c68dd4b11b6b461b1364a54e6e1cbc32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ce1d93ca7eb7c1d52ca37e1ee05ffb6c68dd4b11b6b461b1364a54e6e1cbc32c->leave($__internal_ce1d93ca7eb7c1d52ca37e1ee05ffb6c68dd4b11b6b461b1364a54e6e1cbc32c_prof);

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
