<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a2812ed5730248bdb149565264a533208ef701297fd7e5dad6f873fbe1c9802b extends Twig_Template
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
        $__internal_83523672ab8b8bff1e6bb5aa20972a4ae8b1dd6ed2617859b141504c2926b72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83523672ab8b8bff1e6bb5aa20972a4ae8b1dd6ed2617859b141504c2926b72a->enter($__internal_83523672ab8b8bff1e6bb5aa20972a4ae8b1dd6ed2617859b141504c2926b72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c83f5377bc5b92564d84431c9b2178fa3470cd78af07a65227d71dbcc4092f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83f5377bc5b92564d84431c9b2178fa3470cd78af07a65227d71dbcc4092f6c->enter($__internal_c83f5377bc5b92564d84431c9b2178fa3470cd78af07a65227d71dbcc4092f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_83523672ab8b8bff1e6bb5aa20972a4ae8b1dd6ed2617859b141504c2926b72a->leave($__internal_83523672ab8b8bff1e6bb5aa20972a4ae8b1dd6ed2617859b141504c2926b72a_prof);

        
        $__internal_c83f5377bc5b92564d84431c9b2178fa3470cd78af07a65227d71dbcc4092f6c->leave($__internal_c83f5377bc5b92564d84431c9b2178fa3470cd78af07a65227d71dbcc4092f6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
