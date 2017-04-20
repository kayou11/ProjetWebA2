<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_01703813334bac9d231722eddab1b7964c251a53c383720a6bf5ea44e60be576 extends Twig_Template
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
        $__internal_ba19ebf491ff118a24c125d79f607e12e37937943e6d286994fc6675c686f9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba19ebf491ff118a24c125d79f607e12e37937943e6d286994fc6675c686f9d4->enter($__internal_ba19ebf491ff118a24c125d79f607e12e37937943e6d286994fc6675c686f9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cae4b9918541f796088c4077e2ca47aecffc1e2dfa8e7ea7c49981c30c3eb223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae4b9918541f796088c4077e2ca47aecffc1e2dfa8e7ea7c49981c30c3eb223->enter($__internal_cae4b9918541f796088c4077e2ca47aecffc1e2dfa8e7ea7c49981c30c3eb223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ba19ebf491ff118a24c125d79f607e12e37937943e6d286994fc6675c686f9d4->leave($__internal_ba19ebf491ff118a24c125d79f607e12e37937943e6d286994fc6675c686f9d4_prof);

        
        $__internal_cae4b9918541f796088c4077e2ca47aecffc1e2dfa8e7ea7c49981c30c3eb223->leave($__internal_cae4b9918541f796088c4077e2ca47aecffc1e2dfa8e7ea7c49981c30c3eb223_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
