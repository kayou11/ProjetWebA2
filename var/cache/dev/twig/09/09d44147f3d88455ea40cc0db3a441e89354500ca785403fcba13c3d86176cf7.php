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
        $__internal_8cc6667aaed0a53ea049a152c0a4b744fbf4c3ecaa8a69b43a18c47acfd6e76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc6667aaed0a53ea049a152c0a4b744fbf4c3ecaa8a69b43a18c47acfd6e76e->enter($__internal_8cc6667aaed0a53ea049a152c0a4b744fbf4c3ecaa8a69b43a18c47acfd6e76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_d5301bbaf561abc165dd302d187c8cb3ed621004211857765c0809338a8f1522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5301bbaf561abc165dd302d187c8cb3ed621004211857765c0809338a8f1522->enter($__internal_d5301bbaf561abc165dd302d187c8cb3ed621004211857765c0809338a8f1522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_8cc6667aaed0a53ea049a152c0a4b744fbf4c3ecaa8a69b43a18c47acfd6e76e->leave($__internal_8cc6667aaed0a53ea049a152c0a4b744fbf4c3ecaa8a69b43a18c47acfd6e76e_prof);

        
        $__internal_d5301bbaf561abc165dd302d187c8cb3ed621004211857765c0809338a8f1522->leave($__internal_d5301bbaf561abc165dd302d187c8cb3ed621004211857765c0809338a8f1522_prof);

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
