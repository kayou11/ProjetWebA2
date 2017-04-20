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
        $__internal_8973181941497da5da8debf9103ad91a47d67af01b80ba4b445976e66b044152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8973181941497da5da8debf9103ad91a47d67af01b80ba4b445976e66b044152->enter($__internal_8973181941497da5da8debf9103ad91a47d67af01b80ba4b445976e66b044152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1225e0b2ce1323e3e7df410b912682c8e8474f960a4a4f250d2ed6f5d52d8a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1225e0b2ce1323e3e7df410b912682c8e8474f960a4a4f250d2ed6f5d52d8a12->enter($__internal_1225e0b2ce1323e3e7df410b912682c8e8474f960a4a4f250d2ed6f5d52d8a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8973181941497da5da8debf9103ad91a47d67af01b80ba4b445976e66b044152->leave($__internal_8973181941497da5da8debf9103ad91a47d67af01b80ba4b445976e66b044152_prof);

        
        $__internal_1225e0b2ce1323e3e7df410b912682c8e8474f960a4a4f250d2ed6f5d52d8a12->leave($__internal_1225e0b2ce1323e3e7df410b912682c8e8474f960a4a4f250d2ed6f5d52d8a12_prof);

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
