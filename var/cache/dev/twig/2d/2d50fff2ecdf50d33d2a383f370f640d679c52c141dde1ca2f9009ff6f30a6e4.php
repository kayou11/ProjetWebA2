<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_df6f104009d2e6ec69b4040fb306a892236563b2f3e0f1076462d80ecd3f27d4 extends Twig_Template
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
        $__internal_976a09be0ab2c375ce756a45ece3844b4a06545d3650d4c81d1cde7a86bc0878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976a09be0ab2c375ce756a45ece3844b4a06545d3650d4c81d1cde7a86bc0878->enter($__internal_976a09be0ab2c375ce756a45ece3844b4a06545d3650d4c81d1cde7a86bc0878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2b6d796f55d9daec9a391861c9a961c709227a0457ea68d7586288cd54d210ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6d796f55d9daec9a391861c9a961c709227a0457ea68d7586288cd54d210ea->enter($__internal_2b6d796f55d9daec9a391861c9a961c709227a0457ea68d7586288cd54d210ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_976a09be0ab2c375ce756a45ece3844b4a06545d3650d4c81d1cde7a86bc0878->leave($__internal_976a09be0ab2c375ce756a45ece3844b4a06545d3650d4c81d1cde7a86bc0878_prof);

        
        $__internal_2b6d796f55d9daec9a391861c9a961c709227a0457ea68d7586288cd54d210ea->leave($__internal_2b6d796f55d9daec9a391861c9a961c709227a0457ea68d7586288cd54d210ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
