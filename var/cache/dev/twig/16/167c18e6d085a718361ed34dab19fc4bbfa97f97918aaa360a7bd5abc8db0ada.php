<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2c1f27aaf62dec752369fc09704e14354bed696cf3a29c6ba01ec1bca5748a1c extends Twig_Template
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
        $__internal_618cc2df261a38447556947c60dd5e7c77452bfc13672d52a0981569aba9d2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618cc2df261a38447556947c60dd5e7c77452bfc13672d52a0981569aba9d2f1->enter($__internal_618cc2df261a38447556947c60dd5e7c77452bfc13672d52a0981569aba9d2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bd64cde2ce8e2d2a69e2f9555b2d890a3572e087ced1cd0153cd3864901d04ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd64cde2ce8e2d2a69e2f9555b2d890a3572e087ced1cd0153cd3864901d04ff->enter($__internal_bd64cde2ce8e2d2a69e2f9555b2d890a3572e087ced1cd0153cd3864901d04ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_618cc2df261a38447556947c60dd5e7c77452bfc13672d52a0981569aba9d2f1->leave($__internal_618cc2df261a38447556947c60dd5e7c77452bfc13672d52a0981569aba9d2f1_prof);

        
        $__internal_bd64cde2ce8e2d2a69e2f9555b2d890a3572e087ced1cd0153cd3864901d04ff->leave($__internal_bd64cde2ce8e2d2a69e2f9555b2d890a3572e087ced1cd0153cd3864901d04ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
