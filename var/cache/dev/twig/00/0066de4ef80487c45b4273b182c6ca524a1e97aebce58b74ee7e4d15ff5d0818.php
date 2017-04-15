<?php

/* SyliusUiBundle:Grid/Filter:boolean.html.twig */
class __TwigTemplate_a14aa021eb9a938caa75402d35e292742e214be4bbfb0f28722af54b4e58bb41 extends Twig_Template
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
        $__internal_502d0ff961234155a6d1b0b7dfc0713ccad8b74e9493d9211d9e0272ca0aa294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502d0ff961234155a6d1b0b7dfc0713ccad8b74e9493d9211d9e0272ca0aa294->enter($__internal_502d0ff961234155a6d1b0b7dfc0713ccad8b74e9493d9211d9e0272ca0aa294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:boolean.html.twig"));

        $__internal_1c18364e9b129dd99994af96f44f947ff958b257bcf33cac06f6c46374998903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c18364e9b129dd99994af96f44f947ff958b257bcf33cac06f6c46374998903->enter($__internal_1c18364e9b129dd99994af96f44f947ff958b257bcf33cac06f6c46374998903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:boolean.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'row', array("label" => $this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "label", array())));
        echo "
";
        
        $__internal_502d0ff961234155a6d1b0b7dfc0713ccad8b74e9493d9211d9e0272ca0aa294->leave($__internal_502d0ff961234155a6d1b0b7dfc0713ccad8b74e9493d9211d9e0272ca0aa294_prof);

        
        $__internal_1c18364e9b129dd99994af96f44f947ff958b257bcf33cac06f6c46374998903->leave($__internal_1c18364e9b129dd99994af96f44f947ff958b257bcf33cac06f6c46374998903_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{{ form_row(form, {'label': filter.label}) }}
", "SyliusUiBundle:Grid/Filter:boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Filter/boolean.html.twig");
    }
}
