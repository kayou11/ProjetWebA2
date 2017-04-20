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
        $__internal_e044cb65aca8126bbff8cfa283485f477122306623c67e52d8a913a666e99b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e044cb65aca8126bbff8cfa283485f477122306623c67e52d8a913a666e99b67->enter($__internal_e044cb65aca8126bbff8cfa283485f477122306623c67e52d8a913a666e99b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_766922d025d1720c332342ee3a19f80ac644bef24df297b463c19d959a1e54f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766922d025d1720c332342ee3a19f80ac644bef24df297b463c19d959a1e54f5->enter($__internal_766922d025d1720c332342ee3a19f80ac644bef24df297b463c19d959a1e54f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e044cb65aca8126bbff8cfa283485f477122306623c67e52d8a913a666e99b67->leave($__internal_e044cb65aca8126bbff8cfa283485f477122306623c67e52d8a913a666e99b67_prof);

        
        $__internal_766922d025d1720c332342ee3a19f80ac644bef24df297b463c19d959a1e54f5->leave($__internal_766922d025d1720c332342ee3a19f80ac644bef24df297b463c19d959a1e54f5_prof);

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
