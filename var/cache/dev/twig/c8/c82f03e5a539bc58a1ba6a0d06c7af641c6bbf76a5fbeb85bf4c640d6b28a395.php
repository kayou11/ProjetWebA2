<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_816a1ec737e19dc80efab63c4334a8ecfd550c0513e30d4869e026d4076f71e1 extends Twig_Template
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
        $__internal_7ff0b06f153cfd324eba624819a33bdf8f8fcbf59c5552b26ebea3d81136c32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff0b06f153cfd324eba624819a33bdf8f8fcbf59c5552b26ebea3d81136c32f->enter($__internal_7ff0b06f153cfd324eba624819a33bdf8f8fcbf59c5552b26ebea3d81136c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d7270edce52794292fa5518e9e9c9d7d25ba6da85a20bb73f480749b1ca1da4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7270edce52794292fa5518e9e9c9d7d25ba6da85a20bb73f480749b1ca1da4e->enter($__internal_d7270edce52794292fa5518e9e9c9d7d25ba6da85a20bb73f480749b1ca1da4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7ff0b06f153cfd324eba624819a33bdf8f8fcbf59c5552b26ebea3d81136c32f->leave($__internal_7ff0b06f153cfd324eba624819a33bdf8f8fcbf59c5552b26ebea3d81136c32f_prof);

        
        $__internal_d7270edce52794292fa5518e9e9c9d7d25ba6da85a20bb73f480749b1ca1da4e->leave($__internal_d7270edce52794292fa5518e9e9c9d7d25ba6da85a20bb73f480749b1ca1da4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}