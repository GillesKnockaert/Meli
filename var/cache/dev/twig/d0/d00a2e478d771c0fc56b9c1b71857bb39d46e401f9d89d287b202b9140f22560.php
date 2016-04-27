<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fce5d910c0abb6d449c12c876c4ff4d76a084219dcb7fbcc33b6806e50cec050 extends Twig_Template
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
        $__internal_2df3e737ca9ac11f605ff1e8856c95e6bc96c6fe0194cf8205eee2c3ac458537 = $this->env->getExtension("native_profiler");
        $__internal_2df3e737ca9ac11f605ff1e8856c95e6bc96c6fe0194cf8205eee2c3ac458537->enter($__internal_2df3e737ca9ac11f605ff1e8856c95e6bc96c6fe0194cf8205eee2c3ac458537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_2df3e737ca9ac11f605ff1e8856c95e6bc96c6fe0194cf8205eee2c3ac458537->leave($__internal_2df3e737ca9ac11f605ff1e8856c95e6bc96c6fe0194cf8205eee2c3ac458537_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
