<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7315560fedd365e1a9b8ecff7886ebdd1dbe2bc588e1bb2c32aada00c47fa49e extends Twig_Template
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
        $__internal_c4ae6aba38596b492983dfe2f1e6fd9508c569e7f7e7c26f5f41a6a9a1e59fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ae6aba38596b492983dfe2f1e6fd9508c569e7f7e7c26f5f41a6a9a1e59fc7->enter($__internal_c4ae6aba38596b492983dfe2f1e6fd9508c569e7f7e7c26f5f41a6a9a1e59fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fcf0485bd80cfe8eab60a1727fbb1a4a547ac8576dd893c37da524edb862c28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf0485bd80cfe8eab60a1727fbb1a4a547ac8576dd893c37da524edb862c28a->enter($__internal_fcf0485bd80cfe8eab60a1727fbb1a4a547ac8576dd893c37da524edb862c28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c4ae6aba38596b492983dfe2f1e6fd9508c569e7f7e7c26f5f41a6a9a1e59fc7->leave($__internal_c4ae6aba38596b492983dfe2f1e6fd9508c569e7f7e7c26f5f41a6a9a1e59fc7_prof);

        
        $__internal_fcf0485bd80cfe8eab60a1727fbb1a4a547ac8576dd893c37da524edb862c28a->leave($__internal_fcf0485bd80cfe8eab60a1727fbb1a4a547ac8576dd893c37da524edb862c28a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
