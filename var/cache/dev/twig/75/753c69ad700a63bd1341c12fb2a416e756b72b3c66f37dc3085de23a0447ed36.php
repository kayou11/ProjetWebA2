<?php

/* SyliusShopBundle:Checkout:_summary.html.twig */
class __TwigTemplate_d117da9bcbd39f75286c9b4c2c31dd6a62591e2e8fe9bd1dee6ae18454cbc538 extends Twig_Template
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
        $__internal_8b278f2b775aa3265093ad32991e7ef9f71301a6bfa276226133e1a09e62de74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b278f2b775aa3265093ad32991e7ef9f71301a6bfa276226133e1a09e62de74->enter($__internal_8b278f2b775aa3265093ad32991e7ef9f71301a6bfa276226133e1a09e62de74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_summary.html.twig"));

        $__internal_a9bd32ca4ff64f054be8a1524425d7a2e08458a82e90db715bea97a2766401f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bd32ca4ff64f054be8a1524425d7a2e08458a82e90db715bea97a2766401f9->enter($__internal_a9bd32ca4ff64f054be8a1524425d7a2e08458a82e90db715bea97a2766401f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_summary.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Checkout:_summary.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-qty\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.quantity"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-subtotal\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getVariant", array()), "product", array()), "name", array()), "html", null, true);
            echo "</td>
                <td class=\"center aligned\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "
                </td>
                <td id=\"sylius-item-";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "variant", array()), "product", array()), "slug", array()), "html", null, true);
            echo "-subtotal\">";
            echo $context["money"]->getconvertAndFormat($this->getAttribute($context["item"], "subtotal", array()));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_8b278f2b775aa3265093ad32991e7ef9f71301a6bfa276226133e1a09e62de74->leave($__internal_8b278f2b775aa3265093ad32991e7ef9f71301a6bfa276226133e1a09e62de74_prof);

        
        $__internal_a9bd32ca4ff64f054be8a1524425d7a2e08458a82e90db715bea97a2766401f9->leave($__internal_a9bd32ca4ff64f054be8a1524425d7a2e08458a82e90db715bea97a2766401f9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  66 => 19,  61 => 17,  56 => 15,  53 => 14,  49 => 13,  42 => 9,  38 => 8,  34 => 7,  27 => 2,  25 => 1,);
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
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">{{ 'sylius.ui.item'|trans }}</th>
            <th class=\"sylius-table-column-qty\">{{ 'sylius.ui.quantity'|trans }}</th>
            <th class=\"sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for item in order.items %}
            <tr>
                <td>{{ item.getVariant.product.name }}</td>
                <td class=\"center aligned\">
                    {{ item.quantity }}
                </td>
                <td id=\"sylius-item-{{ item.variant.product.slug }}-subtotal\">{{ money.convertAndFormat(item.subtotal) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "SyliusShopBundle:Checkout:_summary.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_summary.html.twig");
    }
}
