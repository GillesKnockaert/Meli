<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_010a79a3177ec293878c968c9881feac51c437b85f03bec5766f5d68f54ee0c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49a98689cdceb593472b64d59d5f24b6e6ee8f8a959b4788a8a05f031cd85b37 = $this->env->getExtension("native_profiler");
        $__internal_49a98689cdceb593472b64d59d5f24b6e6ee8f8a959b4788a8a05f031cd85b37->enter($__internal_49a98689cdceb593472b64d59d5f24b6e6ee8f8a959b4788a8a05f031cd85b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_49a98689cdceb593472b64d59d5f24b6e6ee8f8a959b4788a8a05f031cd85b37->leave($__internal_49a98689cdceb593472b64d59d5f24b6e6ee8f8a959b4788a8a05f031cd85b37_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_75099031f1dd613e32d780ff12bea3c9445d00579686a1152381a50ce8455549 = $this->env->getExtension("native_profiler");
        $__internal_75099031f1dd613e32d780ff12bea3c9445d00579686a1152381a50ce8455549->enter($__internal_75099031f1dd613e32d780ff12bea3c9445d00579686a1152381a50ce8455549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_75099031f1dd613e32d780ff12bea3c9445d00579686a1152381a50ce8455549->leave($__internal_75099031f1dd613e32d780ff12bea3c9445d00579686a1152381a50ce8455549_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
