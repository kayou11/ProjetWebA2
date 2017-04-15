<?php

/* SyliusShopBundle:Cart/Summary:_item.html.twig */
class __TwigTemplate_2d362978082c159d7bae4913bed3f5f7c2b82ed07ac1435fc253a5a7bf7d7ba9 extends Twig_Template
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
        $__internal_3b97ce422e6f3556eec8aac2347f709b870919ecc5b9290eb44dd302684f0d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b97ce422e6f3556eec8aac2347f709b870919ecc5b9290eb44dd302684f0d9c->enter($__internal_3b97ce422e6f3556eec8aac2347f709b870919ecc5b9290eb44dd302684f0d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_item.html.twig"));

        $__internal_a5364522d25a0969d124fe73d97a5c14ecb342d97c2dc314ac3605830bad96e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5364522d25a0969d124fe73d97a5c14ecb342d97c2dc314ac3605830bad96e7->enter($__internal_a5364522d25a0969d124fe73d97a5c14ecb342d97c2dc314ac3605830bad96e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart/Summary:_item.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["product"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "product", array());
        // line 4
        $context["product_variant"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "variant", array());
        // line 5
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 8
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "SyliusShopBundle:Cart/Summary:_item.html.twig", 8)->display(array_merge($context, array("variant" => ($context["product_variant"] ?? $this->getContext($context, "product_variant")))));
        // line 9
        echo "    </td>
    <td class=\"right aligned\">
        ";
        // line 11
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "unitPrice", array()) != $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "discountedUnitPrice", array()))) {
            // line 12
            echo "            <span class=\"sylius-regular-unit-price\">";
            echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "unitPrice", array()));
            echo "</span>
        ";
        }
        // line 14
        echo "        <span class=\"sylius-unit-price\">";
        echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "discountedUnitPrice", array()));
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'widget');
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_summary");
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_cart_item_remove", array("id" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "id", array()))), "html", null, true);
        echo "\" class=\"ui circular icon button sylius-cart-remove-button\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "id", array())), "html", null, true);
        echo "\"><i class=\"remove icon\"></i></button>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\">";
        // line 23
        echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "subtotal", array()));
        echo "</span>
    </td>
</tr>
";
        
        $__internal_3b97ce422e6f3556eec8aac2347f709b870919ecc5b9290eb44dd302684f0d9c->leave($__internal_3b97ce422e6f3556eec8aac2347f709b870919ecc5b9290eb44dd302684f0d9c_prof);

        
        $__internal_a5364522d25a0969d124fe73d97a5c14ecb342d97c2dc314ac3605830bad96e7->leave($__internal_a5364522d25a0969d124fe73d97a5c14ecb342d97c2dc314ac3605830bad96e7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  66 => 20,  60 => 17,  53 => 14,  47 => 12,  45 => 11,  41 => 9,  39 => 8,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
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

{% set product = item.product %}
{% set product_variant = item.variant %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': product_variant} %}
    </td>
    <td class=\"right aligned\">
        {% if item.unitPrice != item.discountedUnitPrice %}
            <span class=\"sylius-regular-unit-price\">{{ money.convertAndFormat(item.unitPrice) }}</span>
        {% endif %}
        <span class=\"sylius-unit-price\">{{ money.convertAndFormat(item.discountedUnitPrice) }}</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">{{ form_widget(form.quantity) }}</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"{{ path('sylius_shop_cart_summary') }}\" data-url=\"{{ path('sylius_shop_ajax_cart_item_remove', {'id': item.id}) }}\" class=\"ui circular icon button sylius-cart-remove-button\" data-csrf-token=\"{{ csrf_token(item.id) }}\"><i class=\"remove icon\"></i></button>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\">{{ money.convertAndFormat(item.subtotal) }}</span>
    </td>
</tr>
", "SyliusShopBundle:Cart/Summary:_item.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_item.html.twig");
    }
}
