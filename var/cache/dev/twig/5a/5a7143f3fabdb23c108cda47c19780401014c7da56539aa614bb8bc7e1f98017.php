<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ec3a0f5b14bed1ee9975e12449255705a61cdca1ebd7902ed37617700506970a extends Twig_Template
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
        $__internal_dc9b90e5e1ab715bda02413171f4bc41efab4c0cd1e09b070908dc5e51972cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9b90e5e1ab715bda02413171f4bc41efab4c0cd1e09b070908dc5e51972cc9->enter($__internal_dc9b90e5e1ab715bda02413171f4bc41efab4c0cd1e09b070908dc5e51972cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_393048eb223d2859649d1965d9bc95408d0e98fddb558319c6ce64d62ad3449b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393048eb223d2859649d1965d9bc95408d0e98fddb558319c6ce64d62ad3449b->enter($__internal_393048eb223d2859649d1965d9bc95408d0e98fddb558319c6ce64d62ad3449b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_dc9b90e5e1ab715bda02413171f4bc41efab4c0cd1e09b070908dc5e51972cc9->leave($__internal_dc9b90e5e1ab715bda02413171f4bc41efab4c0cd1e09b070908dc5e51972cc9_prof);

        
        $__internal_393048eb223d2859649d1965d9bc95408d0e98fddb558319c6ce64d62ad3449b->leave($__internal_393048eb223d2859649d1965d9bc95408d0e98fddb558319c6ce64d62ad3449b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
