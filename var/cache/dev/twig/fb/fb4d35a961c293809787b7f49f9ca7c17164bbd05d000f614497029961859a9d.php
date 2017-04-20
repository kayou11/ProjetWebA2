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
        $__internal_32192eb27a97c870b646f907d2f0e4a34237e28bca53c58e242d9476071486dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32192eb27a97c870b646f907d2f0e4a34237e28bca53c58e242d9476071486dc->enter($__internal_32192eb27a97c870b646f907d2f0e4a34237e28bca53c58e242d9476071486dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4ce9f600990b477126564d85d5ed97df5be47e706d35c9953d1318534a252c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce9f600990b477126564d85d5ed97df5be47e706d35c9953d1318534a252c5b->enter($__internal_4ce9f600990b477126564d85d5ed97df5be47e706d35c9953d1318534a252c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_32192eb27a97c870b646f907d2f0e4a34237e28bca53c58e242d9476071486dc->leave($__internal_32192eb27a97c870b646f907d2f0e4a34237e28bca53c58e242d9476071486dc_prof);

        
        $__internal_4ce9f600990b477126564d85d5ed97df5be47e706d35c9953d1318534a252c5b->leave($__internal_4ce9f600990b477126564d85d5ed97df5be47e706d35c9953d1318534a252c5b_prof);

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
