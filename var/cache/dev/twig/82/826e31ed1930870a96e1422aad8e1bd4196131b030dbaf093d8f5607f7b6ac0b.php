<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_69a31cb0bfc2fc0d60cb98c82ade58f140a58d5274079c16b291c169a9df1d37 extends Twig_Template
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
        $__internal_92ddfd033738aadfa039885a65370fb4622047f862f33f4994edcf0a1a59b616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ddfd033738aadfa039885a65370fb4622047f862f33f4994edcf0a1a59b616->enter($__internal_92ddfd033738aadfa039885a65370fb4622047f862f33f4994edcf0a1a59b616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8ccf408a5c95cf049906327b762dc4b3e6e89a10b765d2c29282436901f0bea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccf408a5c95cf049906327b762dc4b3e6e89a10b765d2c29282436901f0bea6->enter($__internal_8ccf408a5c95cf049906327b762dc4b3e6e89a10b765d2c29282436901f0bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_92ddfd033738aadfa039885a65370fb4622047f862f33f4994edcf0a1a59b616->leave($__internal_92ddfd033738aadfa039885a65370fb4622047f862f33f4994edcf0a1a59b616_prof);

        
        $__internal_8ccf408a5c95cf049906327b762dc4b3e6e89a10b765d2c29282436901f0bea6->leave($__internal_8ccf408a5c95cf049906327b762dc4b3e6e89a10b765d2c29282436901f0bea6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
