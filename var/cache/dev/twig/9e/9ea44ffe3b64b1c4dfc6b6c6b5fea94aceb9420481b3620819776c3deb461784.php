<?php

/* SyliusShopBundle:Common/Form:_province.html.twig */
class __TwigTemplate_a38e74c8c1bd7639129849f95845adf3bf4cee5cfa0286ff63ef24430e54c92a extends Twig_Template
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
        $__internal_513584abcc53b9c0ae30431604e2002f04a0d0ff61c1d4dd71ab26d7423cb343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513584abcc53b9c0ae30431604e2002f04a0d0ff61c1d4dd71ab26d7423cb343->enter($__internal_513584abcc53b9c0ae30431604e2002f04a0d0ff61c1d4dd71ab26d7423cb343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_province.html.twig"));

        $__internal_eee14f28960d3a8dfbf592bbfb160991b680e9aafdd7654ba3b43d805fda9b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee14f28960d3a8dfbf592bbfb160991b680e9aafdd7654ba3b43d805fda9b61->enter($__internal_eee14f28960d3a8dfbf592bbfb160991b680e9aafdd7654ba3b43d805fda9b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_province.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "

";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "ui dropdown")));
            echo "
";
        } else {
            // line 6
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
";
        }
        
        $__internal_513584abcc53b9c0ae30431604e2002f04a0d0ff61c1d4dd71ab26d7423cb343->leave($__internal_513584abcc53b9c0ae30431604e2002f04a0d0ff61c1d4dd71ab26d7423cb343_prof);

        
        $__internal_eee14f28960d3a8dfbf592bbfb160991b680e9aafdd7654ba3b43d805fda9b61->leave($__internal_eee14f28960d3a8dfbf592bbfb160991b680e9aafdd7654ba3b43d805fda9b61_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_province.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 4,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_label(form) }}

{% if form.vars.choices is defined %}
    {{ form_widget(form, {'attr': {'class': 'ui dropdown'}}) }}
{% else %}
    {{ form_widget(form) }}
{% endif %}
", "SyliusShopBundle:Common/Form:_province.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_province.html.twig");
    }
}
