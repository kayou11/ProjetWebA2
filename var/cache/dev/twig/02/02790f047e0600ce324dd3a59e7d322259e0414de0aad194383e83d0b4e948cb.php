<?php

/* SyliusShopBundle:Cart/Summary:_totals.html.twig */
class __TwigTemplate_456a7079e8f2e140677f48ac65dbb1acf078e82946db3eabd831c09b05ef4b4b extends Twig_Template
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
        $__internal_083a40d790ddca33071beea2eec1700d68685f74c8422a6fc26d55b57595361f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083a40d790ddca33071beea2eec1700d68685f74c8422a6fc26d55b57595361f->enter($__internal_083a40d790ddca33071beea2eec1700d68685f74c8422a6fc26d55b57595361f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_totals.html.twig"));

        $__internal_a36234a86535555fc532902eab5bebf2a281d6d33df5b0c24de6dce48dc8224f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36234a86535555fc532902eab5bebf2a281d6d33df5b0c24de6dce48dc8224f->enter($__internal_a36234a86535555fc532902eab5bebf2a281d6d33df5b0c24de6dce48dc8224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart/Summary:_totals.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.summary"), "html", null, true);
        echo "</h2>

    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.totals", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
        echo "

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tax"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-tax-total\" class=\"right aligned\">";
        // line 12
        echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "taxTotal", array()));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-shipping-total\" class=\"right aligned\">";
        // line 16
        echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "shippingTotal", array()));
        echo "</td>
        </tr>
        ";
        // line 18
        if ($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "orderPromotionTotal", array())) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.discount"), "html", null, true);
            echo ":</td>
            <td id=\"sylius-cart-promotion-total\" class=\"right aligned\">";
            // line 21
            echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "orderPromotionTotal", array()));
            echo "</td>
        </tr>
        ";
        }
        // line 24
        echo "        <tr style=\"font-size: 2em;\">
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_total"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-grand-total\" class=\"right aligned\">";
        // line 26
        echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "total", array()));
        echo "</td>
        </tr>
        ";
        // line 28
        if ( !($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "currencyCode", array()) === $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()))) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.base_currency_order_total"), "html", null, true);
            echo ":</td>
                <td id=\"sylius-cart-base-grand-total\" class=\"right aligned\">";
            // line 31
            echo $context["money"]->getformat($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "total", array()), $this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "currencyCode", array()));
            echo "</td>
            </tr>
        ";
        }
        // line 34
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_083a40d790ddca33071beea2eec1700d68685f74c8422a6fc26d55b57595361f->leave($__internal_083a40d790ddca33071beea2eec1700d68685f74c8422a6fc26d55b57595361f_prof);

        
        $__internal_a36234a86535555fc532902eab5bebf2a281d6d33df5b0c24de6dce48dc8224f->leave($__internal_a36234a86535555fc532902eab5bebf2a281d6d33df5b0c24de6dce48dc8224f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  99 => 31,  95 => 30,  92 => 29,  90 => 28,  85 => 26,  81 => 25,  78 => 24,  72 => 21,  68 => 20,  65 => 19,  63 => 18,  58 => 16,  54 => 15,  48 => 12,  44 => 11,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
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

<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">{{ 'sylius.ui.summary'|trans }}</h2>

    {{ sonata_block_render_event('sylius.shop.cart.summary.totals', {'cart': cart}) }}

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>{{ 'sylius.ui.tax'|trans }}:</td>
            <td id=\"sylius-cart-tax-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.taxTotal) }}</td>
        </tr>
        <tr>
            <td>{{ 'sylius.ui.shipping'|trans }}:</td>
            <td id=\"sylius-cart-shipping-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.shippingTotal) }}</td>
        </tr>
        {% if cart.orderPromotionTotal %}
        <tr>
            <td>{{ 'sylius.ui.discount'|trans }}:</td>
            <td id=\"sylius-cart-promotion-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.orderPromotionTotal) }}</td>
        </tr>
        {% endif %}
        <tr style=\"font-size: 2em;\">
            <td>{{ 'sylius.ui.order_total'|trans }}:</td>
            <td id=\"sylius-cart-grand-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.total) }}</td>
        </tr>
        {% if cart.currencyCode is not same as(sylius.currencyCode) %}
            <tr>
                <td>{{ 'sylius.ui.base_currency_order_total'|trans }}:</td>
                <td id=\"sylius-cart-base-grand-total\" class=\"right aligned\">{{ money.format(cart.total, cart.currencyCode) }}</td>
            </tr>
        {% endif %}
        </tbody>
    </table>
</div>
", "SyliusShopBundle:Cart/Summary:_totals.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_totals.html.twig");
    }
}
