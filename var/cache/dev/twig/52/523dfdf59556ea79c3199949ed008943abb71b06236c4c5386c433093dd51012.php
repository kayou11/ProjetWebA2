<?php

/* @SyliusShop/Product/Show/_price.html.twig */
class __TwigTemplate_caa260248950a6ecb6e73857a2fc7e562e954843b53cfa0ecccd4bea2e84125f extends Twig_Template
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
        $__internal_07657105b53bda4d7b8ab77255e6550826127737935676989d33d2bb385a88f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07657105b53bda4d7b8ab77255e6550826127737935676989d33d2bb385a88f9->enter($__internal_07657105b53bda4d7b8ab77255e6550826127737935676989d33d2bb385a88f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_price.html.twig"));

        $__internal_6dca5a9332457944513217cf369deda130affae03993aee3cdc4c948f728044b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dca5a9332457944513217cf369deda130affae03993aee3cdc4c948f728044b->enter($__internal_6dca5a9332457944513217cf369deda130affae03993aee3cdc4c948f728044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_price.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_price.html.twig", 1);
        // line 2
        echo "
<span class=\"ui huge header\" id=\"product-price\">
    ";
        // line 4
        echo $context["money"]->getcalculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array(($context["product"] ?? $this->getContext($context, "product")))));
        echo "
</span>
";
        
        $__internal_07657105b53bda4d7b8ab77255e6550826127737935676989d33d2bb385a88f9->leave($__internal_07657105b53bda4d7b8ab77255e6550826127737935676989d33d2bb385a88f9_prof);

        
        $__internal_6dca5a9332457944513217cf369deda130affae03993aee3cdc4c948f728044b->leave($__internal_6dca5a9332457944513217cf369deda130affae03993aee3cdc4c948f728044b_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<span class=\"ui huge header\" id=\"product-price\">
    {{ money.calculatePrice(product|sylius_resolve_variant) }}
</span>
", "@SyliusShop/Product/Show/_price.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_price.html.twig");
    }
}
