<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8c02d25bda6ce2ab7aa2f628d255e4a1cded73a4c7ea94a2c57f15a127975459 extends Twig_Template
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
        $__internal_908daa7f71c1544c8aa45ccf44574be57d2c23629d435e090092349b89d67d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908daa7f71c1544c8aa45ccf44574be57d2c23629d435e090092349b89d67d66->enter($__internal_908daa7f71c1544c8aa45ccf44574be57d2c23629d435e090092349b89d67d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c9da21ab7a022b67abded8f13ed963bd1150c72f454b1f597b45f7983462d5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9da21ab7a022b67abded8f13ed963bd1150c72f454b1f597b45f7983462d5d2->enter($__internal_c9da21ab7a022b67abded8f13ed963bd1150c72f454b1f597b45f7983462d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_908daa7f71c1544c8aa45ccf44574be57d2c23629d435e090092349b89d67d66->leave($__internal_908daa7f71c1544c8aa45ccf44574be57d2c23629d435e090092349b89d67d66_prof);

        
        $__internal_c9da21ab7a022b67abded8f13ed963bd1150c72f454b1f597b45f7983462d5d2->leave($__internal_c9da21ab7a022b67abded8f13ed963bd1150c72f454b1f597b45f7983462d5d2_prof);

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
