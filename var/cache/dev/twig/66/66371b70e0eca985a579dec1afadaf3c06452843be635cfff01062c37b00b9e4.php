<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6aafff2ff8c28d1b6c72f30105de5438a3709582e4af33827ff402292d16d387 extends Twig_Template
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
        $__internal_57a5522c1152df91cf8af317bfd59cac5c821074f0d3073595b8421386e3b996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a5522c1152df91cf8af317bfd59cac5c821074f0d3073595b8421386e3b996->enter($__internal_57a5522c1152df91cf8af317bfd59cac5c821074f0d3073595b8421386e3b996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d97d7b0a371d9b8e7b22ba02f2740110256f31c0baf3c35036deec42fdf51155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97d7b0a371d9b8e7b22ba02f2740110256f31c0baf3c35036deec42fdf51155->enter($__internal_d97d7b0a371d9b8e7b22ba02f2740110256f31c0baf3c35036deec42fdf51155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_57a5522c1152df91cf8af317bfd59cac5c821074f0d3073595b8421386e3b996->leave($__internal_57a5522c1152df91cf8af317bfd59cac5c821074f0d3073595b8421386e3b996_prof);

        
        $__internal_d97d7b0a371d9b8e7b22ba02f2740110256f31c0baf3c35036deec42fdf51155->leave($__internal_d97d7b0a371d9b8e7b22ba02f2740110256f31c0baf3c35036deec42fdf51155_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
