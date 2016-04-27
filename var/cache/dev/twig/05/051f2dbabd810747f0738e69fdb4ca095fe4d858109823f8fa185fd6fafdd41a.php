<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_27e35bd921f8cd3a8a1e3b32553f08cf0ee7c81b2de6091ae33ab812da463318 extends Twig_Template
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
        $__internal_1e5d7bc5543a1dbf8ccb474e441d39761aabc68ca10750d9a25e6b7260ed64bc = $this->env->getExtension("native_profiler");
        $__internal_1e5d7bc5543a1dbf8ccb474e441d39761aabc68ca10750d9a25e6b7260ed64bc->enter($__internal_1e5d7bc5543a1dbf8ccb474e441d39761aabc68ca10750d9a25e6b7260ed64bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5d7bc5543a1dbf8ccb474e441d39761aabc68ca10750d9a25e6b7260ed64bc->leave($__internal_1e5d7bc5543a1dbf8ccb474e441d39761aabc68ca10750d9a25e6b7260ed64bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07882dfa1be497214cf744555b161b65184b8c93fa2885b3dd71a6cdf76df658 = $this->env->getExtension("native_profiler");
        $__internal_07882dfa1be497214cf744555b161b65184b8c93fa2885b3dd71a6cdf76df658->enter($__internal_07882dfa1be497214cf744555b161b65184b8c93fa2885b3dd71a6cdf76df658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_07882dfa1be497214cf744555b161b65184b8c93fa2885b3dd71a6cdf76df658->leave($__internal_07882dfa1be497214cf744555b161b65184b8c93fa2885b3dd71a6cdf76df658_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04a518321ee3165b294cbd5d4e45dca4c46e4ce37ea614c854afbba490e3a602 = $this->env->getExtension("native_profiler");
        $__internal_04a518321ee3165b294cbd5d4e45dca4c46e4ce37ea614c854afbba490e3a602->enter($__internal_04a518321ee3165b294cbd5d4e45dca4c46e4ce37ea614c854afbba490e3a602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04a518321ee3165b294cbd5d4e45dca4c46e4ce37ea614c854afbba490e3a602->leave($__internal_04a518321ee3165b294cbd5d4e45dca4c46e4ce37ea614c854afbba490e3a602_prof);

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
