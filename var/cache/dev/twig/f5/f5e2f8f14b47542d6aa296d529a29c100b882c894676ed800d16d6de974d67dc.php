<?php

/* base.html.twig */
class __TwigTemplate_208a2a125d275cad9e81e578587da424117369f4c33f9ad01eb2df31e86326d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea4d83e338aebb2135b2fcbe3fe2ed02ed2002e0eaa2a46d333ad6713177f42e = $this->env->getExtension("native_profiler");
        $__internal_ea4d83e338aebb2135b2fcbe3fe2ed02ed2002e0eaa2a46d333ad6713177f42e->enter($__internal_ea4d83e338aebb2135b2fcbe3fe2ed02ed2002e0eaa2a46d333ad6713177f42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ea4d83e338aebb2135b2fcbe3fe2ed02ed2002e0eaa2a46d333ad6713177f42e->leave($__internal_ea4d83e338aebb2135b2fcbe3fe2ed02ed2002e0eaa2a46d333ad6713177f42e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bd405886fb1dea37ec0ec7f9cabc7045bd97b11e3be37c51d81e2494bedb6bc = $this->env->getExtension("native_profiler");
        $__internal_6bd405886fb1dea37ec0ec7f9cabc7045bd97b11e3be37c51d81e2494bedb6bc->enter($__internal_6bd405886fb1dea37ec0ec7f9cabc7045bd97b11e3be37c51d81e2494bedb6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6bd405886fb1dea37ec0ec7f9cabc7045bd97b11e3be37c51d81e2494bedb6bc->leave($__internal_6bd405886fb1dea37ec0ec7f9cabc7045bd97b11e3be37c51d81e2494bedb6bc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_369485b51472c2620ae7b8a2fad21ae0ff89e03aed4aa5a53dd60b4833c7d5bb = $this->env->getExtension("native_profiler");
        $__internal_369485b51472c2620ae7b8a2fad21ae0ff89e03aed4aa5a53dd60b4833c7d5bb->enter($__internal_369485b51472c2620ae7b8a2fad21ae0ff89e03aed4aa5a53dd60b4833c7d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_369485b51472c2620ae7b8a2fad21ae0ff89e03aed4aa5a53dd60b4833c7d5bb->leave($__internal_369485b51472c2620ae7b8a2fad21ae0ff89e03aed4aa5a53dd60b4833c7d5bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b7e4132e2dde1d5fab564415c2889b1e6d15cf3ea8814ab5b673fd38441492c = $this->env->getExtension("native_profiler");
        $__internal_2b7e4132e2dde1d5fab564415c2889b1e6d15cf3ea8814ab5b673fd38441492c->enter($__internal_2b7e4132e2dde1d5fab564415c2889b1e6d15cf3ea8814ab5b673fd38441492c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b7e4132e2dde1d5fab564415c2889b1e6d15cf3ea8814ab5b673fd38441492c->leave($__internal_2b7e4132e2dde1d5fab564415c2889b1e6d15cf3ea8814ab5b673fd38441492c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6efc130888ae375fcdc59478442d8be35c6484fa2d303e073047f25cf31b4580 = $this->env->getExtension("native_profiler");
        $__internal_6efc130888ae375fcdc59478442d8be35c6484fa2d303e073047f25cf31b4580->enter($__internal_6efc130888ae375fcdc59478442d8be35c6484fa2d303e073047f25cf31b4580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6efc130888ae375fcdc59478442d8be35c6484fa2d303e073047f25cf31b4580->leave($__internal_6efc130888ae375fcdc59478442d8be35c6484fa2d303e073047f25cf31b4580_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
