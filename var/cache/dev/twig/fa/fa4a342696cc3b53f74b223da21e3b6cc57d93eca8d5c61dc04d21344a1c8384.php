<?php

/* base.html.twig */
class __TwigTemplate_864d22178f3bb3f40761d02998efe73a5fad0c8776cd30c91fc0917c00e748c2 extends Twig_Template
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
        $__internal_061e01965e4f9cd0c5dfba16ecaa87c11cf67634822a7a134f1e10a97bcaa1ae = $this->env->getExtension("native_profiler");
        $__internal_061e01965e4f9cd0c5dfba16ecaa87c11cf67634822a7a134f1e10a97bcaa1ae->enter($__internal_061e01965e4f9cd0c5dfba16ecaa87c11cf67634822a7a134f1e10a97bcaa1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_061e01965e4f9cd0c5dfba16ecaa87c11cf67634822a7a134f1e10a97bcaa1ae->leave($__internal_061e01965e4f9cd0c5dfba16ecaa87c11cf67634822a7a134f1e10a97bcaa1ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_076da9bfbf20767e4e89342c637ace2be95cb2b4aece567d764799f8c1e7b9b3 = $this->env->getExtension("native_profiler");
        $__internal_076da9bfbf20767e4e89342c637ace2be95cb2b4aece567d764799f8c1e7b9b3->enter($__internal_076da9bfbf20767e4e89342c637ace2be95cb2b4aece567d764799f8c1e7b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_076da9bfbf20767e4e89342c637ace2be95cb2b4aece567d764799f8c1e7b9b3->leave($__internal_076da9bfbf20767e4e89342c637ace2be95cb2b4aece567d764799f8c1e7b9b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37d075d5db2d639287ada8e5efbf7df5de4c3d94216480e6168389b86e8dbae5 = $this->env->getExtension("native_profiler");
        $__internal_37d075d5db2d639287ada8e5efbf7df5de4c3d94216480e6168389b86e8dbae5->enter($__internal_37d075d5db2d639287ada8e5efbf7df5de4c3d94216480e6168389b86e8dbae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37d075d5db2d639287ada8e5efbf7df5de4c3d94216480e6168389b86e8dbae5->leave($__internal_37d075d5db2d639287ada8e5efbf7df5de4c3d94216480e6168389b86e8dbae5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9ce2f7adc7f3c28c1bbc2882fbe483e391f5c924b9fd38eeeca0cb49b649b8d = $this->env->getExtension("native_profiler");
        $__internal_b9ce2f7adc7f3c28c1bbc2882fbe483e391f5c924b9fd38eeeca0cb49b649b8d->enter($__internal_b9ce2f7adc7f3c28c1bbc2882fbe483e391f5c924b9fd38eeeca0cb49b649b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9ce2f7adc7f3c28c1bbc2882fbe483e391f5c924b9fd38eeeca0cb49b649b8d->leave($__internal_b9ce2f7adc7f3c28c1bbc2882fbe483e391f5c924b9fd38eeeca0cb49b649b8d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7da39c2f4d59ca162dacce63b6734764eaf240a68d8c6ae23f42a92355c16143 = $this->env->getExtension("native_profiler");
        $__internal_7da39c2f4d59ca162dacce63b6734764eaf240a68d8c6ae23f42a92355c16143->enter($__internal_7da39c2f4d59ca162dacce63b6734764eaf240a68d8c6ae23f42a92355c16143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7da39c2f4d59ca162dacce63b6734764eaf240a68d8c6ae23f42a92355c16143->leave($__internal_7da39c2f4d59ca162dacce63b6734764eaf240a68d8c6ae23f42a92355c16143_prof);

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
