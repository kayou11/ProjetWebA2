<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c700bcc3c8479507ceef68ab7b21b4ea0144cfe4197f7cee2629769889fd01b3 extends Twig_Template
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
        $__internal_11aa9c729fa6daf464e92cd176ba34305077021f1b043b4946060075f98ae937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11aa9c729fa6daf464e92cd176ba34305077021f1b043b4946060075f98ae937->enter($__internal_11aa9c729fa6daf464e92cd176ba34305077021f1b043b4946060075f98ae937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_312de4a579bd50ea3ab019a94d78449ac67601d4ee4eddc156523043b73586a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312de4a579bd50ea3ab019a94d78449ac67601d4ee4eddc156523043b73586a0->enter($__internal_312de4a579bd50ea3ab019a94d78449ac67601d4ee4eddc156523043b73586a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_11aa9c729fa6daf464e92cd176ba34305077021f1b043b4946060075f98ae937->leave($__internal_11aa9c729fa6daf464e92cd176ba34305077021f1b043b4946060075f98ae937_prof);

        
        $__internal_312de4a579bd50ea3ab019a94d78449ac67601d4ee4eddc156523043b73586a0->leave($__internal_312de4a579bd50ea3ab019a94d78449ac67601d4ee4eddc156523043b73586a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
