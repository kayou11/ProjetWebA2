<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ae516759866fc87861ca57f61ff23d75c62a09136b8954387dd71a97b26a3a4f extends Twig_Template
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
        $__internal_fe89d71581570c6f0060a1c01c79d7959e0095591abf4e5e0b70fa73938a0964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe89d71581570c6f0060a1c01c79d7959e0095591abf4e5e0b70fa73938a0964->enter($__internal_fe89d71581570c6f0060a1c01c79d7959e0095591abf4e5e0b70fa73938a0964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a760b2f918abdeb5d2ccc12a4ed83ab0fd0990f7bef98ec3f7d44fc744f11bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a760b2f918abdeb5d2ccc12a4ed83ab0fd0990f7bef98ec3f7d44fc744f11bba->enter($__internal_a760b2f918abdeb5d2ccc12a4ed83ab0fd0990f7bef98ec3f7d44fc744f11bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fe89d71581570c6f0060a1c01c79d7959e0095591abf4e5e0b70fa73938a0964->leave($__internal_fe89d71581570c6f0060a1c01c79d7959e0095591abf4e5e0b70fa73938a0964_prof);

        
        $__internal_a760b2f918abdeb5d2ccc12a4ed83ab0fd0990f7bef98ec3f7d44fc744f11bba->leave($__internal_a760b2f918abdeb5d2ccc12a4ed83ab0fd0990f7bef98ec3f7d44fc744f11bba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
