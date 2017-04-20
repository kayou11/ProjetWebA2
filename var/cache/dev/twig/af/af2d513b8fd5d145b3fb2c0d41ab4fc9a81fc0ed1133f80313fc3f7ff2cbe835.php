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
        $__internal_04feff3c2de24d69a1963ff66f2ac8120f6117236ee1c3c66371564a9fba014e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04feff3c2de24d69a1963ff66f2ac8120f6117236ee1c3c66371564a9fba014e->enter($__internal_04feff3c2de24d69a1963ff66f2ac8120f6117236ee1c3c66371564a9fba014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1bc9c0ba20ab3bb667db676bdb45dd8522791ef9a476a27fd9e9515de5a6b2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc9c0ba20ab3bb667db676bdb45dd8522791ef9a476a27fd9e9515de5a6b2bf->enter($__internal_1bc9c0ba20ab3bb667db676bdb45dd8522791ef9a476a27fd9e9515de5a6b2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_04feff3c2de24d69a1963ff66f2ac8120f6117236ee1c3c66371564a9fba014e->leave($__internal_04feff3c2de24d69a1963ff66f2ac8120f6117236ee1c3c66371564a9fba014e_prof);

        
        $__internal_1bc9c0ba20ab3bb667db676bdb45dd8522791ef9a476a27fd9e9515de5a6b2bf->leave($__internal_1bc9c0ba20ab3bb667db676bdb45dd8522791ef9a476a27fd9e9515de5a6b2bf_prof);

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
