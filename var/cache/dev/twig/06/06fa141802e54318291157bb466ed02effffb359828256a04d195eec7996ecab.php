<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_182a96b6b5f1f7c57baf49a11d0c7cbea3cd8425e3cabe213f2be7c2b7a3382c extends Twig_Template
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
        $__internal_777267f79ae8b9aa220cd3ce79c74e026be4e756b868c3fd22c29207ccdf50ce = $this->env->getExtension("native_profiler");
        $__internal_777267f79ae8b9aa220cd3ce79c74e026be4e756b868c3fd22c29207ccdf50ce->enter($__internal_777267f79ae8b9aa220cd3ce79c74e026be4e756b868c3fd22c29207ccdf50ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777267f79ae8b9aa220cd3ce79c74e026be4e756b868c3fd22c29207ccdf50ce->leave($__internal_777267f79ae8b9aa220cd3ce79c74e026be4e756b868c3fd22c29207ccdf50ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_919e74d702a8df584484a24b43084f9de426758616637aabceaa6d9a4e2147cd = $this->env->getExtension("native_profiler");
        $__internal_919e74d702a8df584484a24b43084f9de426758616637aabceaa6d9a4e2147cd->enter($__internal_919e74d702a8df584484a24b43084f9de426758616637aabceaa6d9a4e2147cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_919e74d702a8df584484a24b43084f9de426758616637aabceaa6d9a4e2147cd->leave($__internal_919e74d702a8df584484a24b43084f9de426758616637aabceaa6d9a4e2147cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cf41fa6385d9fe7e4e2114bfaa1aac098cb485fca1c3585ca6f8309f260fe50 = $this->env->getExtension("native_profiler");
        $__internal_1cf41fa6385d9fe7e4e2114bfaa1aac098cb485fca1c3585ca6f8309f260fe50->enter($__internal_1cf41fa6385d9fe7e4e2114bfaa1aac098cb485fca1c3585ca6f8309f260fe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1cf41fa6385d9fe7e4e2114bfaa1aac098cb485fca1c3585ca6f8309f260fe50->leave($__internal_1cf41fa6385d9fe7e4e2114bfaa1aac098cb485fca1c3585ca6f8309f260fe50_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c323b1fc9aa8e770ddc7b35990056e40e7b457eed61ab48d3db274389cb84b72 = $this->env->getExtension("native_profiler");
        $__internal_c323b1fc9aa8e770ddc7b35990056e40e7b457eed61ab48d3db274389cb84b72->enter($__internal_c323b1fc9aa8e770ddc7b35990056e40e7b457eed61ab48d3db274389cb84b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c323b1fc9aa8e770ddc7b35990056e40e7b457eed61ab48d3db274389cb84b72->leave($__internal_c323b1fc9aa8e770ddc7b35990056e40e7b457eed61ab48d3db274389cb84b72_prof);

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
