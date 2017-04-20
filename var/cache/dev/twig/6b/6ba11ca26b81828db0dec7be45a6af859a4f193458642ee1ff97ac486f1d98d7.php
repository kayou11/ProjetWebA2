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
        $__internal_e917925338da61ae2b6fd5732bc68fd12de5451081f4dc375da6f659ee093d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e917925338da61ae2b6fd5732bc68fd12de5451081f4dc375da6f659ee093d7b->enter($__internal_e917925338da61ae2b6fd5732bc68fd12de5451081f4dc375da6f659ee093d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_baad2a98224a5b8fe6881557a481b312aeaeaeee50d69f6c642567788f961996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baad2a98224a5b8fe6881557a481b312aeaeaeee50d69f6c642567788f961996->enter($__internal_baad2a98224a5b8fe6881557a481b312aeaeaeee50d69f6c642567788f961996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e917925338da61ae2b6fd5732bc68fd12de5451081f4dc375da6f659ee093d7b->leave($__internal_e917925338da61ae2b6fd5732bc68fd12de5451081f4dc375da6f659ee093d7b_prof);

        
        $__internal_baad2a98224a5b8fe6881557a481b312aeaeaeee50d69f6c642567788f961996->leave($__internal_baad2a98224a5b8fe6881557a481b312aeaeaeee50d69f6c642567788f961996_prof);

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
