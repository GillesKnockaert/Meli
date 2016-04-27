<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c6c0417d6817dbc7e97e109e8c424ea1bbfc7f6c087c505cec16e64b8b692bd3 extends Twig_Template
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
        $__internal_76cca45aed3a2900cb167a70e11a25bc8f7a2f147245cefce4fa59ee485cbc20 = $this->env->getExtension("native_profiler");
        $__internal_76cca45aed3a2900cb167a70e11a25bc8f7a2f147245cefce4fa59ee485cbc20->enter($__internal_76cca45aed3a2900cb167a70e11a25bc8f7a2f147245cefce4fa59ee485cbc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_76cca45aed3a2900cb167a70e11a25bc8f7a2f147245cefce4fa59ee485cbc20->leave($__internal_76cca45aed3a2900cb167a70e11a25bc8f7a2f147245cefce4fa59ee485cbc20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
