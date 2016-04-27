<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1622aa7a855b4451b5817735c4e562ee4654dd88f8a4b7132ba8ef2a5e881230 extends Twig_Template
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
        $__internal_73d1968ab8b9c3b862d957368e17364b183bb669d74264fbf5799a757c13fa06 = $this->env->getExtension("native_profiler");
        $__internal_73d1968ab8b9c3b862d957368e17364b183bb669d74264fbf5799a757c13fa06->enter($__internal_73d1968ab8b9c3b862d957368e17364b183bb669d74264fbf5799a757c13fa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d1968ab8b9c3b862d957368e17364b183bb669d74264fbf5799a757c13fa06->leave($__internal_73d1968ab8b9c3b862d957368e17364b183bb669d74264fbf5799a757c13fa06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45f6f9791d72bf39807e9bcbee563a70a7e598a39948fe5c99e53a4fdfb68278 = $this->env->getExtension("native_profiler");
        $__internal_45f6f9791d72bf39807e9bcbee563a70a7e598a39948fe5c99e53a4fdfb68278->enter($__internal_45f6f9791d72bf39807e9bcbee563a70a7e598a39948fe5c99e53a4fdfb68278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45f6f9791d72bf39807e9bcbee563a70a7e598a39948fe5c99e53a4fdfb68278->leave($__internal_45f6f9791d72bf39807e9bcbee563a70a7e598a39948fe5c99e53a4fdfb68278_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7f1513ed3616dd633be629915b66892f2d41a13b5d00b0b20a91e692e37fbd8 = $this->env->getExtension("native_profiler");
        $__internal_d7f1513ed3616dd633be629915b66892f2d41a13b5d00b0b20a91e692e37fbd8->enter($__internal_d7f1513ed3616dd633be629915b66892f2d41a13b5d00b0b20a91e692e37fbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7f1513ed3616dd633be629915b66892f2d41a13b5d00b0b20a91e692e37fbd8->leave($__internal_d7f1513ed3616dd633be629915b66892f2d41a13b5d00b0b20a91e692e37fbd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee6c3e4a0889f57c0e7c21cdf88adeb79bfc3cb7b994e2a373b14dc89c1e879b = $this->env->getExtension("native_profiler");
        $__internal_ee6c3e4a0889f57c0e7c21cdf88adeb79bfc3cb7b994e2a373b14dc89c1e879b->enter($__internal_ee6c3e4a0889f57c0e7c21cdf88adeb79bfc3cb7b994e2a373b14dc89c1e879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee6c3e4a0889f57c0e7c21cdf88adeb79bfc3cb7b994e2a373b14dc89c1e879b->leave($__internal_ee6c3e4a0889f57c0e7c21cdf88adeb79bfc3cb7b994e2a373b14dc89c1e879b_prof);

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
