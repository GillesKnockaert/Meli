<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f27a40b25cd6fad3ed90bcd7917deacb4a57b3a04d89558dbc2801d3e9feb939 extends Twig_Template
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
        $__internal_9be168b0807541ba1e620ba6836965a6e79158014e8eeec41a3bd0a4c6cff63f = $this->env->getExtension("native_profiler");
        $__internal_9be168b0807541ba1e620ba6836965a6e79158014e8eeec41a3bd0a4c6cff63f->enter($__internal_9be168b0807541ba1e620ba6836965a6e79158014e8eeec41a3bd0a4c6cff63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be168b0807541ba1e620ba6836965a6e79158014e8eeec41a3bd0a4c6cff63f->leave($__internal_9be168b0807541ba1e620ba6836965a6e79158014e8eeec41a3bd0a4c6cff63f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_203d4a0e25344a4cc8a0813cb171daea78ae52cc192ceb1bd6fb125cd5020146 = $this->env->getExtension("native_profiler");
        $__internal_203d4a0e25344a4cc8a0813cb171daea78ae52cc192ceb1bd6fb125cd5020146->enter($__internal_203d4a0e25344a4cc8a0813cb171daea78ae52cc192ceb1bd6fb125cd5020146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_203d4a0e25344a4cc8a0813cb171daea78ae52cc192ceb1bd6fb125cd5020146->leave($__internal_203d4a0e25344a4cc8a0813cb171daea78ae52cc192ceb1bd6fb125cd5020146_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efa4af80c6367c7ee0e834e7247bb3ac4d33965723a9d1b272e1c520307d4ed3 = $this->env->getExtension("native_profiler");
        $__internal_efa4af80c6367c7ee0e834e7247bb3ac4d33965723a9d1b272e1c520307d4ed3->enter($__internal_efa4af80c6367c7ee0e834e7247bb3ac4d33965723a9d1b272e1c520307d4ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_efa4af80c6367c7ee0e834e7247bb3ac4d33965723a9d1b272e1c520307d4ed3->leave($__internal_efa4af80c6367c7ee0e834e7247bb3ac4d33965723a9d1b272e1c520307d4ed3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28c32a4e92c9b8cda79e8c9d72b745e6e1ba0449a4d9026464f04514ad9304a2 = $this->env->getExtension("native_profiler");
        $__internal_28c32a4e92c9b8cda79e8c9d72b745e6e1ba0449a4d9026464f04514ad9304a2->enter($__internal_28c32a4e92c9b8cda79e8c9d72b745e6e1ba0449a4d9026464f04514ad9304a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28c32a4e92c9b8cda79e8c9d72b745e6e1ba0449a4d9026464f04514ad9304a2->leave($__internal_28c32a4e92c9b8cda79e8c9d72b745e6e1ba0449a4d9026464f04514ad9304a2_prof);

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
