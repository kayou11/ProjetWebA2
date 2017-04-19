<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1e85d971a52cf92da4c8da6adf76930152007b5c73a90cffb826829156f901af extends Twig_Template
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
        $__internal_fec912327a32efc634b9278b25012ae19b9b996a3a96530bdbfdfd16ae59095b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec912327a32efc634b9278b25012ae19b9b996a3a96530bdbfdfd16ae59095b->enter($__internal_fec912327a32efc634b9278b25012ae19b9b996a3a96530bdbfdfd16ae59095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5522320a26c81880038f89ed1024c2e80278aa0b6acf98ec38610108bd3d7dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5522320a26c81880038f89ed1024c2e80278aa0b6acf98ec38610108bd3d7dec->enter($__internal_5522320a26c81880038f89ed1024c2e80278aa0b6acf98ec38610108bd3d7dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fec912327a32efc634b9278b25012ae19b9b996a3a96530bdbfdfd16ae59095b->leave($__internal_fec912327a32efc634b9278b25012ae19b9b996a3a96530bdbfdfd16ae59095b_prof);

        
        $__internal_5522320a26c81880038f89ed1024c2e80278aa0b6acf98ec38610108bd3d7dec->leave($__internal_5522320a26c81880038f89ed1024c2e80278aa0b6acf98ec38610108bd3d7dec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
