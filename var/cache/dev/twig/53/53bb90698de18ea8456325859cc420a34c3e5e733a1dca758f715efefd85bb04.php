<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_093c88195bb5e5dbda22c8fcfe4e4e3b3b1f05f06526dd9917acda336cf6aa0c extends Twig_Template
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
        $__internal_77c3a953af15f1d1eec5be68575022e09ac22e01bd27969a73a8903ae3c92912 = $this->env->getExtension("native_profiler");
        $__internal_77c3a953af15f1d1eec5be68575022e09ac22e01bd27969a73a8903ae3c92912->enter($__internal_77c3a953af15f1d1eec5be68575022e09ac22e01bd27969a73a8903ae3c92912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_77c3a953af15f1d1eec5be68575022e09ac22e01bd27969a73a8903ae3c92912->leave($__internal_77c3a953af15f1d1eec5be68575022e09ac22e01bd27969a73a8903ae3c92912_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
