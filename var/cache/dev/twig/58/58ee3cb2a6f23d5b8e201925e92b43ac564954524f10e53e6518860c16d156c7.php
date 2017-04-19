<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_409b1a5c9b7f0b7abb0de15027d387732a8408ee51bd61b566a3a8d157eb5ecb extends Twig_Template
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
        $__internal_660efd71d23e3b3c5a0861681a98be1e3fbc97d92fbb29848fa721bde701659e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660efd71d23e3b3c5a0861681a98be1e3fbc97d92fbb29848fa721bde701659e->enter($__internal_660efd71d23e3b3c5a0861681a98be1e3fbc97d92fbb29848fa721bde701659e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7ee8a2a7dac5f04c46f6eaccf035f14954d9895f6e3e5c363dc50a9012b6ff71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee8a2a7dac5f04c46f6eaccf035f14954d9895f6e3e5c363dc50a9012b6ff71->enter($__internal_7ee8a2a7dac5f04c46f6eaccf035f14954d9895f6e3e5c363dc50a9012b6ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_660efd71d23e3b3c5a0861681a98be1e3fbc97d92fbb29848fa721bde701659e->leave($__internal_660efd71d23e3b3c5a0861681a98be1e3fbc97d92fbb29848fa721bde701659e_prof);

        
        $__internal_7ee8a2a7dac5f04c46f6eaccf035f14954d9895f6e3e5c363dc50a9012b6ff71->leave($__internal_7ee8a2a7dac5f04c46f6eaccf035f14954d9895f6e3e5c363dc50a9012b6ff71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
