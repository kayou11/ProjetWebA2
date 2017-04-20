<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_93353d0255c8080c0c2473615d033ac2bb4d667c3b413905b9dafb26d170c660 extends Twig_Template
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
        $__internal_1f8ca607893ff30374fc55ca2790167c8500c740db47d07c6678a038791dbf01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8ca607893ff30374fc55ca2790167c8500c740db47d07c6678a038791dbf01->enter($__internal_1f8ca607893ff30374fc55ca2790167c8500c740db47d07c6678a038791dbf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2b29b8edc4f977710ef3f5c00bd1800d206296fe8e9c750d6e6d667e0fba2237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b29b8edc4f977710ef3f5c00bd1800d206296fe8e9c750d6e6d667e0fba2237->enter($__internal_2b29b8edc4f977710ef3f5c00bd1800d206296fe8e9c750d6e6d667e0fba2237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1f8ca607893ff30374fc55ca2790167c8500c740db47d07c6678a038791dbf01->leave($__internal_1f8ca607893ff30374fc55ca2790167c8500c740db47d07c6678a038791dbf01_prof);

        
        $__internal_2b29b8edc4f977710ef3f5c00bd1800d206296fe8e9c750d6e6d667e0fba2237->leave($__internal_2b29b8edc4f977710ef3f5c00bd1800d206296fe8e9c750d6e6d667e0fba2237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
