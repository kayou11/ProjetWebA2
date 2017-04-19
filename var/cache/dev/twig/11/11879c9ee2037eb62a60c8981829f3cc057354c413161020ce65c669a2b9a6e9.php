<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2d6cd1fad0062856a5e1090ba45331847d6d6f66b32d9f95d0e5dc5bcb0b57fc extends Twig_Template
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
        $__internal_3a462ed5d2bfc19305a45ecdc28268c05cc4d7cdb1dc8b379c262ad93a55cfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a462ed5d2bfc19305a45ecdc28268c05cc4d7cdb1dc8b379c262ad93a55cfd9->enter($__internal_3a462ed5d2bfc19305a45ecdc28268c05cc4d7cdb1dc8b379c262ad93a55cfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_95b8bf708d6491e6102690037b0eb876d1a5f4bae6f0670fd6d10d681e7c1aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b8bf708d6491e6102690037b0eb876d1a5f4bae6f0670fd6d10d681e7c1aba->enter($__internal_95b8bf708d6491e6102690037b0eb876d1a5f4bae6f0670fd6d10d681e7c1aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3a462ed5d2bfc19305a45ecdc28268c05cc4d7cdb1dc8b379c262ad93a55cfd9->leave($__internal_3a462ed5d2bfc19305a45ecdc28268c05cc4d7cdb1dc8b379c262ad93a55cfd9_prof);

        
        $__internal_95b8bf708d6491e6102690037b0eb876d1a5f4bae6f0670fd6d10d681e7c1aba->leave($__internal_95b8bf708d6491e6102690037b0eb876d1a5f4bae6f0670fd6d10d681e7c1aba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
