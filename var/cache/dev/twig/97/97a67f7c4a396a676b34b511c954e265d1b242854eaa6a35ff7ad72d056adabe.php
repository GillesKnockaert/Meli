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
        $__internal_4e75994b2ee4daebc305105e0041466e3da67bc329e0aff667d6dea8f855a03c = $this->env->getExtension("native_profiler");
        $__internal_4e75994b2ee4daebc305105e0041466e3da67bc329e0aff667d6dea8f855a03c->enter($__internal_4e75994b2ee4daebc305105e0041466e3da67bc329e0aff667d6dea8f855a03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e75994b2ee4daebc305105e0041466e3da67bc329e0aff667d6dea8f855a03c->leave($__internal_4e75994b2ee4daebc305105e0041466e3da67bc329e0aff667d6dea8f855a03c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_940782fe9c9ff0d0b10c7dfa839abfc21a06efab65cf23fe59662fa1e67b7e9b = $this->env->getExtension("native_profiler");
        $__internal_940782fe9c9ff0d0b10c7dfa839abfc21a06efab65cf23fe59662fa1e67b7e9b->enter($__internal_940782fe9c9ff0d0b10c7dfa839abfc21a06efab65cf23fe59662fa1e67b7e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_940782fe9c9ff0d0b10c7dfa839abfc21a06efab65cf23fe59662fa1e67b7e9b->leave($__internal_940782fe9c9ff0d0b10c7dfa839abfc21a06efab65cf23fe59662fa1e67b7e9b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f83f5a4dcbe6afc127c06aed082b1d24f14d7d0d47f8f60c391281af5cc497c = $this->env->getExtension("native_profiler");
        $__internal_9f83f5a4dcbe6afc127c06aed082b1d24f14d7d0d47f8f60c391281af5cc497c->enter($__internal_9f83f5a4dcbe6afc127c06aed082b1d24f14d7d0d47f8f60c391281af5cc497c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f83f5a4dcbe6afc127c06aed082b1d24f14d7d0d47f8f60c391281af5cc497c->leave($__internal_9f83f5a4dcbe6afc127c06aed082b1d24f14d7d0d47f8f60c391281af5cc497c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c88a417c8937c119ccb09bb9a74e5d405d50640e6ec1e15a8113ceb726806e0 = $this->env->getExtension("native_profiler");
        $__internal_2c88a417c8937c119ccb09bb9a74e5d405d50640e6ec1e15a8113ceb726806e0->enter($__internal_2c88a417c8937c119ccb09bb9a74e5d405d50640e6ec1e15a8113ceb726806e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c88a417c8937c119ccb09bb9a74e5d405d50640e6ec1e15a8113ceb726806e0->leave($__internal_2c88a417c8937c119ccb09bb9a74e5d405d50640e6ec1e15a8113ceb726806e0_prof);

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
