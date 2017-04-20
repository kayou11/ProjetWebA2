<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_15cf70273c525894beb60dc8efbe5abc6b4fb118186a9856d7e1620e4ac6ce08 extends Twig_Template
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
        $__internal_68b503f1596090e406f3f14f8c0ef877beeb0edd334178a65bc7f07ac1fe8066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b503f1596090e406f3f14f8c0ef877beeb0edd334178a65bc7f07ac1fe8066->enter($__internal_68b503f1596090e406f3f14f8c0ef877beeb0edd334178a65bc7f07ac1fe8066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_e657174cb0d1cf0fbef2290c8af4ae94b32db8e36e02cbaf21f8a48357da1d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e657174cb0d1cf0fbef2290c8af4ae94b32db8e36e02cbaf21f8a48357da1d04->enter($__internal_e657174cb0d1cf0fbef2290c8af4ae94b32db8e36e02cbaf21f8a48357da1d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_68b503f1596090e406f3f14f8c0ef877beeb0edd334178a65bc7f07ac1fe8066->leave($__internal_68b503f1596090e406f3f14f8c0ef877beeb0edd334178a65bc7f07ac1fe8066_prof);

        
        $__internal_e657174cb0d1cf0fbef2290c8af4ae94b32db8e36e02cbaf21f8a48357da1d04->leave($__internal_e657174cb0d1cf0fbef2290c8af4ae94b32db8e36e02cbaf21f8a48357da1d04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
