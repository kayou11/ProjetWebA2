<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ebf4936b0c9b16378d5f370ff23ad1e071cca7ed936d7d6a2fc649e04363d031 extends Twig_Template
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
        $__internal_0fb792e23192c96b699e61daa060f10316a5f00a9925fc1a6c9882c7a54f9f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb792e23192c96b699e61daa060f10316a5f00a9925fc1a6c9882c7a54f9f3a->enter($__internal_0fb792e23192c96b699e61daa060f10316a5f00a9925fc1a6c9882c7a54f9f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_42635daee5447d6d44a2f571a8a22b8e997bbbab6f4aaa77bab5149cbf91a6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42635daee5447d6d44a2f571a8a22b8e997bbbab6f4aaa77bab5149cbf91a6de->enter($__internal_42635daee5447d6d44a2f571a8a22b8e997bbbab6f4aaa77bab5149cbf91a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0fb792e23192c96b699e61daa060f10316a5f00a9925fc1a6c9882c7a54f9f3a->leave($__internal_0fb792e23192c96b699e61daa060f10316a5f00a9925fc1a6c9882c7a54f9f3a_prof);

        
        $__internal_42635daee5447d6d44a2f571a8a22b8e997bbbab6f4aaa77bab5149cbf91a6de->leave($__internal_42635daee5447d6d44a2f571a8a22b8e997bbbab6f4aaa77bab5149cbf91a6de_prof);

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
