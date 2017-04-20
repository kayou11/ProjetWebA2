<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3a52384ed8b3b1810036617c7e784f980236907f9370def61820bcc16f788955 extends Twig_Template
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
        $__internal_64a65d45b5b01d71403837fa6d68b5a20deff3b1f6a1375fe0cdaabc39d5d353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a65d45b5b01d71403837fa6d68b5a20deff3b1f6a1375fe0cdaabc39d5d353->enter($__internal_64a65d45b5b01d71403837fa6d68b5a20deff3b1f6a1375fe0cdaabc39d5d353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1e22b106c5228385ec926503c951f239676d5afcca2429019e03bb459cf8e969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e22b106c5228385ec926503c951f239676d5afcca2429019e03bb459cf8e969->enter($__internal_1e22b106c5228385ec926503c951f239676d5afcca2429019e03bb459cf8e969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_64a65d45b5b01d71403837fa6d68b5a20deff3b1f6a1375fe0cdaabc39d5d353->leave($__internal_64a65d45b5b01d71403837fa6d68b5a20deff3b1f6a1375fe0cdaabc39d5d353_prof);

        
        $__internal_1e22b106c5228385ec926503c951f239676d5afcca2429019e03bb459cf8e969->leave($__internal_1e22b106c5228385ec926503c951f239676d5afcca2429019e03bb459cf8e969_prof);

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
