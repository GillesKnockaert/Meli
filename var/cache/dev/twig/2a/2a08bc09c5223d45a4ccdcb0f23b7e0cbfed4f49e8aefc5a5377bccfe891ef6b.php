<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_fac3b331ae91dcf3d67290947aee4380836ee4d3421b4251360f389bbc613570 extends Twig_Template
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
        $__internal_a1aba1c06d7e95ba4c5abfaa9d52f86311e79d03595506f5eb5eded8da2c5a8f = $this->env->getExtension("native_profiler");
        $__internal_a1aba1c06d7e95ba4c5abfaa9d52f86311e79d03595506f5eb5eded8da2c5a8f->enter($__internal_a1aba1c06d7e95ba4c5abfaa9d52f86311e79d03595506f5eb5eded8da2c5a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_a1aba1c06d7e95ba4c5abfaa9d52f86311e79d03595506f5eb5eded8da2c5a8f->leave($__internal_a1aba1c06d7e95ba4c5abfaa9d52f86311e79d03595506f5eb5eded8da2c5a8f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
