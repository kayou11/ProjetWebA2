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
        $__internal_41efea610cca63f08410974dc409e1a6371b25dd084329655acda2a9f8e03c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41efea610cca63f08410974dc409e1a6371b25dd084329655acda2a9f8e03c8c->enter($__internal_41efea610cca63f08410974dc409e1a6371b25dd084329655acda2a9f8e03c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7243fe1603ee29d8b482351f51d838f7240fb03f496279e7c470662dd655a186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7243fe1603ee29d8b482351f51d838f7240fb03f496279e7c470662dd655a186->enter($__internal_7243fe1603ee29d8b482351f51d838f7240fb03f496279e7c470662dd655a186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_41efea610cca63f08410974dc409e1a6371b25dd084329655acda2a9f8e03c8c->leave($__internal_41efea610cca63f08410974dc409e1a6371b25dd084329655acda2a9f8e03c8c_prof);

        
        $__internal_7243fe1603ee29d8b482351f51d838f7240fb03f496279e7c470662dd655a186->leave($__internal_7243fe1603ee29d8b482351f51d838f7240fb03f496279e7c470662dd655a186_prof);

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
