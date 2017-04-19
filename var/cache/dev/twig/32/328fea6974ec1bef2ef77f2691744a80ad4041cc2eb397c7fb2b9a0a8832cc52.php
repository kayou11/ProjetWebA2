<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d046137a32531bb3a3272b49681d777b5a2c2698a20d86fbab9e14ee4c4fc205 extends Twig_Template
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
        $__internal_91193053ccd1340f26898fa90bbd13fe3edd03c684b8e34bcccc6e919f54c591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91193053ccd1340f26898fa90bbd13fe3edd03c684b8e34bcccc6e919f54c591->enter($__internal_91193053ccd1340f26898fa90bbd13fe3edd03c684b8e34bcccc6e919f54c591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_281997e12338b871875d253273f6b2ac7b482e307ae0a9e658e5c94cb985c9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281997e12338b871875d253273f6b2ac7b482e307ae0a9e658e5c94cb985c9b7->enter($__internal_281997e12338b871875d253273f6b2ac7b482e307ae0a9e658e5c94cb985c9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_91193053ccd1340f26898fa90bbd13fe3edd03c684b8e34bcccc6e919f54c591->leave($__internal_91193053ccd1340f26898fa90bbd13fe3edd03c684b8e34bcccc6e919f54c591_prof);

        
        $__internal_281997e12338b871875d253273f6b2ac7b482e307ae0a9e658e5c94cb985c9b7->leave($__internal_281997e12338b871875d253273f6b2ac7b482e307ae0a9e658e5c94cb985c9b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
