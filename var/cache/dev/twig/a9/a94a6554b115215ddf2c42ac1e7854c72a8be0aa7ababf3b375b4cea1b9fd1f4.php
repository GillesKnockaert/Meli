<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a8fe832e6c9740d676937416da58750c81dbf4cbdabaaa04c87db535d86e3334 extends Twig_Template
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
        $__internal_332da75937674187769555811048feed1a67fab247d1d641961e2650a012b654 = $this->env->getExtension("native_profiler");
        $__internal_332da75937674187769555811048feed1a67fab247d1d641961e2650a012b654->enter($__internal_332da75937674187769555811048feed1a67fab247d1d641961e2650a012b654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332da75937674187769555811048feed1a67fab247d1d641961e2650a012b654->leave($__internal_332da75937674187769555811048feed1a67fab247d1d641961e2650a012b654_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a631d87bbad0ac410ddf0812f1f4cb055e639100994db387b9a3ec6f70e35812 = $this->env->getExtension("native_profiler");
        $__internal_a631d87bbad0ac410ddf0812f1f4cb055e639100994db387b9a3ec6f70e35812->enter($__internal_a631d87bbad0ac410ddf0812f1f4cb055e639100994db387b9a3ec6f70e35812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a631d87bbad0ac410ddf0812f1f4cb055e639100994db387b9a3ec6f70e35812->leave($__internal_a631d87bbad0ac410ddf0812f1f4cb055e639100994db387b9a3ec6f70e35812_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_170897673fe4e973893e7aa7775d9516f36ae57d9894f4fcc4bbf3cb1c7933f2 = $this->env->getExtension("native_profiler");
        $__internal_170897673fe4e973893e7aa7775d9516f36ae57d9894f4fcc4bbf3cb1c7933f2->enter($__internal_170897673fe4e973893e7aa7775d9516f36ae57d9894f4fcc4bbf3cb1c7933f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_170897673fe4e973893e7aa7775d9516f36ae57d9894f4fcc4bbf3cb1c7933f2->leave($__internal_170897673fe4e973893e7aa7775d9516f36ae57d9894f4fcc4bbf3cb1c7933f2_prof);

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
