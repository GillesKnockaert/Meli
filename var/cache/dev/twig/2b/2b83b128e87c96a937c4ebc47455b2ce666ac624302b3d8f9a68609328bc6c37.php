<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_50059e6f9f9661c74af01a93a6fc276fecee08ea10dfbfe2abe668306bdc0822 extends Twig_Template
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
        $__internal_16fdb123fd6a88a21f539a6a31cdcbc07b713cf7fc025e4e60b6fe5f1444070c = $this->env->getExtension("native_profiler");
        $__internal_16fdb123fd6a88a21f539a6a31cdcbc07b713cf7fc025e4e60b6fe5f1444070c->enter($__internal_16fdb123fd6a88a21f539a6a31cdcbc07b713cf7fc025e4e60b6fe5f1444070c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_16fdb123fd6a88a21f539a6a31cdcbc07b713cf7fc025e4e60b6fe5f1444070c->leave($__internal_16fdb123fd6a88a21f539a6a31cdcbc07b713cf7fc025e4e60b6fe5f1444070c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
