<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8b67a7d24f5312228b873c2fbb269328e9e0e1349b79787f8325ee9e9be5fbe7 extends Twig_Template
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
        $__internal_2a0d2de4a14376ee11bb6441765103d5d8650cbcd828dd5dd9dd881fc9aedbbd = $this->env->getExtension("native_profiler");
        $__internal_2a0d2de4a14376ee11bb6441765103d5d8650cbcd828dd5dd9dd881fc9aedbbd->enter($__internal_2a0d2de4a14376ee11bb6441765103d5d8650cbcd828dd5dd9dd881fc9aedbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2a0d2de4a14376ee11bb6441765103d5d8650cbcd828dd5dd9dd881fc9aedbbd->leave($__internal_2a0d2de4a14376ee11bb6441765103d5d8650cbcd828dd5dd9dd881fc9aedbbd_prof);

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
