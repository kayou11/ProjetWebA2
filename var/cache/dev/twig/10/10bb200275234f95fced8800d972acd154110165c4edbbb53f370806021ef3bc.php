<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_22e45404f785aa11aba524d66b3c9a341fc7ff553eb635c7937da75f06c70fbd extends Twig_Template
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
        $__internal_5f10ffac8a3f719b046990b87c447a594e8c0f581cec1f50beed8ff0d220adf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f10ffac8a3f719b046990b87c447a594e8c0f581cec1f50beed8ff0d220adf4->enter($__internal_5f10ffac8a3f719b046990b87c447a594e8c0f581cec1f50beed8ff0d220adf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f658a967222164ecc833c74453a6a284dc837bdaefff895da0009d4b71cc75f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f658a967222164ecc833c74453a6a284dc837bdaefff895da0009d4b71cc75f5->enter($__internal_f658a967222164ecc833c74453a6a284dc837bdaefff895da0009d4b71cc75f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5f10ffac8a3f719b046990b87c447a594e8c0f581cec1f50beed8ff0d220adf4->leave($__internal_5f10ffac8a3f719b046990b87c447a594e8c0f581cec1f50beed8ff0d220adf4_prof);

        
        $__internal_f658a967222164ecc833c74453a6a284dc837bdaefff895da0009d4b71cc75f5->leave($__internal_f658a967222164ecc833c74453a6a284dc837bdaefff895da0009d4b71cc75f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
