<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ebf4936b0c9b16378d5f370ff23ad1e071cca7ed936d7d6a2fc649e04363d031 extends Twig_Template
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
        $__internal_693efc04d113bbb6e088d1b214f97f4163af4a1a69f2b2f75ed6aaacf345e676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693efc04d113bbb6e088d1b214f97f4163af4a1a69f2b2f75ed6aaacf345e676->enter($__internal_693efc04d113bbb6e088d1b214f97f4163af4a1a69f2b2f75ed6aaacf345e676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b10e1335a57a9619026a6ae95300c4d0069eabe7487f10bf91308dbd3ea65bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10e1335a57a9619026a6ae95300c4d0069eabe7487f10bf91308dbd3ea65bf8->enter($__internal_b10e1335a57a9619026a6ae95300c4d0069eabe7487f10bf91308dbd3ea65bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_693efc04d113bbb6e088d1b214f97f4163af4a1a69f2b2f75ed6aaacf345e676->leave($__internal_693efc04d113bbb6e088d1b214f97f4163af4a1a69f2b2f75ed6aaacf345e676_prof);

        
        $__internal_b10e1335a57a9619026a6ae95300c4d0069eabe7487f10bf91308dbd3ea65bf8->leave($__internal_b10e1335a57a9619026a6ae95300c4d0069eabe7487f10bf91308dbd3ea65bf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
