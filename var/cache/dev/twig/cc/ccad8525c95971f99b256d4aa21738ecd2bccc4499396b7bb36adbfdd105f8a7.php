<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c68136ec4bf248930ef126a6429a1cd4146e8a97ff976a0984ff73d4c584084b extends Twig_Template
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
        $__internal_a779353aff032b48d3c52270fb36d15b8b46d2754f7e7d7e743239b2c32119aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a779353aff032b48d3c52270fb36d15b8b46d2754f7e7d7e743239b2c32119aa->enter($__internal_a779353aff032b48d3c52270fb36d15b8b46d2754f7e7d7e743239b2c32119aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6c4652ad31689f74c7c0d5fe486ea040da9c4011cb328a04daadadd5fd257705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4652ad31689f74c7c0d5fe486ea040da9c4011cb328a04daadadd5fd257705->enter($__internal_6c4652ad31689f74c7c0d5fe486ea040da9c4011cb328a04daadadd5fd257705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a779353aff032b48d3c52270fb36d15b8b46d2754f7e7d7e743239b2c32119aa->leave($__internal_a779353aff032b48d3c52270fb36d15b8b46d2754f7e7d7e743239b2c32119aa_prof);

        
        $__internal_6c4652ad31689f74c7c0d5fe486ea040da9c4011cb328a04daadadd5fd257705->leave($__internal_6c4652ad31689f74c7c0d5fe486ea040da9c4011cb328a04daadadd5fd257705_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
