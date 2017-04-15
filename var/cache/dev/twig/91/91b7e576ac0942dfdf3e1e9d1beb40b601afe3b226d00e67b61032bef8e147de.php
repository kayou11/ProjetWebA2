<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_af3a0f9a2dfef6b048c157d5f4034e7c17083f1b5a8c74503326554589ce42c7 extends Twig_Template
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
        $__internal_17d0e314a77a9f51be5ff1566043f3d4531cf7c1e85b0cac4c5b7a6843856b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d0e314a77a9f51be5ff1566043f3d4531cf7c1e85b0cac4c5b7a6843856b76->enter($__internal_17d0e314a77a9f51be5ff1566043f3d4531cf7c1e85b0cac4c5b7a6843856b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_55cf9e4227af87e66b033f2f2843b94fe22118acc72f9e96e759933e69264be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cf9e4227af87e66b033f2f2843b94fe22118acc72f9e96e759933e69264be8->enter($__internal_55cf9e4227af87e66b033f2f2843b94fe22118acc72f9e96e759933e69264be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_17d0e314a77a9f51be5ff1566043f3d4531cf7c1e85b0cac4c5b7a6843856b76->leave($__internal_17d0e314a77a9f51be5ff1566043f3d4531cf7c1e85b0cac4c5b7a6843856b76_prof);

        
        $__internal_55cf9e4227af87e66b033f2f2843b94fe22118acc72f9e96e759933e69264be8->leave($__internal_55cf9e4227af87e66b033f2f2843b94fe22118acc72f9e96e759933e69264be8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
