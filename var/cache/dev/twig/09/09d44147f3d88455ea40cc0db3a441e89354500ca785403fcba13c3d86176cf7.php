<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_bb29fa83a2545a6269417d8a5e843f478ba0abf93afb85d18a5a28f097a05674 extends Twig_Template
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
        $__internal_785ed4374371cbad836eba8fa5f839a32b8f7622c1f748afe2c30ede5bcca3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785ed4374371cbad836eba8fa5f839a32b8f7622c1f748afe2c30ede5bcca3e5->enter($__internal_785ed4374371cbad836eba8fa5f839a32b8f7622c1f748afe2c30ede5bcca3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_6ffb81cae539ef16fd85a8117eda433f00b1bed726315aa0f6ff78024a66c960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffb81cae539ef16fd85a8117eda433f00b1bed726315aa0f6ff78024a66c960->enter($__internal_6ffb81cae539ef16fd85a8117eda433f00b1bed726315aa0f6ff78024a66c960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_785ed4374371cbad836eba8fa5f839a32b8f7622c1f748afe2c30ede5bcca3e5->leave($__internal_785ed4374371cbad836eba8fa5f839a32b8f7622c1f748afe2c30ede5bcca3e5_prof);

        
        $__internal_6ffb81cae539ef16fd85a8117eda433f00b1bed726315aa0f6ff78024a66c960->leave($__internal_6ffb81cae539ef16fd85a8117eda433f00b1bed726315aa0f6ff78024a66c960_prof);

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
