<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_624115230f0ab2841ee4da45fbb7aa02a623acad3827066dfaaf232b3e8a0932 extends Twig_Template
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
        $__internal_b327c7cf1145af5075f3354377d10711bc814e41ca12384540bba616049e33a2 = $this->env->getExtension("native_profiler");
        $__internal_b327c7cf1145af5075f3354377d10711bc814e41ca12384540bba616049e33a2->enter($__internal_b327c7cf1145af5075f3354377d10711bc814e41ca12384540bba616049e33a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b327c7cf1145af5075f3354377d10711bc814e41ca12384540bba616049e33a2->leave($__internal_b327c7cf1145af5075f3354377d10711bc814e41ca12384540bba616049e33a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
