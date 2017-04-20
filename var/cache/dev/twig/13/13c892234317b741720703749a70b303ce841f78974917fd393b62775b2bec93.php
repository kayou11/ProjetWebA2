<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9788ca648ccf6b941eb07a8728f0418a906c9abeeaf12aad56ae48d339218657 extends Twig_Template
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
        $__internal_ab67ca926ae42ca771a23b177b1609a0091743475054ba8a9c93ec07922a2c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab67ca926ae42ca771a23b177b1609a0091743475054ba8a9c93ec07922a2c3b->enter($__internal_ab67ca926ae42ca771a23b177b1609a0091743475054ba8a9c93ec07922a2c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6e0f79019c399b5d449070c9bb218729daafaa5b75d500a15a76fdff65661fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0f79019c399b5d449070c9bb218729daafaa5b75d500a15a76fdff65661fba->enter($__internal_6e0f79019c399b5d449070c9bb218729daafaa5b75d500a15a76fdff65661fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ab67ca926ae42ca771a23b177b1609a0091743475054ba8a9c93ec07922a2c3b->leave($__internal_ab67ca926ae42ca771a23b177b1609a0091743475054ba8a9c93ec07922a2c3b_prof);

        
        $__internal_6e0f79019c399b5d449070c9bb218729daafaa5b75d500a15a76fdff65661fba->leave($__internal_6e0f79019c399b5d449070c9bb218729daafaa5b75d500a15a76fdff65661fba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
