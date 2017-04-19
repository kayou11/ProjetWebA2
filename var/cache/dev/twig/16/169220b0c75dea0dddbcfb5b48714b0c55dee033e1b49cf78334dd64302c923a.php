<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_343f1e587664df5c958918a755649cccdb737e3cf9b0f9696129a348bbf2236a extends Twig_Template
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
        $__internal_b553c79f10628f589b7009ac8e56a66fcff0ed2a64c5fce91b758d46272c2702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b553c79f10628f589b7009ac8e56a66fcff0ed2a64c5fce91b758d46272c2702->enter($__internal_b553c79f10628f589b7009ac8e56a66fcff0ed2a64c5fce91b758d46272c2702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8f603ba3181f501e2e799b3a248818c643b18ecfc9e368ad739b18c12e05860a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f603ba3181f501e2e799b3a248818c643b18ecfc9e368ad739b18c12e05860a->enter($__internal_8f603ba3181f501e2e799b3a248818c643b18ecfc9e368ad739b18c12e05860a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b553c79f10628f589b7009ac8e56a66fcff0ed2a64c5fce91b758d46272c2702->leave($__internal_b553c79f10628f589b7009ac8e56a66fcff0ed2a64c5fce91b758d46272c2702_prof);

        
        $__internal_8f603ba3181f501e2e799b3a248818c643b18ecfc9e368ad739b18c12e05860a->leave($__internal_8f603ba3181f501e2e799b3a248818c643b18ecfc9e368ad739b18c12e05860a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
