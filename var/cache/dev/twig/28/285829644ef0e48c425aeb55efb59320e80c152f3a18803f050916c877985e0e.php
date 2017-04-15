<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_22c9621328814cde19a3bf644e861fbaa68eda849976b9d1df3bdf638f1c768d extends Twig_Template
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
        $__internal_76c672b7700938c583495719035e06289e75f1adb4b0aefaf603b7276bd24ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c672b7700938c583495719035e06289e75f1adb4b0aefaf603b7276bd24ee8->enter($__internal_76c672b7700938c583495719035e06289e75f1adb4b0aefaf603b7276bd24ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cdcbcfcdf066fdccf75c52784893c25f2fd5a66101bdfe73287499be48fcdeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcbcfcdf066fdccf75c52784893c25f2fd5a66101bdfe73287499be48fcdeec->enter($__internal_cdcbcfcdf066fdccf75c52784893c25f2fd5a66101bdfe73287499be48fcdeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_76c672b7700938c583495719035e06289e75f1adb4b0aefaf603b7276bd24ee8->leave($__internal_76c672b7700938c583495719035e06289e75f1adb4b0aefaf603b7276bd24ee8_prof);

        
        $__internal_cdcbcfcdf066fdccf75c52784893c25f2fd5a66101bdfe73287499be48fcdeec->leave($__internal_cdcbcfcdf066fdccf75c52784893c25f2fd5a66101bdfe73287499be48fcdeec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
