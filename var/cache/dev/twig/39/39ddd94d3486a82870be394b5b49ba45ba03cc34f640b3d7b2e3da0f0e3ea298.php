<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_5ab0018aca991b4be76b40b92b23145505373e98c683afb23c9899817a820701 extends Twig_Template
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
        $__internal_53375d0ca22e91235fcd7f1786fe5ad532dcab2c3f25554d6d84d68289a35618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53375d0ca22e91235fcd7f1786fe5ad532dcab2c3f25554d6d84d68289a35618->enter($__internal_53375d0ca22e91235fcd7f1786fe5ad532dcab2c3f25554d6d84d68289a35618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_1732ee2dd88f5be69e141abaf75ff2429aeac4c6b0ed21297e094a5eaab2f0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1732ee2dd88f5be69e141abaf75ff2429aeac4c6b0ed21297e094a5eaab2f0c3->enter($__internal_1732ee2dd88f5be69e141abaf75ff2429aeac4c6b0ed21297e094a5eaab2f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_53375d0ca22e91235fcd7f1786fe5ad532dcab2c3f25554d6d84d68289a35618->leave($__internal_53375d0ca22e91235fcd7f1786fe5ad532dcab2c3f25554d6d84d68289a35618_prof);

        
        $__internal_1732ee2dd88f5be69e141abaf75ff2429aeac4c6b0ed21297e094a5eaab2f0c3->leave($__internal_1732ee2dd88f5be69e141abaf75ff2429aeac4c6b0ed21297e094a5eaab2f0c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
