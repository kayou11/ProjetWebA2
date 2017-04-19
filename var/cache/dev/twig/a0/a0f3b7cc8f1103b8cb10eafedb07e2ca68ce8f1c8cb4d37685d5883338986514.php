<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c5b05ca43fc79953001b92b1d59ee7b5de75f0dd45d3cf3b20dd0b0516952579 extends Twig_Template
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
        $__internal_53f6e7d776f4b8382815c25c647115a82d51f84cd47cf4560917e9f301f37fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f6e7d776f4b8382815c25c647115a82d51f84cd47cf4560917e9f301f37fae->enter($__internal_53f6e7d776f4b8382815c25c647115a82d51f84cd47cf4560917e9f301f37fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e97455bff44a588eaa3e7ac1dc8458833ee02c736ed47e54ffd3c95671bab758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97455bff44a588eaa3e7ac1dc8458833ee02c736ed47e54ffd3c95671bab758->enter($__internal_e97455bff44a588eaa3e7ac1dc8458833ee02c736ed47e54ffd3c95671bab758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_53f6e7d776f4b8382815c25c647115a82d51f84cd47cf4560917e9f301f37fae->leave($__internal_53f6e7d776f4b8382815c25c647115a82d51f84cd47cf4560917e9f301f37fae_prof);

        
        $__internal_e97455bff44a588eaa3e7ac1dc8458833ee02c736ed47e54ffd3c95671bab758->leave($__internal_e97455bff44a588eaa3e7ac1dc8458833ee02c736ed47e54ffd3c95671bab758_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
