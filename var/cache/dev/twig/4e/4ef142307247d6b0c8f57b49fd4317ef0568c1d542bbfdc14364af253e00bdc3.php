<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_66aad32af1ecc68bdc70151876d5978aeb81ad9db95ecd72b8376fd19a9100bd extends Twig_Template
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
        $__internal_23984b1ca57fffd82427e603e9dc4ffb1517bb81ac8e75472d6db6570d8cbfdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23984b1ca57fffd82427e603e9dc4ffb1517bb81ac8e75472d6db6570d8cbfdf->enter($__internal_23984b1ca57fffd82427e603e9dc4ffb1517bb81ac8e75472d6db6570d8cbfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_344733efaeafd17dbc752cf5a27f5c37d62b4c34a6a694bd67e26f85b0c6cc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344733efaeafd17dbc752cf5a27f5c37d62b4c34a6a694bd67e26f85b0c6cc7e->enter($__internal_344733efaeafd17dbc752cf5a27f5c37d62b4c34a6a694bd67e26f85b0c6cc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_23984b1ca57fffd82427e603e9dc4ffb1517bb81ac8e75472d6db6570d8cbfdf->leave($__internal_23984b1ca57fffd82427e603e9dc4ffb1517bb81ac8e75472d6db6570d8cbfdf_prof);

        
        $__internal_344733efaeafd17dbc752cf5a27f5c37d62b4c34a6a694bd67e26f85b0c6cc7e->leave($__internal_344733efaeafd17dbc752cf5a27f5c37d62b4c34a6a694bd67e26f85b0c6cc7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
