<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5868769d3653839259f4649893ffabee85f378f8cee9102a49cb8df956200af4 extends Twig_Template
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
        $__internal_e3fb2b74c5ff54ef5043a0107654f544f50af96c6a40932c2d8a2f96107b8577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fb2b74c5ff54ef5043a0107654f544f50af96c6a40932c2d8a2f96107b8577->enter($__internal_e3fb2b74c5ff54ef5043a0107654f544f50af96c6a40932c2d8a2f96107b8577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ef616714487a1d20f089f1408c0c27dcd21fe02dedc38dbc5110c254e6f0f1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef616714487a1d20f089f1408c0c27dcd21fe02dedc38dbc5110c254e6f0f1d7->enter($__internal_ef616714487a1d20f089f1408c0c27dcd21fe02dedc38dbc5110c254e6f0f1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e3fb2b74c5ff54ef5043a0107654f544f50af96c6a40932c2d8a2f96107b8577->leave($__internal_e3fb2b74c5ff54ef5043a0107654f544f50af96c6a40932c2d8a2f96107b8577_prof);

        
        $__internal_ef616714487a1d20f089f1408c0c27dcd21fe02dedc38dbc5110c254e6f0f1d7->leave($__internal_ef616714487a1d20f089f1408c0c27dcd21fe02dedc38dbc5110c254e6f0f1d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
