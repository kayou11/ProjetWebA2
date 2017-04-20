<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6ae5ba7a6df266ef8ba3ad674469323f2b84bc647c6aac8a5abc6ef046090cbe extends Twig_Template
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
        $__internal_0e853d03163a54ba84d59326dc79a3223f1391059d1fe7e608da917580570ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e853d03163a54ba84d59326dc79a3223f1391059d1fe7e608da917580570ac8->enter($__internal_0e853d03163a54ba84d59326dc79a3223f1391059d1fe7e608da917580570ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8bfed2492acda3d342db9468528cb3950bd1861de1ac11955f83d8af93b0ce82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfed2492acda3d342db9468528cb3950bd1861de1ac11955f83d8af93b0ce82->enter($__internal_8bfed2492acda3d342db9468528cb3950bd1861de1ac11955f83d8af93b0ce82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0e853d03163a54ba84d59326dc79a3223f1391059d1fe7e608da917580570ac8->leave($__internal_0e853d03163a54ba84d59326dc79a3223f1391059d1fe7e608da917580570ac8_prof);

        
        $__internal_8bfed2492acda3d342db9468528cb3950bd1861de1ac11955f83d8af93b0ce82->leave($__internal_8bfed2492acda3d342db9468528cb3950bd1861de1ac11955f83d8af93b0ce82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
