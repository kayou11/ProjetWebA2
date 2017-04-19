<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c700bcc3c8479507ceef68ab7b21b4ea0144cfe4197f7cee2629769889fd01b3 extends Twig_Template
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
        $__internal_95e6a6ad0da0d10df5caa712c07b1e6770e84061aa87aec595cc38fab3b5628a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e6a6ad0da0d10df5caa712c07b1e6770e84061aa87aec595cc38fab3b5628a->enter($__internal_95e6a6ad0da0d10df5caa712c07b1e6770e84061aa87aec595cc38fab3b5628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4f27c39c3856fc94db6bc8d80d7c0c4d2acbb97f1ad86c7bc7bcd52d5969159b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f27c39c3856fc94db6bc8d80d7c0c4d2acbb97f1ad86c7bc7bcd52d5969159b->enter($__internal_4f27c39c3856fc94db6bc8d80d7c0c4d2acbb97f1ad86c7bc7bcd52d5969159b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_95e6a6ad0da0d10df5caa712c07b1e6770e84061aa87aec595cc38fab3b5628a->leave($__internal_95e6a6ad0da0d10df5caa712c07b1e6770e84061aa87aec595cc38fab3b5628a_prof);

        
        $__internal_4f27c39c3856fc94db6bc8d80d7c0c4d2acbb97f1ad86c7bc7bcd52d5969159b->leave($__internal_4f27c39c3856fc94db6bc8d80d7c0c4d2acbb97f1ad86c7bc7bcd52d5969159b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
