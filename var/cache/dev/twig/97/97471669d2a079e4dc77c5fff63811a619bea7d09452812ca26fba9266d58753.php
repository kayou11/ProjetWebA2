<?php

/* SyliusAttributeBundle:Types:percent.html.twig */
class __TwigTemplate_b06f8fd8400005f0b2740e6c959d555ac05781e678a4cb72946199cc3b456128 extends Twig_Template
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
        $__internal_f281d4f2a3aa32563d3ebd3c9847c13c6f2c3454d34a9786d8bf9d2d55dbd8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f281d4f2a3aa32563d3ebd3c9847c13c6f2c3454d34a9786d8bf9d2d55dbd8b9->enter($__internal_f281d4f2a3aa32563d3ebd3c9847c13c6f2c3454d34a9786d8bf9d2d55dbd8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:percent.html.twig"));

        $__internal_2291e0eb7e0614b319b9bf456a44f8c5b4b70703fdf46998ad6aec796bc8097b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2291e0eb7e0614b319b9bf456a44f8c5b4b70703fdf46998ad6aec796bc8097b->enter($__internal_2291e0eb7e0614b319b9bf456a44f8c5b4b70703fdf46998ad6aec796bc8097b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:percent.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Sylius\Bundle\UiBundle\Twig\PercentageExtension')->getPercentage($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array())), "html", null, true);
        echo "
";
        
        $__internal_f281d4f2a3aa32563d3ebd3c9847c13c6f2c3454d34a9786d8bf9d2d55dbd8b9->leave($__internal_f281d4f2a3aa32563d3ebd3c9847c13c6f2c3454d34a9786d8bf9d2d55dbd8b9_prof);

        
        $__internal_2291e0eb7e0614b319b9bf456a44f8c5b4b70703fdf46998ad6aec796bc8097b->leave($__internal_2291e0eb7e0614b319b9bf456a44f8c5b4b70703fdf46998ad6aec796bc8097b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ attribute.value|sylius_percentage }}
", "SyliusAttributeBundle:Types:percent.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/percent.html.twig");
    }
}
