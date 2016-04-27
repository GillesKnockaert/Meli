<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a8f43f0c9d848e99306ef511f2f855d266c348c8329fa7f07dcaf3bc95e94ed7 extends Twig_Template
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
        $__internal_ba6f55c6866c011a32981ddb64ca62ee104a4155fde1fbd1a86a04669fbfa13e = $this->env->getExtension("native_profiler");
        $__internal_ba6f55c6866c011a32981ddb64ca62ee104a4155fde1fbd1a86a04669fbfa13e->enter($__internal_ba6f55c6866c011a32981ddb64ca62ee104a4155fde1fbd1a86a04669fbfa13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ba6f55c6866c011a32981ddb64ca62ee104a4155fde1fbd1a86a04669fbfa13e->leave($__internal_ba6f55c6866c011a32981ddb64ca62ee104a4155fde1fbd1a86a04669fbfa13e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
