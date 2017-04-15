<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ba6cd46e6ae20ebd426cdd0cd9e6b193852fb18e6aae9905901ce80418e07844 extends Twig_Template
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
        $__internal_00b5ef9aae008c9d48a8fa8014b154286da8c84646d8bfe755a1fcfdbe20329b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b5ef9aae008c9d48a8fa8014b154286da8c84646d8bfe755a1fcfdbe20329b->enter($__internal_00b5ef9aae008c9d48a8fa8014b154286da8c84646d8bfe755a1fcfdbe20329b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1e6a84ca5c360587592d51cbd5b18bbb6e5ffcab23a88adff7fab9bb62956a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6a84ca5c360587592d51cbd5b18bbb6e5ffcab23a88adff7fab9bb62956a15->enter($__internal_1e6a84ca5c360587592d51cbd5b18bbb6e5ffcab23a88adff7fab9bb62956a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_00b5ef9aae008c9d48a8fa8014b154286da8c84646d8bfe755a1fcfdbe20329b->leave($__internal_00b5ef9aae008c9d48a8fa8014b154286da8c84646d8bfe755a1fcfdbe20329b_prof);

        
        $__internal_1e6a84ca5c360587592d51cbd5b18bbb6e5ffcab23a88adff7fab9bb62956a15->leave($__internal_1e6a84ca5c360587592d51cbd5b18bbb6e5ffcab23a88adff7fab9bb62956a15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
