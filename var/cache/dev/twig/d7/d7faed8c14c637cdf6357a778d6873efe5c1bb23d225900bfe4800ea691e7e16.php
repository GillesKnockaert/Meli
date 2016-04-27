<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1c304458bb213f4189bc3f2c0598370bd3fdce3057451211e7cf22f34fb98110 extends Twig_Template
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
        $__internal_fb164cf8f79e395ba83396a705afe0033431906d8af18a4a7f3981b9f1630372 = $this->env->getExtension("native_profiler");
        $__internal_fb164cf8f79e395ba83396a705afe0033431906d8af18a4a7f3981b9f1630372->enter($__internal_fb164cf8f79e395ba83396a705afe0033431906d8af18a4a7f3981b9f1630372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_fb164cf8f79e395ba83396a705afe0033431906d8af18a4a7f3981b9f1630372->leave($__internal_fb164cf8f79e395ba83396a705afe0033431906d8af18a4a7f3981b9f1630372_prof);

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
