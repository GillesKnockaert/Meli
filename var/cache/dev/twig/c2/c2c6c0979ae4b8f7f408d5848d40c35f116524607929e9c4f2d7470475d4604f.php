<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7a02ea38f77859758d5a96a64ebcd2b77f6454298086486aa217cf02fb51ca63 extends Twig_Template
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
        $__internal_3e7cac2ff35b396e20d1b6fddb8b30811181ed27f352cf5bab66b60f0da8d215 = $this->env->getExtension("native_profiler");
        $__internal_3e7cac2ff35b396e20d1b6fddb8b30811181ed27f352cf5bab66b60f0da8d215->enter($__internal_3e7cac2ff35b396e20d1b6fddb8b30811181ed27f352cf5bab66b60f0da8d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3e7cac2ff35b396e20d1b6fddb8b30811181ed27f352cf5bab66b60f0da8d215->leave($__internal_3e7cac2ff35b396e20d1b6fddb8b30811181ed27f352cf5bab66b60f0da8d215_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
