<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_234a70c19593755fcb212b2694316865a84fd757f0b9d02915b3b1dbb4a98b58 extends Twig_Template
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
        $__internal_aff01488c130c9628a13f050d7d372a64cd245ff40531b6b3cfec7b2810acf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff01488c130c9628a13f050d7d372a64cd245ff40531b6b3cfec7b2810acf1c->enter($__internal_aff01488c130c9628a13f050d7d372a64cd245ff40531b6b3cfec7b2810acf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b9262070daa524261b0e3a6e84951e0eefa466df6d84bbf8de071c83ea3d46d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9262070daa524261b0e3a6e84951e0eefa466df6d84bbf8de071c83ea3d46d3->enter($__internal_b9262070daa524261b0e3a6e84951e0eefa466df6d84bbf8de071c83ea3d46d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aff01488c130c9628a13f050d7d372a64cd245ff40531b6b3cfec7b2810acf1c->leave($__internal_aff01488c130c9628a13f050d7d372a64cd245ff40531b6b3cfec7b2810acf1c_prof);

        
        $__internal_b9262070daa524261b0e3a6e84951e0eefa466df6d84bbf8de071c83ea3d46d3->leave($__internal_b9262070daa524261b0e3a6e84951e0eefa466df6d84bbf8de071c83ea3d46d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
