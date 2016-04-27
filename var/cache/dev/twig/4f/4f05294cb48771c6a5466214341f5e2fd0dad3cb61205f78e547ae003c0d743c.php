<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0f761fd16e3dfa594e5842a456c4932b242de3cac3e57773775ad6fd9838ac0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_b44bd2bca84f7cb393b1053b00f739afbc918c61d7171a5a376189ba7d30987c = $this->env->getExtension("native_profiler");
        $__internal_b44bd2bca84f7cb393b1053b00f739afbc918c61d7171a5a376189ba7d30987c->enter($__internal_b44bd2bca84f7cb393b1053b00f739afbc918c61d7171a5a376189ba7d30987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44bd2bca84f7cb393b1053b00f739afbc918c61d7171a5a376189ba7d30987c->leave($__internal_b44bd2bca84f7cb393b1053b00f739afbc918c61d7171a5a376189ba7d30987c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bc9dcf01a013a71bf8c549c693028b4772a59ba85124ca5ca5dcc9fb0caae4b = $this->env->getExtension("native_profiler");
        $__internal_0bc9dcf01a013a71bf8c549c693028b4772a59ba85124ca5ca5dcc9fb0caae4b->enter($__internal_0bc9dcf01a013a71bf8c549c693028b4772a59ba85124ca5ca5dcc9fb0caae4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0bc9dcf01a013a71bf8c549c693028b4772a59ba85124ca5ca5dcc9fb0caae4b->leave($__internal_0bc9dcf01a013a71bf8c549c693028b4772a59ba85124ca5ca5dcc9fb0caae4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_49cf7124832140f7f67f441c0e8ebf8ade932a39aea4718cb5d0cf2dcb0a7c86 = $this->env->getExtension("native_profiler");
        $__internal_49cf7124832140f7f67f441c0e8ebf8ade932a39aea4718cb5d0cf2dcb0a7c86->enter($__internal_49cf7124832140f7f67f441c0e8ebf8ade932a39aea4718cb5d0cf2dcb0a7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49cf7124832140f7f67f441c0e8ebf8ade932a39aea4718cb5d0cf2dcb0a7c86->leave($__internal_49cf7124832140f7f67f441c0e8ebf8ade932a39aea4718cb5d0cf2dcb0a7c86_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
