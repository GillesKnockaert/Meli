<?php

/* ::base.html.twig */
class __TwigTemplate_381451ed422889032b704936ec371f7fd4ec1399085996f155e82f6ca21d9b1d extends Twig_Template
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
        $__internal_07d9f5505cf0f40c00bc2bd4e41a8fe5b29c4034a09c82fdca66cf9e8ccf31e1 = $this->env->getExtension("native_profiler");
        $__internal_07d9f5505cf0f40c00bc2bd4e41a8fe5b29c4034a09c82fdca66cf9e8ccf31e1->enter($__internal_07d9f5505cf0f40c00bc2bd4e41a8fe5b29c4034a09c82fdca66cf9e8ccf31e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_07d9f5505cf0f40c00bc2bd4e41a8fe5b29c4034a09c82fdca66cf9e8ccf31e1->leave($__internal_07d9f5505cf0f40c00bc2bd4e41a8fe5b29c4034a09c82fdca66cf9e8ccf31e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d30525d44231447f0732c197213c0b798b288c5ff1e0a7d07fe9adb39bc83dcf = $this->env->getExtension("native_profiler");
        $__internal_d30525d44231447f0732c197213c0b798b288c5ff1e0a7d07fe9adb39bc83dcf->enter($__internal_d30525d44231447f0732c197213c0b798b288c5ff1e0a7d07fe9adb39bc83dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d30525d44231447f0732c197213c0b798b288c5ff1e0a7d07fe9adb39bc83dcf->leave($__internal_d30525d44231447f0732c197213c0b798b288c5ff1e0a7d07fe9adb39bc83dcf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93074d42f9b457512aa52b0fa7c1dbeb3437ef5737c43069cb83a9f820b554e8 = $this->env->getExtension("native_profiler");
        $__internal_93074d42f9b457512aa52b0fa7c1dbeb3437ef5737c43069cb83a9f820b554e8->enter($__internal_93074d42f9b457512aa52b0fa7c1dbeb3437ef5737c43069cb83a9f820b554e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_93074d42f9b457512aa52b0fa7c1dbeb3437ef5737c43069cb83a9f820b554e8->leave($__internal_93074d42f9b457512aa52b0fa7c1dbeb3437ef5737c43069cb83a9f820b554e8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff5426235a0b125198cdfd22f5b78521b46b8abaaec05089315b5398bfa9f190 = $this->env->getExtension("native_profiler");
        $__internal_ff5426235a0b125198cdfd22f5b78521b46b8abaaec05089315b5398bfa9f190->enter($__internal_ff5426235a0b125198cdfd22f5b78521b46b8abaaec05089315b5398bfa9f190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff5426235a0b125198cdfd22f5b78521b46b8abaaec05089315b5398bfa9f190->leave($__internal_ff5426235a0b125198cdfd22f5b78521b46b8abaaec05089315b5398bfa9f190_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_992421a11ff9f6390b69e39cac53a51975b3c75a5b24a85927be07fc47ed8984 = $this->env->getExtension("native_profiler");
        $__internal_992421a11ff9f6390b69e39cac53a51975b3c75a5b24a85927be07fc47ed8984->enter($__internal_992421a11ff9f6390b69e39cac53a51975b3c75a5b24a85927be07fc47ed8984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_992421a11ff9f6390b69e39cac53a51975b3c75a5b24a85927be07fc47ed8984->leave($__internal_992421a11ff9f6390b69e39cac53a51975b3c75a5b24a85927be07fc47ed8984_prof);

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
