<?php

/* SyliusShopBundle:Common/Order/Table:_item.html.twig */
class __TwigTemplate_ff11281a7c7fc9f57eb87ff68c101bc1e011ac7c35c4ad0e3f8371f017629329 extends Twig_Template
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
        $__internal_ef478f02404868d73eb8ebdcad87f1a275c12f3eac32da22708b1213b307411a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef478f02404868d73eb8ebdcad87f1a275c12f3eac32da22708b1213b307411a->enter($__internal_ef478f02404868d73eb8ebdcad87f1a275c12f3eac32da22708b1213b307411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_item.html.twig"));

        $__internal_c81ee2a7e3ba484f9f1a38af423bbd30aa352a94a9479c7737a4b949f75f66e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81ee2a7e3ba484f9f1a38af423bbd30aa352a94a9479c7737a4b949f75f66e3->enter($__internal_c81ee2a7e3ba484f9f1a38af423bbd30aa352a94a9479c7737a4b949f75f66e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_item.html.twig", 1);
        // line 2
        echo "
<tr>
    <td>
        ";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "SyliusShopBundle:Common/Order/Table:_item.html.twig", 5)->display(array_merge($context, array("variant" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "variant", array()))));
        // line 6
        echo "    </td>
    <td>
        <span class=\"sylius-unit-price\">";
        // line 8
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "unitPrice", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "</span>
    </td>
    <td class=\"center aligned\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "quantity", array()), "html", null, true);
        echo "</td>
    <td class=\"right aligned\">";
        // line 11
        echo $context["money"]->getformat($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "subtotal", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "</td>
</tr>
";
        
        $__internal_ef478f02404868d73eb8ebdcad87f1a275c12f3eac32da22708b1213b307411a->leave($__internal_ef478f02404868d73eb8ebdcad87f1a275c12f3eac32da22708b1213b307411a_prof);

        
        $__internal_c81ee2a7e3ba484f9f1a38af423bbd30aa352a94a9479c7737a4b949f75f66e3->leave($__internal_c81ee2a7e3ba484f9f1a38af423bbd30aa352a94a9479c7737a4b949f75f66e3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  43 => 10,  38 => 8,  34 => 6,  32 => 5,  27 => 2,  25 => 1,);
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
    <td>
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': item.variant} %}
    </td>
    <td>
        <span class=\"sylius-unit-price\">{{ money.format(item.unitPrice, order.currencyCode) }}</span>
    </td>
    <td class=\"center aligned\">{{ item.quantity }}</td>
    <td class=\"right aligned\">{{ money.format(item.subtotal, order.currencyCode) }}</td>
</tr>
", "SyliusShopBundle:Common/Order/Table:_item.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_item.html.twig");
    }
}
