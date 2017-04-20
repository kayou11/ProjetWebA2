<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e0450f0c739590d748db9f4258585f17675c9a2b682c66faca4ef3aaf8654fb7 extends Twig_Template
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
        $__internal_9f3eac18a087acfd00fa2ded674759e3d5e704de62531d3b6a45d492b1baf5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3eac18a087acfd00fa2ded674759e3d5e704de62531d3b6a45d492b1baf5e1->enter($__internal_9f3eac18a087acfd00fa2ded674759e3d5e704de62531d3b6a45d492b1baf5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_be4212ffba4f9841e9523ec4e40cc4be5fe4f944694f0fce0ac1513d37906041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4212ffba4f9841e9523ec4e40cc4be5fe4f944694f0fce0ac1513d37906041->enter($__internal_be4212ffba4f9841e9523ec4e40cc4be5fe4f944694f0fce0ac1513d37906041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9f3eac18a087acfd00fa2ded674759e3d5e704de62531d3b6a45d492b1baf5e1->leave($__internal_9f3eac18a087acfd00fa2ded674759e3d5e704de62531d3b6a45d492b1baf5e1_prof);

        
        $__internal_be4212ffba4f9841e9523ec4e40cc4be5fe4f944694f0fce0ac1513d37906041->leave($__internal_be4212ffba4f9841e9523ec4e40cc4be5fe4f944694f0fce0ac1513d37906041_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
