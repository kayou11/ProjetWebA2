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
        $__internal_eec153f9dc19389f7e712a57f06d7073042e1624fb5e68426c2ff40d3b133e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec153f9dc19389f7e712a57f06d7073042e1624fb5e68426c2ff40d3b133e99->enter($__internal_eec153f9dc19389f7e712a57f06d7073042e1624fb5e68426c2ff40d3b133e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0d654f1a54643d0bc6eb6bf294db44327cd7ea85f714962e9f0a8c18c99b89ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d654f1a54643d0bc6eb6bf294db44327cd7ea85f714962e9f0a8c18c99b89ea->enter($__internal_0d654f1a54643d0bc6eb6bf294db44327cd7ea85f714962e9f0a8c18c99b89ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eec153f9dc19389f7e712a57f06d7073042e1624fb5e68426c2ff40d3b133e99->leave($__internal_eec153f9dc19389f7e712a57f06d7073042e1624fb5e68426c2ff40d3b133e99_prof);

        
        $__internal_0d654f1a54643d0bc6eb6bf294db44327cd7ea85f714962e9f0a8c18c99b89ea->leave($__internal_0d654f1a54643d0bc6eb6bf294db44327cd7ea85f714962e9f0a8c18c99b89ea_prof);

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
