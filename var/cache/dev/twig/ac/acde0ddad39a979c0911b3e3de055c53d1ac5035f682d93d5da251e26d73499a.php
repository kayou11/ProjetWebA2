<?php

/* SyliusShopBundle:Checkout/Complete:_form.html.twig */
class __TwigTemplate_4223a4b194c7fbac4df23d45333ff6d46d605edf77daf489750ef0a7dfda68dd extends Twig_Template
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
        $__internal_1c310248f9339f89e58962205a901e83156401567cdf1cb91a68b765fee0a3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c310248f9339f89e58962205a901e83156401567cdf1cb91a68b765fee0a3ca->enter($__internal_1c310248f9339f89e58962205a901e83156401567cdf1cb91a68b765fee0a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_form.html.twig"));

        $__internal_2d710cc48feff35b3385d4f967d05d849055b8582e525e0c8828c583dea174a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d710cc48feff35b3385d4f967d05d849055b8582e525e0c8828c583dea174a6->enter($__internal_2d710cc48feff35b3385d4f967d05d849055b8582e525e0c8828c583dea174a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "notes", array()), 'row', array("attr" => array("rows" => 3)));
        echo "
";
        
        $__internal_1c310248f9339f89e58962205a901e83156401567cdf1cb91a68b765fee0a3ca->leave($__internal_1c310248f9339f89e58962205a901e83156401567cdf1cb91a68b765fee0a3ca_prof);

        
        $__internal_2d710cc48feff35b3385d4f967d05d849055b8582e525e0c8828c583dea174a6->leave($__internal_2d710cc48feff35b3385d4f967d05d849055b8582e525e0c8828c583dea174a6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Complete:_form.html.twig";
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
        return new Twig_Source("{{ form_row(form.notes, {'attr': {'rows': 3}}) }}
", "SyliusShopBundle:Checkout/Complete:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Complete/_form.html.twig");
    }
}
