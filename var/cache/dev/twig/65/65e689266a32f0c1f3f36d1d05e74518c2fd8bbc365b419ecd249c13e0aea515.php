<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3b9a6e1374fc32f58f0b0cb063f418b0d3b7d4b3e438fa63e1c2bfd7a8513cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d2e55ca72e721f273306dee6dd9fbb1e22a97a741c8e616abe3b0184e8843a6c = $this->env->getExtension("native_profiler");
        $__internal_d2e55ca72e721f273306dee6dd9fbb1e22a97a741c8e616abe3b0184e8843a6c->enter($__internal_d2e55ca72e721f273306dee6dd9fbb1e22a97a741c8e616abe3b0184e8843a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e55ca72e721f273306dee6dd9fbb1e22a97a741c8e616abe3b0184e8843a6c->leave($__internal_d2e55ca72e721f273306dee6dd9fbb1e22a97a741c8e616abe3b0184e8843a6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_398c43c2d7ca6998b1510b1dc3c0ad236f7aca84533040f45e1770663b5f26f0 = $this->env->getExtension("native_profiler");
        $__internal_398c43c2d7ca6998b1510b1dc3c0ad236f7aca84533040f45e1770663b5f26f0->enter($__internal_398c43c2d7ca6998b1510b1dc3c0ad236f7aca84533040f45e1770663b5f26f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_398c43c2d7ca6998b1510b1dc3c0ad236f7aca84533040f45e1770663b5f26f0->leave($__internal_398c43c2d7ca6998b1510b1dc3c0ad236f7aca84533040f45e1770663b5f26f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_79198fae1baad3155d78ba148bdf39ac2520cced469b7a78b69a40ff9162dd94 = $this->env->getExtension("native_profiler");
        $__internal_79198fae1baad3155d78ba148bdf39ac2520cced469b7a78b69a40ff9162dd94->enter($__internal_79198fae1baad3155d78ba148bdf39ac2520cced469b7a78b69a40ff9162dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_79198fae1baad3155d78ba148bdf39ac2520cced469b7a78b69a40ff9162dd94->leave($__internal_79198fae1baad3155d78ba148bdf39ac2520cced469b7a78b69a40ff9162dd94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
