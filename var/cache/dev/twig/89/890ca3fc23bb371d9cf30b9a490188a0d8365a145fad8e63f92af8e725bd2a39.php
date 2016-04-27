<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_48c5bf44d947525ac59a7a19bec11c20303a7f6bba765df9091766052c37826a extends Twig_Template
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
        $__internal_22b35ca27fa113ad1ff71aef8fa227f0cd1cde0f1d542dbbc9bd0c65149514ca = $this->env->getExtension("native_profiler");
        $__internal_22b35ca27fa113ad1ff71aef8fa227f0cd1cde0f1d542dbbc9bd0c65149514ca->enter($__internal_22b35ca27fa113ad1ff71aef8fa227f0cd1cde0f1d542dbbc9bd0c65149514ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_22b35ca27fa113ad1ff71aef8fa227f0cd1cde0f1d542dbbc9bd0c65149514ca->leave($__internal_22b35ca27fa113ad1ff71aef8fa227f0cd1cde0f1d542dbbc9bd0c65149514ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
