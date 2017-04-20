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
        $__internal_aaf65c75359fdb019ca11d040a79b58d62c1ab9b141981874430bfb35e513d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf65c75359fdb019ca11d040a79b58d62c1ab9b141981874430bfb35e513d4e->enter($__internal_aaf65c75359fdb019ca11d040a79b58d62c1ab9b141981874430bfb35e513d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_55bd63ebdeae47c54a3b3238482d88db0e0f1464c9a45adf917b5d19286ffa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bd63ebdeae47c54a3b3238482d88db0e0f1464c9a45adf917b5d19286ffa5d->enter($__internal_55bd63ebdeae47c54a3b3238482d88db0e0f1464c9a45adf917b5d19286ffa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_aaf65c75359fdb019ca11d040a79b58d62c1ab9b141981874430bfb35e513d4e->leave($__internal_aaf65c75359fdb019ca11d040a79b58d62c1ab9b141981874430bfb35e513d4e_prof);

        
        $__internal_55bd63ebdeae47c54a3b3238482d88db0e0f1464c9a45adf917b5d19286ffa5d->leave($__internal_55bd63ebdeae47c54a3b3238482d88db0e0f1464c9a45adf917b5d19286ffa5d_prof);

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
