<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4b27bdd758fb6cfdc2102d52baa055a957bf4ca270056c155fab58577ae7d913 extends Twig_Template
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
        $__internal_8db5a2892d1deeef0223c688638630f8ce5fc3ece46dc74881eae0b6e770c021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db5a2892d1deeef0223c688638630f8ce5fc3ece46dc74881eae0b6e770c021->enter($__internal_8db5a2892d1deeef0223c688638630f8ce5fc3ece46dc74881eae0b6e770c021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c0a6e8fb915e8e7a8c5a9299fcd2be0a6f5a37fd39c4af22cb712b7d951da3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a6e8fb915e8e7a8c5a9299fcd2be0a6f5a37fd39c4af22cb712b7d951da3ec->enter($__internal_c0a6e8fb915e8e7a8c5a9299fcd2be0a6f5a37fd39c4af22cb712b7d951da3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8db5a2892d1deeef0223c688638630f8ce5fc3ece46dc74881eae0b6e770c021->leave($__internal_8db5a2892d1deeef0223c688638630f8ce5fc3ece46dc74881eae0b6e770c021_prof);

        
        $__internal_c0a6e8fb915e8e7a8c5a9299fcd2be0a6f5a37fd39c4af22cb712b7d951da3ec->leave($__internal_c0a6e8fb915e8e7a8c5a9299fcd2be0a6f5a37fd39c4af22cb712b7d951da3ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
