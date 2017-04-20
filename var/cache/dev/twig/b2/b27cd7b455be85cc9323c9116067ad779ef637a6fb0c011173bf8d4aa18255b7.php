<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ef8b4fafd9f28845f3ee8b99e1b43593dc18d113ddf22d3163075e1f3dfe1656 extends Twig_Template
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
        $__internal_ae01aee4a34b3e9474f383a244cfa43de3e99911e6ce7d94a7d1ff9d095f6e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae01aee4a34b3e9474f383a244cfa43de3e99911e6ce7d94a7d1ff9d095f6e37->enter($__internal_ae01aee4a34b3e9474f383a244cfa43de3e99911e6ce7d94a7d1ff9d095f6e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_aacf2caf585bc26123182715bd893fb35093740f3b5a5488207f9922cc15cdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacf2caf585bc26123182715bd893fb35093740f3b5a5488207f9922cc15cdd0->enter($__internal_aacf2caf585bc26123182715bd893fb35093740f3b5a5488207f9922cc15cdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ae01aee4a34b3e9474f383a244cfa43de3e99911e6ce7d94a7d1ff9d095f6e37->leave($__internal_ae01aee4a34b3e9474f383a244cfa43de3e99911e6ce7d94a7d1ff9d095f6e37_prof);

        
        $__internal_aacf2caf585bc26123182715bd893fb35093740f3b5a5488207f9922cc15cdd0->leave($__internal_aacf2caf585bc26123182715bd893fb35093740f3b5a5488207f9922cc15cdd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
