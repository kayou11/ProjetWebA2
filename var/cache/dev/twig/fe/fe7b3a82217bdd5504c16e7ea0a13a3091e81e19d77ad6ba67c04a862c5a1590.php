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
        $__internal_251c007964b8d7818038103b228855a5dacd94c100e0ddbf1c31c33cb2a2e6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251c007964b8d7818038103b228855a5dacd94c100e0ddbf1c31c33cb2a2e6ea->enter($__internal_251c007964b8d7818038103b228855a5dacd94c100e0ddbf1c31c33cb2a2e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cfa466fe9a861fc4402d33759b70c9517230e8a2632e7dd249c32e0a81591457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa466fe9a861fc4402d33759b70c9517230e8a2632e7dd249c32e0a81591457->enter($__internal_cfa466fe9a861fc4402d33759b70c9517230e8a2632e7dd249c32e0a81591457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_251c007964b8d7818038103b228855a5dacd94c100e0ddbf1c31c33cb2a2e6ea->leave($__internal_251c007964b8d7818038103b228855a5dacd94c100e0ddbf1c31c33cb2a2e6ea_prof);

        
        $__internal_cfa466fe9a861fc4402d33759b70c9517230e8a2632e7dd249c32e0a81591457->leave($__internal_cfa466fe9a861fc4402d33759b70c9517230e8a2632e7dd249c32e0a81591457_prof);

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
