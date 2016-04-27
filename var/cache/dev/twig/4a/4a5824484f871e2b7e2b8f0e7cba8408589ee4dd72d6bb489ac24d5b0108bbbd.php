<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_2c4f2542b47a1b7bec4850dd68e16423d46bd02e9778ce2b82fd596a83a19d80 extends Twig_Template
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
        $__internal_bf81e154ba226b97d62337258e81b795ea7801d577ac2e86be62f3100d31de27 = $this->env->getExtension("native_profiler");
        $__internal_bf81e154ba226b97d62337258e81b795ea7801d577ac2e86be62f3100d31de27->enter($__internal_bf81e154ba226b97d62337258e81b795ea7801d577ac2e86be62f3100d31de27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_bf81e154ba226b97d62337258e81b795ea7801d577ac2e86be62f3100d31de27->leave($__internal_bf81e154ba226b97d62337258e81b795ea7801d577ac2e86be62f3100d31de27_prof);

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
