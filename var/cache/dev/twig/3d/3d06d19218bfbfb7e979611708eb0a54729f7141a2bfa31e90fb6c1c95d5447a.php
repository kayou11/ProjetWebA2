<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d343c1c5f394c2cda34b9b582847123cc411725b768776c879325e1c8782516e extends Twig_Template
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
        $__internal_ec1f14c2d217b99e95cde64be76020c9cf7f4776148e33ab9b5b42de32fe2b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1f14c2d217b99e95cde64be76020c9cf7f4776148e33ab9b5b42de32fe2b7e->enter($__internal_ec1f14c2d217b99e95cde64be76020c9cf7f4776148e33ab9b5b42de32fe2b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0f7b73da7d65005e6b76a727d2e05b569af6e61c2779b5a6a413b7614e372fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7b73da7d65005e6b76a727d2e05b569af6e61c2779b5a6a413b7614e372fe0->enter($__internal_0f7b73da7d65005e6b76a727d2e05b569af6e61c2779b5a6a413b7614e372fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ec1f14c2d217b99e95cde64be76020c9cf7f4776148e33ab9b5b42de32fe2b7e->leave($__internal_ec1f14c2d217b99e95cde64be76020c9cf7f4776148e33ab9b5b42de32fe2b7e_prof);

        
        $__internal_0f7b73da7d65005e6b76a727d2e05b569af6e61c2779b5a6a413b7614e372fe0->leave($__internal_0f7b73da7d65005e6b76a727d2e05b569af6e61c2779b5a6a413b7614e372fe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
