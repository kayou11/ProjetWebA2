<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fd2900e70ff3447453ba0028779a90ef85685c332cfe01701d19a0abdb517c68 extends Twig_Template
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
        $__internal_c8cef89e9b7db18a8f315bea5e0b378b4aec28975d31ef2e0acf837b05ddfdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8cef89e9b7db18a8f315bea5e0b378b4aec28975d31ef2e0acf837b05ddfdad->enter($__internal_c8cef89e9b7db18a8f315bea5e0b378b4aec28975d31ef2e0acf837b05ddfdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6d37bd2d6934477ca5dcc94d09f086bbfa91bc3124a056662a607ad2c8a6f197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d37bd2d6934477ca5dcc94d09f086bbfa91bc3124a056662a607ad2c8a6f197->enter($__internal_6d37bd2d6934477ca5dcc94d09f086bbfa91bc3124a056662a607ad2c8a6f197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c8cef89e9b7db18a8f315bea5e0b378b4aec28975d31ef2e0acf837b05ddfdad->leave($__internal_c8cef89e9b7db18a8f315bea5e0b378b4aec28975d31ef2e0acf837b05ddfdad_prof);

        
        $__internal_6d37bd2d6934477ca5dcc94d09f086bbfa91bc3124a056662a607ad2c8a6f197->leave($__internal_6d37bd2d6934477ca5dcc94d09f086bbfa91bc3124a056662a607ad2c8a6f197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
