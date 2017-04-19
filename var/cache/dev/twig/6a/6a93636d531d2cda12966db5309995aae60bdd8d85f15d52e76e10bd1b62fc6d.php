<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_621b7c51d16053bca3643ec1abf82fca543b79fc35a9dccbb614e7e71cf1a9d3 extends Twig_Template
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
        $__internal_c791c7d48a78dd8504a91c39446688561a835c1b1cae5666ee61fbc285f8f507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c791c7d48a78dd8504a91c39446688561a835c1b1cae5666ee61fbc285f8f507->enter($__internal_c791c7d48a78dd8504a91c39446688561a835c1b1cae5666ee61fbc285f8f507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_24095698eb4d92627958a57359d9c5a6f6b317a2488612212dc8f553530ca2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24095698eb4d92627958a57359d9c5a6f6b317a2488612212dc8f553530ca2b3->enter($__internal_24095698eb4d92627958a57359d9c5a6f6b317a2488612212dc8f553530ca2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c791c7d48a78dd8504a91c39446688561a835c1b1cae5666ee61fbc285f8f507->leave($__internal_c791c7d48a78dd8504a91c39446688561a835c1b1cae5666ee61fbc285f8f507_prof);

        
        $__internal_24095698eb4d92627958a57359d9c5a6f6b317a2488612212dc8f553530ca2b3->leave($__internal_24095698eb4d92627958a57359d9c5a6f6b317a2488612212dc8f553530ca2b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
