<?php

/* BazookasBundle:Default:index.html.twig */
class __TwigTemplate_d842d9f43fe3a95ad8f52cea12367ff181b70860b4e5faa31a2b26c4a28af62f extends Twig_Template
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
        $__internal_995e0044d58de2f6e8c8e0e77d27c698077149810422ceb1b71fe8a251a24fb4 = $this->env->getExtension("native_profiler");
        $__internal_995e0044d58de2f6e8c8e0e77d27c698077149810422ceb1b71fe8a251a24fb4->enter($__internal_995e0044d58de2f6e8c8e0e77d27c698077149810422ceb1b71fe8a251a24fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazookasBundle:Default:index.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

<h1>Meli</h1>
<hr>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" value=\"Submit\">Submit</button>
<button type=\"reset\" value=\"Reset\">Reset</button>
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_995e0044d58de2f6e8c8e0e77d27c698077149810422ceb1b71fe8a251a24fb4->leave($__internal_995e0044d58de2f6e8c8e0e77d27c698077149810422ceb1b71fe8a251a24fb4_prof);

    }

    public function getTemplateName()
    {
        return "BazookasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  32 => 6,  25 => 2,  22 => 1,);
    }
}
/* */
/* <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/* */
/* <h1>Meli</h1>*/
/* <hr>*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* <button type="submit" value="Submit">Submit</button>*/
/* <button type="reset" value="Reset">Reset</button>*/
/* {{ form_end(form) }}*/
/* */
