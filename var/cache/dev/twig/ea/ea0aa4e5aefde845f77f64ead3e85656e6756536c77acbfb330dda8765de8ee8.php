<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ea1f314c070869e43c9a63a54e316e53ab90cd087faa3cd8cd7d8095ff121463 extends Twig_Template
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
        $__internal_1a466500f7099e54598c87d24a3e5ae5875a9fae1bd67805fc84cfa6022baae0 = $this->env->getExtension("native_profiler");
        $__internal_1a466500f7099e54598c87d24a3e5ae5875a9fae1bd67805fc84cfa6022baae0->enter($__internal_1a466500f7099e54598c87d24a3e5ae5875a9fae1bd67805fc84cfa6022baae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_1a466500f7099e54598c87d24a3e5ae5875a9fae1bd67805fc84cfa6022baae0->leave($__internal_1a466500f7099e54598c87d24a3e5ae5875a9fae1bd67805fc84cfa6022baae0_prof);

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
