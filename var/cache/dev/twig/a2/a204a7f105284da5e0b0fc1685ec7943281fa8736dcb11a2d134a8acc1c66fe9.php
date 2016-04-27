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
        $__internal_576a8f0843b7ac1e0345608e1791a4da43ef7708da75449a71aab398dcf4320e = $this->env->getExtension("native_profiler");
        $__internal_576a8f0843b7ac1e0345608e1791a4da43ef7708da75449a71aab398dcf4320e->enter($__internal_576a8f0843b7ac1e0345608e1791a4da43ef7708da75449a71aab398dcf4320e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576a8f0843b7ac1e0345608e1791a4da43ef7708da75449a71aab398dcf4320e->leave($__internal_576a8f0843b7ac1e0345608e1791a4da43ef7708da75449a71aab398dcf4320e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab9ffda92834a0c6d5dbaa96afba587b00243c7171da500326619954736dfd4a = $this->env->getExtension("native_profiler");
        $__internal_ab9ffda92834a0c6d5dbaa96afba587b00243c7171da500326619954736dfd4a->enter($__internal_ab9ffda92834a0c6d5dbaa96afba587b00243c7171da500326619954736dfd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab9ffda92834a0c6d5dbaa96afba587b00243c7171da500326619954736dfd4a->leave($__internal_ab9ffda92834a0c6d5dbaa96afba587b00243c7171da500326619954736dfd4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e96ff312ab3da9a9724a777381632c1d0df324c4a13a03d0fe20396388fecdba = $this->env->getExtension("native_profiler");
        $__internal_e96ff312ab3da9a9724a777381632c1d0df324c4a13a03d0fe20396388fecdba->enter($__internal_e96ff312ab3da9a9724a777381632c1d0df324c4a13a03d0fe20396388fecdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e96ff312ab3da9a9724a777381632c1d0df324c4a13a03d0fe20396388fecdba->leave($__internal_e96ff312ab3da9a9724a777381632c1d0df324c4a13a03d0fe20396388fecdba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15eced5e089a33b0311dece2353074ac5a8c45a283fed8a89537151f0aea785f = $this->env->getExtension("native_profiler");
        $__internal_15eced5e089a33b0311dece2353074ac5a8c45a283fed8a89537151f0aea785f->enter($__internal_15eced5e089a33b0311dece2353074ac5a8c45a283fed8a89537151f0aea785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15eced5e089a33b0311dece2353074ac5a8c45a283fed8a89537151f0aea785f->leave($__internal_15eced5e089a33b0311dece2353074ac5a8c45a283fed8a89537151f0aea785f_prof);

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
