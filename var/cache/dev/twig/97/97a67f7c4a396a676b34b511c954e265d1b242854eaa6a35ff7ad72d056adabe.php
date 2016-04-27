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
        $__internal_d18e8bf39353164852e8921c3f761cf054a167dbc0e57e9619772f6c85e71b78 = $this->env->getExtension("native_profiler");
        $__internal_d18e8bf39353164852e8921c3f761cf054a167dbc0e57e9619772f6c85e71b78->enter($__internal_d18e8bf39353164852e8921c3f761cf054a167dbc0e57e9619772f6c85e71b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d18e8bf39353164852e8921c3f761cf054a167dbc0e57e9619772f6c85e71b78->leave($__internal_d18e8bf39353164852e8921c3f761cf054a167dbc0e57e9619772f6c85e71b78_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb50f1de8a3a438a282905cb7222eba34197b14a363f63e751fdd89f2ef946b9 = $this->env->getExtension("native_profiler");
        $__internal_eb50f1de8a3a438a282905cb7222eba34197b14a363f63e751fdd89f2ef946b9->enter($__internal_eb50f1de8a3a438a282905cb7222eba34197b14a363f63e751fdd89f2ef946b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb50f1de8a3a438a282905cb7222eba34197b14a363f63e751fdd89f2ef946b9->leave($__internal_eb50f1de8a3a438a282905cb7222eba34197b14a363f63e751fdd89f2ef946b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ca126941b7feb9f3d147a8f587b07176549008fdfbc770eb3bf10f3f913df39 = $this->env->getExtension("native_profiler");
        $__internal_7ca126941b7feb9f3d147a8f587b07176549008fdfbc770eb3bf10f3f913df39->enter($__internal_7ca126941b7feb9f3d147a8f587b07176549008fdfbc770eb3bf10f3f913df39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ca126941b7feb9f3d147a8f587b07176549008fdfbc770eb3bf10f3f913df39->leave($__internal_7ca126941b7feb9f3d147a8f587b07176549008fdfbc770eb3bf10f3f913df39_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51bc5f5170668a98b4e7f8e635041aeeed02810c1c94faed61eab931cc364f60 = $this->env->getExtension("native_profiler");
        $__internal_51bc5f5170668a98b4e7f8e635041aeeed02810c1c94faed61eab931cc364f60->enter($__internal_51bc5f5170668a98b4e7f8e635041aeeed02810c1c94faed61eab931cc364f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51bc5f5170668a98b4e7f8e635041aeeed02810c1c94faed61eab931cc364f60->leave($__internal_51bc5f5170668a98b4e7f8e635041aeeed02810c1c94faed61eab931cc364f60_prof);

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
