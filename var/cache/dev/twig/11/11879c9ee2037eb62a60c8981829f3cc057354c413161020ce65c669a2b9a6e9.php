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
        $__internal_ca7082ed8c9294d78a9705d4a4ea12c2c5d856367b34f7f9cff60d8f885a9612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7082ed8c9294d78a9705d4a4ea12c2c5d856367b34f7f9cff60d8f885a9612->enter($__internal_ca7082ed8c9294d78a9705d4a4ea12c2c5d856367b34f7f9cff60d8f885a9612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a12dccb94a6c316f50431b96af3f1556082bf4b08ac909aabdbcd2f456754193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12dccb94a6c316f50431b96af3f1556082bf4b08ac909aabdbcd2f456754193->enter($__internal_a12dccb94a6c316f50431b96af3f1556082bf4b08ac909aabdbcd2f456754193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ca7082ed8c9294d78a9705d4a4ea12c2c5d856367b34f7f9cff60d8f885a9612->leave($__internal_ca7082ed8c9294d78a9705d4a4ea12c2c5d856367b34f7f9cff60d8f885a9612_prof);

        
        $__internal_a12dccb94a6c316f50431b96af3f1556082bf4b08ac909aabdbcd2f456754193->leave($__internal_a12dccb94a6c316f50431b96af3f1556082bf4b08ac909aabdbcd2f456754193_prof);

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
