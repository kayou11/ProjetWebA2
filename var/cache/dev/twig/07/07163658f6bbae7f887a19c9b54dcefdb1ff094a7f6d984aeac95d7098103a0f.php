<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7d4f57a03be0324e873a403f26133d6e26035135e713217f566e774be4fe8b4a extends Twig_Template
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
        $__internal_d8e29edaf5a109e12a6ae3ad8b930cb61e5809937aef62311d1069a6b8934158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e29edaf5a109e12a6ae3ad8b930cb61e5809937aef62311d1069a6b8934158->enter($__internal_d8e29edaf5a109e12a6ae3ad8b930cb61e5809937aef62311d1069a6b8934158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_44e2217fdc0624ad107daebd624cec1b6b1f6d354867f61b6c838efe34435e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e2217fdc0624ad107daebd624cec1b6b1f6d354867f61b6c838efe34435e10->enter($__internal_44e2217fdc0624ad107daebd624cec1b6b1f6d354867f61b6c838efe34435e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d8e29edaf5a109e12a6ae3ad8b930cb61e5809937aef62311d1069a6b8934158->leave($__internal_d8e29edaf5a109e12a6ae3ad8b930cb61e5809937aef62311d1069a6b8934158_prof);

        
        $__internal_44e2217fdc0624ad107daebd624cec1b6b1f6d354867f61b6c838efe34435e10->leave($__internal_44e2217fdc0624ad107daebd624cec1b6b1f6d354867f61b6c838efe34435e10_prof);

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
