<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6003c13a23f38c981244b9679c1c0edf75a1a6d62c9d875830d506bdcd4acc5d extends Twig_Template
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
        $__internal_ec6e6c80e0b9dae90919a5678ee27b40546e9bdc5591e286db4c2118166e8ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6e6c80e0b9dae90919a5678ee27b40546e9bdc5591e286db4c2118166e8ab6->enter($__internal_ec6e6c80e0b9dae90919a5678ee27b40546e9bdc5591e286db4c2118166e8ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b9c4fc950b72efe93c666fad00693c3342d4c098cfdeed127efdcad138afb891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c4fc950b72efe93c666fad00693c3342d4c098cfdeed127efdcad138afb891->enter($__internal_b9c4fc950b72efe93c666fad00693c3342d4c098cfdeed127efdcad138afb891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ec6e6c80e0b9dae90919a5678ee27b40546e9bdc5591e286db4c2118166e8ab6->leave($__internal_ec6e6c80e0b9dae90919a5678ee27b40546e9bdc5591e286db4c2118166e8ab6_prof);

        
        $__internal_b9c4fc950b72efe93c666fad00693c3342d4c098cfdeed127efdcad138afb891->leave($__internal_b9c4fc950b72efe93c666fad00693c3342d4c098cfdeed127efdcad138afb891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
