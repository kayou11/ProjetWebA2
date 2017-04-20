<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f9b28f3820ab8419d1218afe9003d6cb4ba8ff0fc287837ba90758d5cc1f6f9a extends Twig_Template
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
        $__internal_5a8cd04b1605027c9f0cab05225f76f084aeef011c8dbb8855e0196ad485a2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8cd04b1605027c9f0cab05225f76f084aeef011c8dbb8855e0196ad485a2da->enter($__internal_5a8cd04b1605027c9f0cab05225f76f084aeef011c8dbb8855e0196ad485a2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_cf0c3d5dc71253245e7d3961e27472f0ba7c559b5417167ab885c382424c0d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0c3d5dc71253245e7d3961e27472f0ba7c559b5417167ab885c382424c0d62->enter($__internal_cf0c3d5dc71253245e7d3961e27472f0ba7c559b5417167ab885c382424c0d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5a8cd04b1605027c9f0cab05225f76f084aeef011c8dbb8855e0196ad485a2da->leave($__internal_5a8cd04b1605027c9f0cab05225f76f084aeef011c8dbb8855e0196ad485a2da_prof);

        
        $__internal_cf0c3d5dc71253245e7d3961e27472f0ba7c559b5417167ab885c382424c0d62->leave($__internal_cf0c3d5dc71253245e7d3961e27472f0ba7c559b5417167ab885c382424c0d62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
