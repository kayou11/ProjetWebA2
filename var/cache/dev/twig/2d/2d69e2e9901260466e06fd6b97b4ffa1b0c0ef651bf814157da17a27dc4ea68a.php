<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dfbd68cb26c024ceb176e74512b55d14796a060410d8545a48adbe4cf47bac00 extends Twig_Template
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
        $__internal_91f1ccca37eee6e38303c16dc5e00fdb688e8ea97acb1a40f55520a5f7b24615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f1ccca37eee6e38303c16dc5e00fdb688e8ea97acb1a40f55520a5f7b24615->enter($__internal_91f1ccca37eee6e38303c16dc5e00fdb688e8ea97acb1a40f55520a5f7b24615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_90371a9de372e3ad1bedcb5e8ee0ebc1cfc355df034da41e82ecda5b2580d8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90371a9de372e3ad1bedcb5e8ee0ebc1cfc355df034da41e82ecda5b2580d8e4->enter($__internal_90371a9de372e3ad1bedcb5e8ee0ebc1cfc355df034da41e82ecda5b2580d8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_91f1ccca37eee6e38303c16dc5e00fdb688e8ea97acb1a40f55520a5f7b24615->leave($__internal_91f1ccca37eee6e38303c16dc5e00fdb688e8ea97acb1a40f55520a5f7b24615_prof);

        
        $__internal_90371a9de372e3ad1bedcb5e8ee0ebc1cfc355df034da41e82ecda5b2580d8e4->leave($__internal_90371a9de372e3ad1bedcb5e8ee0ebc1cfc355df034da41e82ecda5b2580d8e4_prof);

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
