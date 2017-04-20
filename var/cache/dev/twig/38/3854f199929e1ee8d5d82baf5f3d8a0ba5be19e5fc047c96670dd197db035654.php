<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5b51a63eab3c988e410dd8b174d8195850e466d4a10c68f1bef62e763ab5a0db extends Twig_Template
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
        $__internal_94207c1b235f83663330a6d2be31ffee9d2ea907dd1c6130b5efb9bb24ba20a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94207c1b235f83663330a6d2be31ffee9d2ea907dd1c6130b5efb9bb24ba20a0->enter($__internal_94207c1b235f83663330a6d2be31ffee9d2ea907dd1c6130b5efb9bb24ba20a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2f5928cf7b2634b8a9424f2c2cc9c3b6ad681c0defcf24c073cfd53e73881e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5928cf7b2634b8a9424f2c2cc9c3b6ad681c0defcf24c073cfd53e73881e4a->enter($__internal_2f5928cf7b2634b8a9424f2c2cc9c3b6ad681c0defcf24c073cfd53e73881e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_94207c1b235f83663330a6d2be31ffee9d2ea907dd1c6130b5efb9bb24ba20a0->leave($__internal_94207c1b235f83663330a6d2be31ffee9d2ea907dd1c6130b5efb9bb24ba20a0_prof);

        
        $__internal_2f5928cf7b2634b8a9424f2c2cc9c3b6ad681c0defcf24c073cfd53e73881e4a->leave($__internal_2f5928cf7b2634b8a9424f2c2cc9c3b6ad681c0defcf24c073cfd53e73881e4a_prof);

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
