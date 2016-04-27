<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_6aafd88ae5c7055c8e3374b3e927a2d4cd53f4277c0281ba81c53b3b2ea668b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b7116aca0f1959256cd8f4e928de11380dbe8cd55eeb1cb70a74d47a4130686 = $this->env->getExtension("native_profiler");
        $__internal_4b7116aca0f1959256cd8f4e928de11380dbe8cd55eeb1cb70a74d47a4130686->enter($__internal_4b7116aca0f1959256cd8f4e928de11380dbe8cd55eeb1cb70a74d47a4130686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4b7116aca0f1959256cd8f4e928de11380dbe8cd55eeb1cb70a74d47a4130686->leave($__internal_4b7116aca0f1959256cd8f4e928de11380dbe8cd55eeb1cb70a74d47a4130686_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
