<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8a00868118829f6e020ad74cbf97717d37faca68cf494487a513d3bdf239525e extends Twig_Template
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
        $__internal_7d5b415e70d9bcd3f5efeef56b3d124c6e7a425e5b036b30832d9b5b303a6e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5b415e70d9bcd3f5efeef56b3d124c6e7a425e5b036b30832d9b5b303a6e4c->enter($__internal_7d5b415e70d9bcd3f5efeef56b3d124c6e7a425e5b036b30832d9b5b303a6e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f31383c7e5d3a14d45bd4bb0e24a0226ddddbb1788008acc4fba28b0784cdcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31383c7e5d3a14d45bd4bb0e24a0226ddddbb1788008acc4fba28b0784cdcb1->enter($__internal_f31383c7e5d3a14d45bd4bb0e24a0226ddddbb1788008acc4fba28b0784cdcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7d5b415e70d9bcd3f5efeef56b3d124c6e7a425e5b036b30832d9b5b303a6e4c->leave($__internal_7d5b415e70d9bcd3f5efeef56b3d124c6e7a425e5b036b30832d9b5b303a6e4c_prof);

        
        $__internal_f31383c7e5d3a14d45bd4bb0e24a0226ddddbb1788008acc4fba28b0784cdcb1->leave($__internal_f31383c7e5d3a14d45bd4bb0e24a0226ddddbb1788008acc4fba28b0784cdcb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
