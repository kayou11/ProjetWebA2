<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f79330f57ba6259600ff42c2a226b1bee24f9fdbc70100ccc99aea159c36672a extends Twig_Template
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
        $__internal_60570daa41a584646b8152d9ce00e262317d777720d413879b22c3293ab09c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60570daa41a584646b8152d9ce00e262317d777720d413879b22c3293ab09c6b->enter($__internal_60570daa41a584646b8152d9ce00e262317d777720d413879b22c3293ab09c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_de20c0d833e4d9d69508e43153d3c3a688ce30f849e3f84ea19104b1d4b6fa05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de20c0d833e4d9d69508e43153d3c3a688ce30f849e3f84ea19104b1d4b6fa05->enter($__internal_de20c0d833e4d9d69508e43153d3c3a688ce30f849e3f84ea19104b1d4b6fa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_60570daa41a584646b8152d9ce00e262317d777720d413879b22c3293ab09c6b->leave($__internal_60570daa41a584646b8152d9ce00e262317d777720d413879b22c3293ab09c6b_prof);

        
        $__internal_de20c0d833e4d9d69508e43153d3c3a688ce30f849e3f84ea19104b1d4b6fa05->leave($__internal_de20c0d833e4d9d69508e43153d3c3a688ce30f849e3f84ea19104b1d4b6fa05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "@Framework/Form/datetime_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
