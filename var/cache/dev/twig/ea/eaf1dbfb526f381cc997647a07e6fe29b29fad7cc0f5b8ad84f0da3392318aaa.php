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
        $__internal_2fc128b66f77ca3813249f0333f91702b9fcc881b66f9640b20f3d2b2e2edaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc128b66f77ca3813249f0333f91702b9fcc881b66f9640b20f3d2b2e2edaf4->enter($__internal_2fc128b66f77ca3813249f0333f91702b9fcc881b66f9640b20f3d2b2e2edaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f4ba3dbbfb1c5b84fee130fbf8c40c9e89485e7fc885faa09166b6348fce0be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ba3dbbfb1c5b84fee130fbf8c40c9e89485e7fc885faa09166b6348fce0be5->enter($__internal_f4ba3dbbfb1c5b84fee130fbf8c40c9e89485e7fc885faa09166b6348fce0be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2fc128b66f77ca3813249f0333f91702b9fcc881b66f9640b20f3d2b2e2edaf4->leave($__internal_2fc128b66f77ca3813249f0333f91702b9fcc881b66f9640b20f3d2b2e2edaf4_prof);

        
        $__internal_f4ba3dbbfb1c5b84fee130fbf8c40c9e89485e7fc885faa09166b6348fce0be5->leave($__internal_f4ba3dbbfb1c5b84fee130fbf8c40c9e89485e7fc885faa09166b6348fce0be5_prof);

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
