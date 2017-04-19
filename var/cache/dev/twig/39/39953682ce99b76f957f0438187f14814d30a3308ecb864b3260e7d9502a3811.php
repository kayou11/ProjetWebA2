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
        $__internal_119e7c31b342756d3909dccc67511a249d89658490d6031f3c81758aca58cdb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119e7c31b342756d3909dccc67511a249d89658490d6031f3c81758aca58cdb5->enter($__internal_119e7c31b342756d3909dccc67511a249d89658490d6031f3c81758aca58cdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4dc59b401071ed8beba5f5e7365ad20a9f272c0fb37fc9e20ca5af54282a391c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc59b401071ed8beba5f5e7365ad20a9f272c0fb37fc9e20ca5af54282a391c->enter($__internal_4dc59b401071ed8beba5f5e7365ad20a9f272c0fb37fc9e20ca5af54282a391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_119e7c31b342756d3909dccc67511a249d89658490d6031f3c81758aca58cdb5->leave($__internal_119e7c31b342756d3909dccc67511a249d89658490d6031f3c81758aca58cdb5_prof);

        
        $__internal_4dc59b401071ed8beba5f5e7365ad20a9f272c0fb37fc9e20ca5af54282a391c->leave($__internal_4dc59b401071ed8beba5f5e7365ad20a9f272c0fb37fc9e20ca5af54282a391c_prof);

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
