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
        $__internal_fc93380003d93345eb7ececa4881a5a7393f43377d13b556e62b0977ee4bdfcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc93380003d93345eb7ececa4881a5a7393f43377d13b556e62b0977ee4bdfcd->enter($__internal_fc93380003d93345eb7ececa4881a5a7393f43377d13b556e62b0977ee4bdfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_38a75361c7a5065766f68c0812038d8651a3fa1647f6bee122e858b47d7f62f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a75361c7a5065766f68c0812038d8651a3fa1647f6bee122e858b47d7f62f6->enter($__internal_38a75361c7a5065766f68c0812038d8651a3fa1647f6bee122e858b47d7f62f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_fc93380003d93345eb7ececa4881a5a7393f43377d13b556e62b0977ee4bdfcd->leave($__internal_fc93380003d93345eb7ececa4881a5a7393f43377d13b556e62b0977ee4bdfcd_prof);

        
        $__internal_38a75361c7a5065766f68c0812038d8651a3fa1647f6bee122e858b47d7f62f6->leave($__internal_38a75361c7a5065766f68c0812038d8651a3fa1647f6bee122e858b47d7f62f6_prof);

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
