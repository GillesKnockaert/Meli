<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b70643e895ea9f602f8ec531f3429df8d73d554b927ca4ba5dc79270562eb319 extends Twig_Template
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
        $__internal_6067d852c6dc8006bea3e39e295e0faaf896ee7842181ab46f0217b006cb4859 = $this->env->getExtension("native_profiler");
        $__internal_6067d852c6dc8006bea3e39e295e0faaf896ee7842181ab46f0217b006cb4859->enter($__internal_6067d852c6dc8006bea3e39e295e0faaf896ee7842181ab46f0217b006cb4859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6067d852c6dc8006bea3e39e295e0faaf896ee7842181ab46f0217b006cb4859->leave($__internal_6067d852c6dc8006bea3e39e295e0faaf896ee7842181ab46f0217b006cb4859_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8883d5df4d6bd80a689340449fc11d47ab70d7ccf4460a1c0ff137992ec8ba03 = $this->env->getExtension("native_profiler");
        $__internal_8883d5df4d6bd80a689340449fc11d47ab70d7ccf4460a1c0ff137992ec8ba03->enter($__internal_8883d5df4d6bd80a689340449fc11d47ab70d7ccf4460a1c0ff137992ec8ba03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8883d5df4d6bd80a689340449fc11d47ab70d7ccf4460a1c0ff137992ec8ba03->leave($__internal_8883d5df4d6bd80a689340449fc11d47ab70d7ccf4460a1c0ff137992ec8ba03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_483fad738c7b5460b7becbdff64582be196aacfd7d8854745e92d6d60b70c0af = $this->env->getExtension("native_profiler");
        $__internal_483fad738c7b5460b7becbdff64582be196aacfd7d8854745e92d6d60b70c0af->enter($__internal_483fad738c7b5460b7becbdff64582be196aacfd7d8854745e92d6d60b70c0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_483fad738c7b5460b7becbdff64582be196aacfd7d8854745e92d6d60b70c0af->leave($__internal_483fad738c7b5460b7becbdff64582be196aacfd7d8854745e92d6d60b70c0af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f69a17b3992fea226aefbe898714c92d83cd4ce4457e5ebb93985f1195ee1a7 = $this->env->getExtension("native_profiler");
        $__internal_2f69a17b3992fea226aefbe898714c92d83cd4ce4457e5ebb93985f1195ee1a7->enter($__internal_2f69a17b3992fea226aefbe898714c92d83cd4ce4457e5ebb93985f1195ee1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f69a17b3992fea226aefbe898714c92d83cd4ce4457e5ebb93985f1195ee1a7->leave($__internal_2f69a17b3992fea226aefbe898714c92d83cd4ce4457e5ebb93985f1195ee1a7_prof);

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
