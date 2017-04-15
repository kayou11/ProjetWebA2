<?php

/* @SyliusShop/Product/Show/_inventory.html.twig */
class __TwigTemplate_4c96650be581fc2396d45939cf8cb445ddc8dec27ba43ec125986283877346a3 extends Twig_Template
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
        $__internal_921cddd122b22d8b0387b91d680ad37b58b26226c5da470b7e342b80e5ac94c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921cddd122b22d8b0387b91d680ad37b58b26226c5da470b7e342b80e5ac94c4->enter($__internal_921cddd122b22d8b0387b91d680ad37b58b26226c5da470b7e342b80e5ac94c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_inventory.html.twig"));

        $__internal_acce52fdc0bbdbc39a80994d8aeb5fc4ea809e134cbe4be1bf34f88276da768e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acce52fdc0bbdbc39a80994d8aeb5fc4ea809e134cbe4be1bf34f88276da768e->enter($__internal_acce52fdc0bbdbc39a80994d8aeb5fc4ea809e134cbe4be1bf34f88276da768e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_inventory.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array()), "empty", array(), "method") || ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array()) &&  !call_user_func_array($this->env->getFunction('sylius_inventory_is_available')->getCallable(), array($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array()), "first", array())))))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Product/Show/_outOfStock.html.twig", "@SyliusShop/Product/Show/_inventory.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_cart_add_item", array("template" => "@SyliusShop/Product/Show/_addToCart.html.twig", "productId" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))));
            echo "
";
        }
        
        $__internal_921cddd122b22d8b0387b91d680ad37b58b26226c5da470b7e342b80e5ac94c4->leave($__internal_921cddd122b22d8b0387b91d680ad37b58b26226c5da470b7e342b80e5ac94c4_prof);

        
        $__internal_acce52fdc0bbdbc39a80994d8aeb5fc4ea809e134cbe4be1bf34f88276da768e->leave($__internal_acce52fdc0bbdbc39a80994d8aeb5fc4ea809e134cbe4be1bf34f88276da768e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_inventory.html.twig";
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
        return new Twig_Source("{% if product.variants.empty() or product.simple and not sylius_inventory_is_available(product.variants.first) %}
    {% include '@SyliusShop/Product/Show/_outOfStock.html.twig' %}
{% else %}
    {{ render(url('sylius_shop_partial_cart_add_item', {'template': '@SyliusShop/Product/Show/_addToCart.html.twig', 'productId': product.id})) }}
{% endif %}
", "@SyliusShop/Product/Show/_inventory.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_inventory.html.twig");
    }
}
