<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_443cc65e448a68b21f2ae4de778f367bb1ac5ea93cf62203fd43353f3e0fac80 extends Twig_Template
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
        $__internal_ac0a3d8ce0285790155d55e318c59f23065eae481a2afd3e3e98093b7c8a7c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0a3d8ce0285790155d55e318c59f23065eae481a2afd3e3e98093b7c8a7c06->enter($__internal_ac0a3d8ce0285790155d55e318c59f23065eae481a2afd3e3e98093b7c8a7c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_df524d3d39999c06c43251e8863f7a891d287050d90df4c0c70b3fe3cf8c9cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df524d3d39999c06c43251e8863f7a891d287050d90df4c0c70b3fe3cf8c9cca->enter($__internal_df524d3d39999c06c43251e8863f7a891d287050d90df4c0c70b3fe3cf8c9cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ac0a3d8ce0285790155d55e318c59f23065eae481a2afd3e3e98093b7c8a7c06->leave($__internal_ac0a3d8ce0285790155d55e318c59f23065eae481a2afd3e3e98093b7c8a7c06_prof);

        
        $__internal_df524d3d39999c06c43251e8863f7a891d287050d90df4c0c70b3fe3cf8c9cca->leave($__internal_df524d3d39999c06c43251e8863f7a891d287050d90df4c0c70b3fe3cf8c9cca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
