<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_55df1505266bce315fdda2e35ebb0a0797954c39d17fc3046b23d72c5b62624c extends Twig_Template
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
        $__internal_89bdf8f96ea4ba0eb678b536308445f550270a3b2257878b4b58a00001f3231d = $this->env->getExtension("native_profiler");
        $__internal_89bdf8f96ea4ba0eb678b536308445f550270a3b2257878b4b58a00001f3231d->enter($__internal_89bdf8f96ea4ba0eb678b536308445f550270a3b2257878b4b58a00001f3231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_89bdf8f96ea4ba0eb678b536308445f550270a3b2257878b4b58a00001f3231d->leave($__internal_89bdf8f96ea4ba0eb678b536308445f550270a3b2257878b4b58a00001f3231d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
