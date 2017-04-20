<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2ac3f553132d6abe7a22f00686b179963c197ed57c76ae430189c3be8388ed58 extends Twig_Template
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
        $__internal_a4ced4c95c5a388a4dd960f89c1ed6e1d5c64fe140bd6c5080ff47c2ec6fe9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ced4c95c5a388a4dd960f89c1ed6e1d5c64fe140bd6c5080ff47c2ec6fe9be->enter($__internal_a4ced4c95c5a388a4dd960f89c1ed6e1d5c64fe140bd6c5080ff47c2ec6fe9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4029d423cd079306e786d77b572150c0a2e40012790a1763e4b1f6aae11de7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4029d423cd079306e786d77b572150c0a2e40012790a1763e4b1f6aae11de7eb->enter($__internal_4029d423cd079306e786d77b572150c0a2e40012790a1763e4b1f6aae11de7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a4ced4c95c5a388a4dd960f89c1ed6e1d5c64fe140bd6c5080ff47c2ec6fe9be->leave($__internal_a4ced4c95c5a388a4dd960f89c1ed6e1d5c64fe140bd6c5080ff47c2ec6fe9be_prof);

        
        $__internal_4029d423cd079306e786d77b572150c0a2e40012790a1763e4b1f6aae11de7eb->leave($__internal_4029d423cd079306e786d77b572150c0a2e40012790a1763e4b1f6aae11de7eb_prof);

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
