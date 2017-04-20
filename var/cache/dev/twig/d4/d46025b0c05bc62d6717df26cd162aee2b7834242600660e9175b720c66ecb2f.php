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
        $__internal_af9feebd52893ff3820bcd8a76554a93117536dcacc6a8345756cea317d50177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9feebd52893ff3820bcd8a76554a93117536dcacc6a8345756cea317d50177->enter($__internal_af9feebd52893ff3820bcd8a76554a93117536dcacc6a8345756cea317d50177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_20f58066c2bdcfbc182cf4dc08f34bc10b05d3d503bcaaec7814dba34718d1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f58066c2bdcfbc182cf4dc08f34bc10b05d3d503bcaaec7814dba34718d1c3->enter($__internal_20f58066c2bdcfbc182cf4dc08f34bc10b05d3d503bcaaec7814dba34718d1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_af9feebd52893ff3820bcd8a76554a93117536dcacc6a8345756cea317d50177->leave($__internal_af9feebd52893ff3820bcd8a76554a93117536dcacc6a8345756cea317d50177_prof);

        
        $__internal_20f58066c2bdcfbc182cf4dc08f34bc10b05d3d503bcaaec7814dba34718d1c3->leave($__internal_20f58066c2bdcfbc182cf4dc08f34bc10b05d3d503bcaaec7814dba34718d1c3_prof);

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
