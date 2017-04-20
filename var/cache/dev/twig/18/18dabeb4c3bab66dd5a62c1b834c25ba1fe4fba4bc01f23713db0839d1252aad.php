<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_acc276c9741f9df36fe723e627a0d7f2ca84172ba2dd92f650879ff592652b08 extends Twig_Template
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
        $__internal_9ddbdd05bcfff27de90d5eb17d04b3d7ba24e4f4bc4ca896bee7e5e8a34bab43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddbdd05bcfff27de90d5eb17d04b3d7ba24e4f4bc4ca896bee7e5e8a34bab43->enter($__internal_9ddbdd05bcfff27de90d5eb17d04b3d7ba24e4f4bc4ca896bee7e5e8a34bab43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_12e9223ae2946fe33e5033a5030955f0c2ff7b414c1d84f9a6a0e07b808661e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e9223ae2946fe33e5033a5030955f0c2ff7b414c1d84f9a6a0e07b808661e6->enter($__internal_12e9223ae2946fe33e5033a5030955f0c2ff7b414c1d84f9a6a0e07b808661e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9ddbdd05bcfff27de90d5eb17d04b3d7ba24e4f4bc4ca896bee7e5e8a34bab43->leave($__internal_9ddbdd05bcfff27de90d5eb17d04b3d7ba24e4f4bc4ca896bee7e5e8a34bab43_prof);

        
        $__internal_12e9223ae2946fe33e5033a5030955f0c2ff7b414c1d84f9a6a0e07b808661e6->leave($__internal_12e9223ae2946fe33e5033a5030955f0c2ff7b414c1d84f9a6a0e07b808661e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
