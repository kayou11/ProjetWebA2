<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_53642aff8c12dd90b24d74e2f620d5e47cc919ba09a72736585ee5ebc36038d2 extends Twig_Template
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
        $__internal_5d664c02168efcee4b56b6cff485b9221eeef7ed9061f9fe2ef915b38ca42b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d664c02168efcee4b56b6cff485b9221eeef7ed9061f9fe2ef915b38ca42b6b->enter($__internal_5d664c02168efcee4b56b6cff485b9221eeef7ed9061f9fe2ef915b38ca42b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c2ca06fb089ed5c1e0646c9bf8dde0a3ff8a16255f1e05448d94f9c82f0ef4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ca06fb089ed5c1e0646c9bf8dde0a3ff8a16255f1e05448d94f9c82f0ef4ec->enter($__internal_c2ca06fb089ed5c1e0646c9bf8dde0a3ff8a16255f1e05448d94f9c82f0ef4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5d664c02168efcee4b56b6cff485b9221eeef7ed9061f9fe2ef915b38ca42b6b->leave($__internal_5d664c02168efcee4b56b6cff485b9221eeef7ed9061f9fe2ef915b38ca42b6b_prof);

        
        $__internal_c2ca06fb089ed5c1e0646c9bf8dde0a3ff8a16255f1e05448d94f9c82f0ef4ec->leave($__internal_c2ca06fb089ed5c1e0646c9bf8dde0a3ff8a16255f1e05448d94f9c82f0ef4ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
