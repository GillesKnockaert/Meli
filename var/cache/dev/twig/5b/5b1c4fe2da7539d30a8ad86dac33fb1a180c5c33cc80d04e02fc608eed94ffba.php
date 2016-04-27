<?php

/* base.html.twig */
class __TwigTemplate_abfd692f97899605f3c083f8dbb2bcac913bcc76fda5340a41960351a312cc28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf64f6b22303ee67dfda98fdc412501c3ff8a60b161b51f3fc12ec2237e2996 = $this->env->getExtension("native_profiler");
        $__internal_fcf64f6b22303ee67dfda98fdc412501c3ff8a60b161b51f3fc12ec2237e2996->enter($__internal_fcf64f6b22303ee67dfda98fdc412501c3ff8a60b161b51f3fc12ec2237e2996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fcf64f6b22303ee67dfda98fdc412501c3ff8a60b161b51f3fc12ec2237e2996->leave($__internal_fcf64f6b22303ee67dfda98fdc412501c3ff8a60b161b51f3fc12ec2237e2996_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_31d39b4ccb5da948d08e3e463616169fa9e0ab9562e2d93aa6e993fef55be95e = $this->env->getExtension("native_profiler");
        $__internal_31d39b4ccb5da948d08e3e463616169fa9e0ab9562e2d93aa6e993fef55be95e->enter($__internal_31d39b4ccb5da948d08e3e463616169fa9e0ab9562e2d93aa6e993fef55be95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31d39b4ccb5da948d08e3e463616169fa9e0ab9562e2d93aa6e993fef55be95e->leave($__internal_31d39b4ccb5da948d08e3e463616169fa9e0ab9562e2d93aa6e993fef55be95e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bca390a642ee4f9bcb069ed979a3699f6d74ad96dcf3d9ef477b412d6e336f59 = $this->env->getExtension("native_profiler");
        $__internal_bca390a642ee4f9bcb069ed979a3699f6d74ad96dcf3d9ef477b412d6e336f59->enter($__internal_bca390a642ee4f9bcb069ed979a3699f6d74ad96dcf3d9ef477b412d6e336f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bca390a642ee4f9bcb069ed979a3699f6d74ad96dcf3d9ef477b412d6e336f59->leave($__internal_bca390a642ee4f9bcb069ed979a3699f6d74ad96dcf3d9ef477b412d6e336f59_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b8a3984c267536e2297a144b755240d0a758eb83410afedf3b8a689e3352fd6 = $this->env->getExtension("native_profiler");
        $__internal_0b8a3984c267536e2297a144b755240d0a758eb83410afedf3b8a689e3352fd6->enter($__internal_0b8a3984c267536e2297a144b755240d0a758eb83410afedf3b8a689e3352fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b8a3984c267536e2297a144b755240d0a758eb83410afedf3b8a689e3352fd6->leave($__internal_0b8a3984c267536e2297a144b755240d0a758eb83410afedf3b8a689e3352fd6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b48a6feb4b34a2afa97009351b0c3e1e1189ef562165351e40d13b6dbda2fbf4 = $this->env->getExtension("native_profiler");
        $__internal_b48a6feb4b34a2afa97009351b0c3e1e1189ef562165351e40d13b6dbda2fbf4->enter($__internal_b48a6feb4b34a2afa97009351b0c3e1e1189ef562165351e40d13b6dbda2fbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b48a6feb4b34a2afa97009351b0c3e1e1189ef562165351e40d13b6dbda2fbf4->leave($__internal_b48a6feb4b34a2afa97009351b0c3e1e1189ef562165351e40d13b6dbda2fbf4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
