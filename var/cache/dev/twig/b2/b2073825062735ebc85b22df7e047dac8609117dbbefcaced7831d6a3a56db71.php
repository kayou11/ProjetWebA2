<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8b9813817da807aff6eec225cf8d7cf3179c30afd70fa4ee31ec13bf0d39bffe extends Twig_Template
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
        $__internal_12acad34914323ab61c63255a5d0654be814b5f3953f8ef791fcce28cc94ba28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12acad34914323ab61c63255a5d0654be814b5f3953f8ef791fcce28cc94ba28->enter($__internal_12acad34914323ab61c63255a5d0654be814b5f3953f8ef791fcce28cc94ba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9b096b48ddd73a4631528d26a23394ef01e52acd6342270b42f956212b6fc277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b096b48ddd73a4631528d26a23394ef01e52acd6342270b42f956212b6fc277->enter($__internal_9b096b48ddd73a4631528d26a23394ef01e52acd6342270b42f956212b6fc277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_12acad34914323ab61c63255a5d0654be814b5f3953f8ef791fcce28cc94ba28->leave($__internal_12acad34914323ab61c63255a5d0654be814b5f3953f8ef791fcce28cc94ba28_prof);

        
        $__internal_9b096b48ddd73a4631528d26a23394ef01e52acd6342270b42f956212b6fc277->leave($__internal_9b096b48ddd73a4631528d26a23394ef01e52acd6342270b42f956212b6fc277_prof);

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
