<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_18c282ed23e0f1b4cdffebfa9c88f856c87e914105a26e0895729f255dda23c6 extends Twig_Template
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
        $__internal_c02b4ce884ba9e6ac04efdb0579eec0c878399bd9772b57e5b4899ae459d9fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02b4ce884ba9e6ac04efdb0579eec0c878399bd9772b57e5b4899ae459d9fd1->enter($__internal_c02b4ce884ba9e6ac04efdb0579eec0c878399bd9772b57e5b4899ae459d9fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a4d51502fbf9bd504a285485721af2f1f56dc32b1c40271c19726bc56dfe0bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d51502fbf9bd504a285485721af2f1f56dc32b1c40271c19726bc56dfe0bc6->enter($__internal_a4d51502fbf9bd504a285485721af2f1f56dc32b1c40271c19726bc56dfe0bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c02b4ce884ba9e6ac04efdb0579eec0c878399bd9772b57e5b4899ae459d9fd1->leave($__internal_c02b4ce884ba9e6ac04efdb0579eec0c878399bd9772b57e5b4899ae459d9fd1_prof);

        
        $__internal_a4d51502fbf9bd504a285485721af2f1f56dc32b1c40271c19726bc56dfe0bc6->leave($__internal_a4d51502fbf9bd504a285485721af2f1f56dc32b1c40271c19726bc56dfe0bc6_prof);

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
