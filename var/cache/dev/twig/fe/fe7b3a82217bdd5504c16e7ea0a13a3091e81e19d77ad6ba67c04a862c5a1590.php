<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6dfcea98f28004e0e12ea29a6afd59035fd7c6f274996bd349619a736e1a7708 extends Twig_Template
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
        $__internal_cd3fd193cb50ec15964a4e3a7c697e208041d1d69f1747ad021fa6b5eb0734be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3fd193cb50ec15964a4e3a7c697e208041d1d69f1747ad021fa6b5eb0734be->enter($__internal_cd3fd193cb50ec15964a4e3a7c697e208041d1d69f1747ad021fa6b5eb0734be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_66cccd94bad05e03d4dd0b16a3d941fe034394dce5c237fed1f8b0c3a5e5ef48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cccd94bad05e03d4dd0b16a3d941fe034394dce5c237fed1f8b0c3a5e5ef48->enter($__internal_66cccd94bad05e03d4dd0b16a3d941fe034394dce5c237fed1f8b0c3a5e5ef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cd3fd193cb50ec15964a4e3a7c697e208041d1d69f1747ad021fa6b5eb0734be->leave($__internal_cd3fd193cb50ec15964a4e3a7c697e208041d1d69f1747ad021fa6b5eb0734be_prof);

        
        $__internal_66cccd94bad05e03d4dd0b16a3d941fe034394dce5c237fed1f8b0c3a5e5ef48->leave($__internal_66cccd94bad05e03d4dd0b16a3d941fe034394dce5c237fed1f8b0c3a5e5ef48_prof);

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
