<?php

/* SyliusShopBundle:Common/Order/Table:_totals.html.twig */
class __TwigTemplate_047d446f40addbacc7c3893de2c9501b6089285a1c749af21ebfcadc659ee055 extends Twig_Template
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
        $__internal_d24663f8a6829d51acac169be69ca705a0f65530f431487de1f5c0eda38b23e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24663f8a6829d51acac169be69ca705a0f65530f431487de1f5c0eda38b23e8->enter($__internal_d24663f8a6829d51acac169be69ca705a0f65530f431487de1f5c0eda38b23e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_totals.html.twig"));

        $__internal_dfb4bb9b9be451c63a986f3591d0fe7b4209e0cad543ef6bf4dbbe6fd82ed33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb4bb9b9be451c63a986f3591d0fe7b4209e0cad543ef6bf4dbbe6fd82ed33e->enter($__internal_dfb4bb9b9be451c63a986f3591d0fe7b4209e0cad543ef6bf4dbbe6fd82ed33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 1);
        // line 2
        echo "
<tr>
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo ": ";
        echo $context["money"]->getformat($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "itemsTotal", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </th>
</tr>
<tr>
    ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_shipping.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 9)->display(array_merge($context, array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        // line 10
        echo "</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tax_total"), "html", null, true);
        echo ": ";
        echo $context["money"]->getformat($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "taxTotal", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_promotion.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 17)->display(array_merge($context, array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        // line 18
        echo "</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
        echo ": ";
        echo $context["money"]->getformat($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "total", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        // line 24
        if ( !($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()) === $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()))) {
            // line 25
            echo "<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"base-total\">
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total_in_base_currency"), "html", null, true);
            echo ": ";
            echo $context["money"]->getformat($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "total", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
            echo "
    </td>
</tr>
";
        }
        
        $__internal_d24663f8a6829d51acac169be69ca705a0f65530f431487de1f5c0eda38b23e8->leave($__internal_d24663f8a6829d51acac169be69ca705a0f65530f431487de1f5c0eda38b23e8_prof);

        
        $__internal_dfb4bb9b9be451c63a986f3591d0fe7b4209e0cad543ef6bf4dbbe6fd82ed33e->leave($__internal_dfb4bb9b9be451c63a986f3591d0fe7b4209e0cad543ef6bf4dbbe6fd82ed33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  74 => 25,  72 => 24,  64 => 21,  59 => 18,  57 => 17,  48 => 13,  43 => 10,  41 => 9,  32 => 5,  27 => 2,  25 => 1,);
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

<tr>
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\">
        {{ 'sylius.ui.subtotal'|trans }}: {{ money.format(order.itemsTotal, order.currencyCode) }}
    </th>
</tr>
<tr>
    {% include '@SyliusShop/Common/Order/Table/_shipping.html.twig' with {'order': order} %}
</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        {{ 'sylius.ui.tax_total'|trans }}: {{ money.format(order.taxTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    {% include '@SyliusShop/Common/Order/Table/_promotion.html.twig' with {'order': order} %}
</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\">
        {{ 'sylius.ui.total'|trans }}: {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
{% if order.currencyCode is not same as(sylius.currencyCode) %}
<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"base-total\">
        {{ 'sylius.ui.total_in_base_currency'|trans }}: {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
{% endif %}
", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_totals.html.twig");
    }
}
