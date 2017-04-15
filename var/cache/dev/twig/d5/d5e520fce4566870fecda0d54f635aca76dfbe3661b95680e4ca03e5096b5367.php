<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_43fe6596bdb42ad6c3ead10be7ea2be091690a0141729e127cc1265f16939e5c extends Twig_Template
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
        $__internal_3734f449a9da0531c9d50f4025e9b3ad6bc11b414bbeb84c2e4db6e478c2f024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3734f449a9da0531c9d50f4025e9b3ad6bc11b414bbeb84c2e4db6e478c2f024->enter($__internal_3734f449a9da0531c9d50f4025e9b3ad6bc11b414bbeb84c2e4db6e478c2f024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_407ba2d018be850bf54eae78ac3f7c24f86b9dc26e0f7ffcdf00df8d8dcc0552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407ba2d018be850bf54eae78ac3f7c24f86b9dc26e0f7ffcdf00df8d8dcc0552->enter($__internal_407ba2d018be850bf54eae78ac3f7c24f86b9dc26e0f7ffcdf00df8d8dcc0552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3734f449a9da0531c9d50f4025e9b3ad6bc11b414bbeb84c2e4db6e478c2f024->leave($__internal_3734f449a9da0531c9d50f4025e9b3ad6bc11b414bbeb84c2e4db6e478c2f024_prof);

        
        $__internal_407ba2d018be850bf54eae78ac3f7c24f86b9dc26e0f7ffcdf00df8d8dcc0552->leave($__internal_407ba2d018be850bf54eae78ac3f7c24f86b9dc26e0f7ffcdf00df8d8dcc0552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
