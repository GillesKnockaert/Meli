<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6f79f48ed62c9df58384476edd313a49c1e0993940592c1056f8058838c59a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_105ac05e1878dbbb32cc7562085205bac0543caa8fa089d388ef3e66cbfe9215 = $this->env->getExtension("native_profiler");
        $__internal_105ac05e1878dbbb32cc7562085205bac0543caa8fa089d388ef3e66cbfe9215->enter($__internal_105ac05e1878dbbb32cc7562085205bac0543caa8fa089d388ef3e66cbfe9215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105ac05e1878dbbb32cc7562085205bac0543caa8fa089d388ef3e66cbfe9215->leave($__internal_105ac05e1878dbbb32cc7562085205bac0543caa8fa089d388ef3e66cbfe9215_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa19a430433653bd6e2cd5cc6dc73c1b3dc8a75c4d8cd50f7a65373fa0dabca9 = $this->env->getExtension("native_profiler");
        $__internal_fa19a430433653bd6e2cd5cc6dc73c1b3dc8a75c4d8cd50f7a65373fa0dabca9->enter($__internal_fa19a430433653bd6e2cd5cc6dc73c1b3dc8a75c4d8cd50f7a65373fa0dabca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa19a430433653bd6e2cd5cc6dc73c1b3dc8a75c4d8cd50f7a65373fa0dabca9->leave($__internal_fa19a430433653bd6e2cd5cc6dc73c1b3dc8a75c4d8cd50f7a65373fa0dabca9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb1630e77174113aac69386bee83bdc0010cfca005fdd118b7671f5427e8ba20 = $this->env->getExtension("native_profiler");
        $__internal_cb1630e77174113aac69386bee83bdc0010cfca005fdd118b7671f5427e8ba20->enter($__internal_cb1630e77174113aac69386bee83bdc0010cfca005fdd118b7671f5427e8ba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb1630e77174113aac69386bee83bdc0010cfca005fdd118b7671f5427e8ba20->leave($__internal_cb1630e77174113aac69386bee83bdc0010cfca005fdd118b7671f5427e8ba20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_696bfe9f7eaff371df12b7d8a4fe0a20b21915c4a9c197880afd72980962970a = $this->env->getExtension("native_profiler");
        $__internal_696bfe9f7eaff371df12b7d8a4fe0a20b21915c4a9c197880afd72980962970a->enter($__internal_696bfe9f7eaff371df12b7d8a4fe0a20b21915c4a9c197880afd72980962970a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_696bfe9f7eaff371df12b7d8a4fe0a20b21915c4a9c197880afd72980962970a->leave($__internal_696bfe9f7eaff371df12b7d8a4fe0a20b21915c4a9c197880afd72980962970a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
