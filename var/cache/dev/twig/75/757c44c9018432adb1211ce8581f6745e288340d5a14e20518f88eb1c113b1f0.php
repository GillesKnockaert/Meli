<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d8267b2fe854d86150469d1d01e5821c7e6e2ac9c226550121478b54beca38b4 extends Twig_Template
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
        $__internal_8b128728a6e5b0fb5202f96f650b0002f2257ec77eea3b28d9f33d696ac23655 = $this->env->getExtension("native_profiler");
        $__internal_8b128728a6e5b0fb5202f96f650b0002f2257ec77eea3b28d9f33d696ac23655->enter($__internal_8b128728a6e5b0fb5202f96f650b0002f2257ec77eea3b28d9f33d696ac23655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_8b128728a6e5b0fb5202f96f650b0002f2257ec77eea3b28d9f33d696ac23655->leave($__internal_8b128728a6e5b0fb5202f96f650b0002f2257ec77eea3b28d9f33d696ac23655_prof);

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
