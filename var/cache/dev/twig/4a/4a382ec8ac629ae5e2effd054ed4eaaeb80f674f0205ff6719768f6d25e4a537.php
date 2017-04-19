<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_94641d383bc9b83346974321ccd4200458da37a2b5841c898dfff07f045dc337 extends Twig_Template
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
        $__internal_20a99aaf81db8f222484af29649969709b6c474320899dc808526d7dcfd2b2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a99aaf81db8f222484af29649969709b6c474320899dc808526d7dcfd2b2b0->enter($__internal_20a99aaf81db8f222484af29649969709b6c474320899dc808526d7dcfd2b2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_46c93f57fc98dbd60e56d2a63c221cbf6a27d026eef993f410582a884232099a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c93f57fc98dbd60e56d2a63c221cbf6a27d026eef993f410582a884232099a->enter($__internal_46c93f57fc98dbd60e56d2a63c221cbf6a27d026eef993f410582a884232099a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_20a99aaf81db8f222484af29649969709b6c474320899dc808526d7dcfd2b2b0->leave($__internal_20a99aaf81db8f222484af29649969709b6c474320899dc808526d7dcfd2b2b0_prof);

        
        $__internal_46c93f57fc98dbd60e56d2a63c221cbf6a27d026eef993f410582a884232099a->leave($__internal_46c93f57fc98dbd60e56d2a63c221cbf6a27d026eef993f410582a884232099a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
