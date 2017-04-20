<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bce8917168d5167c13630c0fc0afa2615b3644ce3a1921557741bb62ad7174bd extends Twig_Template
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
        $__internal_3a39dc962f559dad3dd823988a5319bea8bf5c0097c5a3e268bf20f27d7ba6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a39dc962f559dad3dd823988a5319bea8bf5c0097c5a3e268bf20f27d7ba6eb->enter($__internal_3a39dc962f559dad3dd823988a5319bea8bf5c0097c5a3e268bf20f27d7ba6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e32a60751a699b6b31d3efee08108e5c6ff2ea192e098d8d0e5134a9096d0d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32a60751a699b6b31d3efee08108e5c6ff2ea192e098d8d0e5134a9096d0d46->enter($__internal_e32a60751a699b6b31d3efee08108e5c6ff2ea192e098d8d0e5134a9096d0d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3a39dc962f559dad3dd823988a5319bea8bf5c0097c5a3e268bf20f27d7ba6eb->leave($__internal_3a39dc962f559dad3dd823988a5319bea8bf5c0097c5a3e268bf20f27d7ba6eb_prof);

        
        $__internal_e32a60751a699b6b31d3efee08108e5c6ff2ea192e098d8d0e5134a9096d0d46->leave($__internal_e32a60751a699b6b31d3efee08108e5c6ff2ea192e098d8d0e5134a9096d0d46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
