<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8ecf163068ac17b63cdd93158fe4c62852e2fe1c07021c9eb06fc79573f11397 extends Twig_Template
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
        $__internal_3b5eb689e5343d8047bb7f0ed896868b8f17f9017724b4094cd70ea8be317b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5eb689e5343d8047bb7f0ed896868b8f17f9017724b4094cd70ea8be317b95->enter($__internal_3b5eb689e5343d8047bb7f0ed896868b8f17f9017724b4094cd70ea8be317b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_19d52ad66c2d576ab1310c9bc6dbf9098377546b29bd37df755dcbc41d375cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d52ad66c2d576ab1310c9bc6dbf9098377546b29bd37df755dcbc41d375cb8->enter($__internal_19d52ad66c2d576ab1310c9bc6dbf9098377546b29bd37df755dcbc41d375cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3b5eb689e5343d8047bb7f0ed896868b8f17f9017724b4094cd70ea8be317b95->leave($__internal_3b5eb689e5343d8047bb7f0ed896868b8f17f9017724b4094cd70ea8be317b95_prof);

        
        $__internal_19d52ad66c2d576ab1310c9bc6dbf9098377546b29bd37df755dcbc41d375cb8->leave($__internal_19d52ad66c2d576ab1310c9bc6dbf9098377546b29bd37df755dcbc41d375cb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
