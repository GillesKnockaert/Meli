<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_59e979758f6768f186c05423170459f363292823e67518246d68bb2cd26688e2 extends Twig_Template
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
        $__internal_a1a727129d83eedae7ce2a13f5b818d17b7ad4af5554f8ce6ee08aee51f37fdb = $this->env->getExtension("native_profiler");
        $__internal_a1a727129d83eedae7ce2a13f5b818d17b7ad4af5554f8ce6ee08aee51f37fdb->enter($__internal_a1a727129d83eedae7ce2a13f5b818d17b7ad4af5554f8ce6ee08aee51f37fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a1a727129d83eedae7ce2a13f5b818d17b7ad4af5554f8ce6ee08aee51f37fdb->leave($__internal_a1a727129d83eedae7ce2a13f5b818d17b7ad4af5554f8ce6ee08aee51f37fdb_prof);

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
