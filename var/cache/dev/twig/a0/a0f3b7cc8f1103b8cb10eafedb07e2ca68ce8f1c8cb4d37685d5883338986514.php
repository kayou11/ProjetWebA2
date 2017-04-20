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
        $__internal_4761949f050595196b28e4252ace7ac093543ac8394c8fbe840e6ee4b1917c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4761949f050595196b28e4252ace7ac093543ac8394c8fbe840e6ee4b1917c61->enter($__internal_4761949f050595196b28e4252ace7ac093543ac8394c8fbe840e6ee4b1917c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f020bd2deb9aed044c28937cb27b34c8217b096f23ff3c50415fd748650cce30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f020bd2deb9aed044c28937cb27b34c8217b096f23ff3c50415fd748650cce30->enter($__internal_f020bd2deb9aed044c28937cb27b34c8217b096f23ff3c50415fd748650cce30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_4761949f050595196b28e4252ace7ac093543ac8394c8fbe840e6ee4b1917c61->leave($__internal_4761949f050595196b28e4252ace7ac093543ac8394c8fbe840e6ee4b1917c61_prof);

        
        $__internal_f020bd2deb9aed044c28937cb27b34c8217b096f23ff3c50415fd748650cce30->leave($__internal_f020bd2deb9aed044c28937cb27b34c8217b096f23ff3c50415fd748650cce30_prof);

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
