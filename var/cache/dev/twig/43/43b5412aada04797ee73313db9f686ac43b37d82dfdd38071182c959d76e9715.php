<?php

/* ::base.html.twig */
class __TwigTemplate_e31f166d20a08df6d6dc5ceb5644f43df5367755da3a59364874c94f113bd7b2 extends Twig_Template
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
        $__internal_d9319a12a24bc694d8fe8d2136c79c286247a764f7651ee0689c6165717cd010 = $this->env->getExtension("native_profiler");
        $__internal_d9319a12a24bc694d8fe8d2136c79c286247a764f7651ee0689c6165717cd010->enter($__internal_d9319a12a24bc694d8fe8d2136c79c286247a764f7651ee0689c6165717cd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d9319a12a24bc694d8fe8d2136c79c286247a764f7651ee0689c6165717cd010->leave($__internal_d9319a12a24bc694d8fe8d2136c79c286247a764f7651ee0689c6165717cd010_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90db2ee7d91178841bd8c7aa34a5b34d704d6db4a6b9a6807397970f7391a6d6 = $this->env->getExtension("native_profiler");
        $__internal_90db2ee7d91178841bd8c7aa34a5b34d704d6db4a6b9a6807397970f7391a6d6->enter($__internal_90db2ee7d91178841bd8c7aa34a5b34d704d6db4a6b9a6807397970f7391a6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_90db2ee7d91178841bd8c7aa34a5b34d704d6db4a6b9a6807397970f7391a6d6->leave($__internal_90db2ee7d91178841bd8c7aa34a5b34d704d6db4a6b9a6807397970f7391a6d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c592866c7cdc5f4eb6acef22c8675ff0469d4e69e947be081dd9d6037be29496 = $this->env->getExtension("native_profiler");
        $__internal_c592866c7cdc5f4eb6acef22c8675ff0469d4e69e947be081dd9d6037be29496->enter($__internal_c592866c7cdc5f4eb6acef22c8675ff0469d4e69e947be081dd9d6037be29496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c592866c7cdc5f4eb6acef22c8675ff0469d4e69e947be081dd9d6037be29496->leave($__internal_c592866c7cdc5f4eb6acef22c8675ff0469d4e69e947be081dd9d6037be29496_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdce39c8352efc5d5bf3fd1f59d136abc6193bcf7827e4857a09bdb170fedb3e = $this->env->getExtension("native_profiler");
        $__internal_fdce39c8352efc5d5bf3fd1f59d136abc6193bcf7827e4857a09bdb170fedb3e->enter($__internal_fdce39c8352efc5d5bf3fd1f59d136abc6193bcf7827e4857a09bdb170fedb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdce39c8352efc5d5bf3fd1f59d136abc6193bcf7827e4857a09bdb170fedb3e->leave($__internal_fdce39c8352efc5d5bf3fd1f59d136abc6193bcf7827e4857a09bdb170fedb3e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff65c2d202b11a0b58f1deaf39d5fe439b33491fce9f4b613d6c69e5edcf05ec = $this->env->getExtension("native_profiler");
        $__internal_ff65c2d202b11a0b58f1deaf39d5fe439b33491fce9f4b613d6c69e5edcf05ec->enter($__internal_ff65c2d202b11a0b58f1deaf39d5fe439b33491fce9f4b613d6c69e5edcf05ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ff65c2d202b11a0b58f1deaf39d5fe439b33491fce9f4b613d6c69e5edcf05ec->leave($__internal_ff65c2d202b11a0b58f1deaf39d5fe439b33491fce9f4b613d6c69e5edcf05ec_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
