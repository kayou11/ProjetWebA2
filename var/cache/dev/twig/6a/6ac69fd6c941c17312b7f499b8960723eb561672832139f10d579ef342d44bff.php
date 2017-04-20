<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_b4ac326f69f3e2bed70655b1406fb50767e5db5ed0b7fd13c6d7032d1228e08f extends Twig_Template
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
        $__internal_fb7f69f0b8aa24e743fcf1dc70000661dd3c97a2794aa98049e96f72ded7411d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7f69f0b8aa24e743fcf1dc70000661dd3c97a2794aa98049e96f72ded7411d->enter($__internal_fb7f69f0b8aa24e743fcf1dc70000661dd3c97a2794aa98049e96f72ded7411d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_dde37f4e31d3bbd21e6c3843c64b332d36dc97da9e3fc22cd5321fb96658fb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde37f4e31d3bbd21e6c3843c64b332d36dc97da9e3fc22cd5321fb96658fb3b->enter($__internal_dde37f4e31d3bbd21e6c3843c64b332d36dc97da9e3fc22cd5321fb96658fb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_fb7f69f0b8aa24e743fcf1dc70000661dd3c97a2794aa98049e96f72ded7411d->leave($__internal_fb7f69f0b8aa24e743fcf1dc70000661dd3c97a2794aa98049e96f72ded7411d_prof);

        
        $__internal_dde37f4e31d3bbd21e6c3843c64b332d36dc97da9e3fc22cd5321fb96658fb3b->leave($__internal_dde37f4e31d3bbd21e6c3843c64b332d36dc97da9e3fc22cd5321fb96658fb3b_prof);

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
