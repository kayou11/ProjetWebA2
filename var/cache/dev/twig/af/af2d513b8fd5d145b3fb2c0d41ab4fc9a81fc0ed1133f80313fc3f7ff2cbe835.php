<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_839e27ef7d00ece4c00f32269d890b580a1d64753c0566709f2fd575ac70d665 extends Twig_Template
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
        $__internal_02bbe1d960e4a2c2fb75ea85a32b141314b8d0eed49eae60b7d6626d33e37242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02bbe1d960e4a2c2fb75ea85a32b141314b8d0eed49eae60b7d6626d33e37242->enter($__internal_02bbe1d960e4a2c2fb75ea85a32b141314b8d0eed49eae60b7d6626d33e37242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_eb294b112b50074c0f80d0b6a476504b787888c85ca66d21ae632de10f12baba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb294b112b50074c0f80d0b6a476504b787888c85ca66d21ae632de10f12baba->enter($__internal_eb294b112b50074c0f80d0b6a476504b787888c85ca66d21ae632de10f12baba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_02bbe1d960e4a2c2fb75ea85a32b141314b8d0eed49eae60b7d6626d33e37242->leave($__internal_02bbe1d960e4a2c2fb75ea85a32b141314b8d0eed49eae60b7d6626d33e37242_prof);

        
        $__internal_eb294b112b50074c0f80d0b6a476504b787888c85ca66d21ae632de10f12baba->leave($__internal_eb294b112b50074c0f80d0b6a476504b787888c85ca66d21ae632de10f12baba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
