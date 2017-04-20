<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3943faa07d80ea54cf7cb1e6e3308ab84338f52fb0e69f05c4d4c56efa1b2269 extends Twig_Template
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
        $__internal_7c2f92a82a8857575675793db6b9a8a657c00660a1af50a90d5f129168f14a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2f92a82a8857575675793db6b9a8a657c00660a1af50a90d5f129168f14a3d->enter($__internal_7c2f92a82a8857575675793db6b9a8a657c00660a1af50a90d5f129168f14a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d5e84a3cb9b0d6b4b3893b23373147ef8a989e219def161943614cad92b88770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e84a3cb9b0d6b4b3893b23373147ef8a989e219def161943614cad92b88770->enter($__internal_d5e84a3cb9b0d6b4b3893b23373147ef8a989e219def161943614cad92b88770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7c2f92a82a8857575675793db6b9a8a657c00660a1af50a90d5f129168f14a3d->leave($__internal_7c2f92a82a8857575675793db6b9a8a657c00660a1af50a90d5f129168f14a3d_prof);

        
        $__internal_d5e84a3cb9b0d6b4b3893b23373147ef8a989e219def161943614cad92b88770->leave($__internal_d5e84a3cb9b0d6b4b3893b23373147ef8a989e219def161943614cad92b88770_prof);

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
