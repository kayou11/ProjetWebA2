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
        $__internal_6abb63c14b8b6893f07a657598ddb42951e9bd3076318555b2f321fab89b1eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abb63c14b8b6893f07a657598ddb42951e9bd3076318555b2f321fab89b1eb7->enter($__internal_6abb63c14b8b6893f07a657598ddb42951e9bd3076318555b2f321fab89b1eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_29fbc3f7c8d97bb2751f6e0f5bd711a92129b8e705059da85181e245f7d5de33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fbc3f7c8d97bb2751f6e0f5bd711a92129b8e705059da85181e245f7d5de33->enter($__internal_29fbc3f7c8d97bb2751f6e0f5bd711a92129b8e705059da85181e245f7d5de33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6abb63c14b8b6893f07a657598ddb42951e9bd3076318555b2f321fab89b1eb7->leave($__internal_6abb63c14b8b6893f07a657598ddb42951e9bd3076318555b2f321fab89b1eb7_prof);

        
        $__internal_29fbc3f7c8d97bb2751f6e0f5bd711a92129b8e705059da85181e245f7d5de33->leave($__internal_29fbc3f7c8d97bb2751f6e0f5bd711a92129b8e705059da85181e245f7d5de33_prof);

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
