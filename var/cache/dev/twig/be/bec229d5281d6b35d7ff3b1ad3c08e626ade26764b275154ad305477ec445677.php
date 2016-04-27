<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0a6fb9db06a7d975b25ce7918e857ad8c9cef28fa92f456cd1dfc6bb47e40b59 extends Twig_Template
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
        $__internal_c4bdd5d488ffca1e8245356c58b3f8d8f4871750573a238348a07a2d53f9d0e2 = $this->env->getExtension("native_profiler");
        $__internal_c4bdd5d488ffca1e8245356c58b3f8d8f4871750573a238348a07a2d53f9d0e2->enter($__internal_c4bdd5d488ffca1e8245356c58b3f8d8f4871750573a238348a07a2d53f9d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c4bdd5d488ffca1e8245356c58b3f8d8f4871750573a238348a07a2d53f9d0e2->leave($__internal_c4bdd5d488ffca1e8245356c58b3f8d8f4871750573a238348a07a2d53f9d0e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
