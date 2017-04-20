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
        $__internal_891e082b1ce97359688fdba8d8bd6dbf89b72584c296fb8e0d6a411c8cbccc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891e082b1ce97359688fdba8d8bd6dbf89b72584c296fb8e0d6a411c8cbccc43->enter($__internal_891e082b1ce97359688fdba8d8bd6dbf89b72584c296fb8e0d6a411c8cbccc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_19620313a34e1ee0e4e1a6a1c8694f444368a2b30b40919f57d18a80bfba3686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19620313a34e1ee0e4e1a6a1c8694f444368a2b30b40919f57d18a80bfba3686->enter($__internal_19620313a34e1ee0e4e1a6a1c8694f444368a2b30b40919f57d18a80bfba3686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_891e082b1ce97359688fdba8d8bd6dbf89b72584c296fb8e0d6a411c8cbccc43->leave($__internal_891e082b1ce97359688fdba8d8bd6dbf89b72584c296fb8e0d6a411c8cbccc43_prof);

        
        $__internal_19620313a34e1ee0e4e1a6a1c8694f444368a2b30b40919f57d18a80bfba3686->leave($__internal_19620313a34e1ee0e4e1a6a1c8694f444368a2b30b40919f57d18a80bfba3686_prof);

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
