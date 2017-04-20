<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_14632e84c2c764a656f4e99a680f2b5f59a67faa948598816e508e811494baa4 extends Twig_Template
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
        $__internal_eaba00374d295678c4a5f4295e96c7cb9a8da867f778e442ac24f7915cbde7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaba00374d295678c4a5f4295e96c7cb9a8da867f778e442ac24f7915cbde7ee->enter($__internal_eaba00374d295678c4a5f4295e96c7cb9a8da867f778e442ac24f7915cbde7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1880c57f33665c0f96f16c53839dbf21210a2b8f887d8b8a40e2c1a753306019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1880c57f33665c0f96f16c53839dbf21210a2b8f887d8b8a40e2c1a753306019->enter($__internal_1880c57f33665c0f96f16c53839dbf21210a2b8f887d8b8a40e2c1a753306019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_eaba00374d295678c4a5f4295e96c7cb9a8da867f778e442ac24f7915cbde7ee->leave($__internal_eaba00374d295678c4a5f4295e96c7cb9a8da867f778e442ac24f7915cbde7ee_prof);

        
        $__internal_1880c57f33665c0f96f16c53839dbf21210a2b8f887d8b8a40e2c1a753306019->leave($__internal_1880c57f33665c0f96f16c53839dbf21210a2b8f887d8b8a40e2c1a753306019_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
