<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_79ff2079317f410e3d44b5ecc1f132e49b35be5a821228f71ad3684f9a91ebe8 extends Twig_Template
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
        $__internal_73898c645ee6150c1c566f9af032178cc1b0ebb8a9fce7e9969ab73469418d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73898c645ee6150c1c566f9af032178cc1b0ebb8a9fce7e9969ab73469418d98->enter($__internal_73898c645ee6150c1c566f9af032178cc1b0ebb8a9fce7e9969ab73469418d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8182825d8111df0972e21a38b13c305283d9da9979354862fb3718a0f91fbe93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8182825d8111df0972e21a38b13c305283d9da9979354862fb3718a0f91fbe93->enter($__internal_8182825d8111df0972e21a38b13c305283d9da9979354862fb3718a0f91fbe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_73898c645ee6150c1c566f9af032178cc1b0ebb8a9fce7e9969ab73469418d98->leave($__internal_73898c645ee6150c1c566f9af032178cc1b0ebb8a9fce7e9969ab73469418d98_prof);

        
        $__internal_8182825d8111df0972e21a38b13c305283d9da9979354862fb3718a0f91fbe93->leave($__internal_8182825d8111df0972e21a38b13c305283d9da9979354862fb3718a0f91fbe93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
