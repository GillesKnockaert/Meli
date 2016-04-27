<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3bb57376beaba8bfb22c418f8f80015c59c509eda73b54bd190efe5b47f849d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ad66be971f1202dc00a02183702d3ed679a6ff5e47461d938297c63bc51857c7 = $this->env->getExtension("native_profiler");
        $__internal_ad66be971f1202dc00a02183702d3ed679a6ff5e47461d938297c63bc51857c7->enter($__internal_ad66be971f1202dc00a02183702d3ed679a6ff5e47461d938297c63bc51857c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad66be971f1202dc00a02183702d3ed679a6ff5e47461d938297c63bc51857c7->leave($__internal_ad66be971f1202dc00a02183702d3ed679a6ff5e47461d938297c63bc51857c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93ef9a95e55f1a71b2f0ede7cf0e7522dbe43832f7aa226c55d593f415dd3a94 = $this->env->getExtension("native_profiler");
        $__internal_93ef9a95e55f1a71b2f0ede7cf0e7522dbe43832f7aa226c55d593f415dd3a94->enter($__internal_93ef9a95e55f1a71b2f0ede7cf0e7522dbe43832f7aa226c55d593f415dd3a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_93ef9a95e55f1a71b2f0ede7cf0e7522dbe43832f7aa226c55d593f415dd3a94->leave($__internal_93ef9a95e55f1a71b2f0ede7cf0e7522dbe43832f7aa226c55d593f415dd3a94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a36408758d931ca6b93e974a77263d3a98f8dbe83faafa5a20d154cb111192d = $this->env->getExtension("native_profiler");
        $__internal_5a36408758d931ca6b93e974a77263d3a98f8dbe83faafa5a20d154cb111192d->enter($__internal_5a36408758d931ca6b93e974a77263d3a98f8dbe83faafa5a20d154cb111192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a36408758d931ca6b93e974a77263d3a98f8dbe83faafa5a20d154cb111192d->leave($__internal_5a36408758d931ca6b93e974a77263d3a98f8dbe83faafa5a20d154cb111192d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cf45d49104232d7561b84903ff26b5f1c02ff191cdbca355941d58e2384b02d = $this->env->getExtension("native_profiler");
        $__internal_4cf45d49104232d7561b84903ff26b5f1c02ff191cdbca355941d58e2384b02d->enter($__internal_4cf45d49104232d7561b84903ff26b5f1c02ff191cdbca355941d58e2384b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4cf45d49104232d7561b84903ff26b5f1c02ff191cdbca355941d58e2384b02d->leave($__internal_4cf45d49104232d7561b84903ff26b5f1c02ff191cdbca355941d58e2384b02d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
