<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5f8704ee40022fa3ec969c583de69b1412564c425ba711db2d412d8f62f56aa8 extends Twig_Template
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
        $__internal_93c3525a992c73b7fffc4efe1a11652f5621dee8a7c6828ea94a767e3f96cb65 = $this->env->getExtension("native_profiler");
        $__internal_93c3525a992c73b7fffc4efe1a11652f5621dee8a7c6828ea94a767e3f96cb65->enter($__internal_93c3525a992c73b7fffc4efe1a11652f5621dee8a7c6828ea94a767e3f96cb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_93c3525a992c73b7fffc4efe1a11652f5621dee8a7c6828ea94a767e3f96cb65->leave($__internal_93c3525a992c73b7fffc4efe1a11652f5621dee8a7c6828ea94a767e3f96cb65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
