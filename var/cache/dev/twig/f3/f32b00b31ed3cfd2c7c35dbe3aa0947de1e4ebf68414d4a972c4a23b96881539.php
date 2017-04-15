<?php

/* SyliusAdminBundle:Order/Show/Summary:_item.html.twig */
class __TwigTemplate_3d174af8da9545ca1d4da2d183e2e37487261c0601ea763e724b995b1e9a26fb extends Twig_Template
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
        $__internal_c9b6dac722be324ee3d4412fc8701b9b424c4f2755e7c06d239f655807acdce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b6dac722be324ee3d4412fc8701b9b424c4f2755e7c06d239f655807acdce7->enter($__internal_c9b6dac722be324ee3d4412fc8701b9b424c4f2755e7c06d239f655807acdce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig"));

        $__internal_decb971c8645b1fe62d8bac807e9a2d0edb6dd7d9bd734b2940934e40ffdec08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decb971c8645b1fe62d8bac807e9a2d0edb6dd7d9bd734b2940934e40ffdec08->enter($__internal_decb971c8645b1fe62d8bac807e9a2d0edb6dd7d9bd734b2940934e40ffdec08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["itemPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT");
        // line 5
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 6
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 7
        echo "
";
        // line 8
        $context["variant"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "variant", array());
        // line 9
        $context["product"] = $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "product", array());
        // line 10
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Product/_info.html.twig", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", 13)->display($context);
        // line 14
        echo "    </td>
    <td class=\"right aligned unit-price\">
        ";
        // line 16
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "unitPrice", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned discounted-unit-price\">
        ";
        // line 19
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "discountedUnitPrice", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned quantity\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "quantity", array()), "html", null, true);
        echo "
    </td>
    <td class=\"right aligned subtotal\">
        ";
        // line 25
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "subtotal", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned discount\">
        ";
        // line 28
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getAdjustmentsTotalRecursively", array(0 => ($context["orderPromotionAdjustment"] ?? $this->getContext($context, "orderPromotionAdjustment"))), "method"), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned tax\">
        ";
        // line 31
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "taxTotal", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned total\">
        ";
        // line 34
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "total", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        
        $__internal_c9b6dac722be324ee3d4412fc8701b9b424c4f2755e7c06d239f655807acdce7->leave($__internal_c9b6dac722be324ee3d4412fc8701b9b424c4f2755e7c06d239f655807acdce7_prof);

        
        $__internal_decb971c8645b1fe62d8bac807e9a2d0edb6dd7d9bd734b2940934e40ffdec08->leave($__internal_decb971c8645b1fe62d8bac807e9a2d0edb6dd7d9bd734b2940934e40ffdec08_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show/Summary:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  86 => 31,  80 => 28,  74 => 25,  68 => 22,  62 => 19,  56 => 16,  52 => 14,  50 => 13,  45 => 10,  43 => 9,  41 => 8,  38 => 7,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set itemPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set variant = item.variant %}
{% set product = variant.product %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusAdmin/Product/_info.html.twig' %}
    </td>
    <td class=\"right aligned unit-price\">
        {{ money.format(item.unitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned discounted-unit-price\">
        {{ money.format(item.discountedUnitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned quantity\">
        {{ item.quantity }}
    </td>
    <td class=\"right aligned subtotal\">
        {{ money.format(item.subtotal, order.currencyCode) }}
    </td>
    <td class=\"right aligned discount\">
        {{ money.format(item.getAdjustmentsTotalRecursively(orderPromotionAdjustment), order.currencyCode) }}
    </td>
    <td class=\"right aligned tax\">
        {{ money.format(item.taxTotal, order.currencyCode) }}
    </td>
    <td class=\"right aligned total\">
        {{ money.format(item.total, order.currencyCode) }}
    </td>
</tr>
", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_item.html.twig");
    }
}
