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
        $__internal_293969508430dd75ace703098984e8f68db678021c921f9a3a83d2ee09c25fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293969508430dd75ace703098984e8f68db678021c921f9a3a83d2ee09c25fe7->enter($__internal_293969508430dd75ace703098984e8f68db678021c921f9a3a83d2ee09c25fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_dc26d63c41ffc5e90de0a30fde83792ffca2adc4f8bfd711522c5e95d997cd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc26d63c41ffc5e90de0a30fde83792ffca2adc4f8bfd711522c5e95d997cd86->enter($__internal_dc26d63c41ffc5e90de0a30fde83792ffca2adc4f8bfd711522c5e95d997cd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_293969508430dd75ace703098984e8f68db678021c921f9a3a83d2ee09c25fe7->leave($__internal_293969508430dd75ace703098984e8f68db678021c921f9a3a83d2ee09c25fe7_prof);

        
        $__internal_dc26d63c41ffc5e90de0a30fde83792ffca2adc4f8bfd711522c5e95d997cd86->leave($__internal_dc26d63c41ffc5e90de0a30fde83792ffca2adc4f8bfd711522c5e95d997cd86_prof);

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
