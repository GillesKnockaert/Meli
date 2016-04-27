<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4ea9c76dff0ee2575b2d9261e58cd6e2bade051a73dcf340b70558097b3a6dcd extends Twig_Template
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
        $__internal_e43791cacf4bc51c9d607a3d4df1e42ecfb6118ca60364ad8421884a3bb5e799 = $this->env->getExtension("native_profiler");
        $__internal_e43791cacf4bc51c9d607a3d4df1e42ecfb6118ca60364ad8421884a3bb5e799->enter($__internal_e43791cacf4bc51c9d607a3d4df1e42ecfb6118ca60364ad8421884a3bb5e799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e43791cacf4bc51c9d607a3d4df1e42ecfb6118ca60364ad8421884a3bb5e799->leave($__internal_e43791cacf4bc51c9d607a3d4df1e42ecfb6118ca60364ad8421884a3bb5e799_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
