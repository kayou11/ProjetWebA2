<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ae516759866fc87861ca57f61ff23d75c62a09136b8954387dd71a97b26a3a4f extends Twig_Template
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
        $__internal_9c99bf65defb766dbb28d8e71db7be3e76a309ea8754386e49cfb50b0d7fa1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c99bf65defb766dbb28d8e71db7be3e76a309ea8754386e49cfb50b0d7fa1fb->enter($__internal_9c99bf65defb766dbb28d8e71db7be3e76a309ea8754386e49cfb50b0d7fa1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_641652c503f68cb29bf65606bd1829efcf990f023b7bcb8c341088848a6885fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641652c503f68cb29bf65606bd1829efcf990f023b7bcb8c341088848a6885fc->enter($__internal_641652c503f68cb29bf65606bd1829efcf990f023b7bcb8c341088848a6885fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9c99bf65defb766dbb28d8e71db7be3e76a309ea8754386e49cfb50b0d7fa1fb->leave($__internal_9c99bf65defb766dbb28d8e71db7be3e76a309ea8754386e49cfb50b0d7fa1fb_prof);

        
        $__internal_641652c503f68cb29bf65606bd1829efcf990f023b7bcb8c341088848a6885fc->leave($__internal_641652c503f68cb29bf65606bd1829efcf990f023b7bcb8c341088848a6885fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
