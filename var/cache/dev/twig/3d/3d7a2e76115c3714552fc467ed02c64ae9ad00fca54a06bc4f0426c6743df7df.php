<?php

/* SyliusShopBundle:Common/Order/Table:_promotion.html.twig */
class __TwigTemplate_5cafd65c1aeb0b407d41c472a74dc7db9700299d9a548987c66d2cca2695430e extends Twig_Template
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
        $__internal_1f43b137ab2df118b89988ab39c779547e961119275822c37bd73344d3811a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f43b137ab2df118b89988ab39c779547e961119275822c37bd73344d3811a76->enter($__internal_1f43b137ab2df118b89988ab39c779547e961119275822c37bd73344d3811a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig"));

        $__internal_918eab92042eb7509fb1d6c662e7d440b443e6c724e599d0db833096859c3821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918eab92042eb7509fb1d6c662e7d440b443e6c724e599d0db833096859c3821->enter($__internal_918eab92042eb7509fb1d6c662e7d440b443e6c724e599d0db833096859c3821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        echo "
<td colspan=\"2\" id=\"promotion-discounts\">
    ";
        // line 6
        $context["orderPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "getAdjustmentsRecursively", array(0 => ($context["orderPromotionAdjustment"] ?? $this->getContext($context, "orderPromotionAdjustment"))), "method")));
        // line 7
        echo "    ";
        if ( !twig_test_empty(($context["orderPromotions"] ?? $this->getContext($context, "orderPromotions")))) {
            // line 8
            echo "        <div class=\"ui relaxed divided list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orderPromotions"] ?? $this->getContext($context, "orderPromotions")));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 10
                echo "                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">";
                // line 12
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</div>
                        <div class=\"description\">
                            ";
                // line 14
                echo $context["money"]->getconvertAndFormat($context["amount"]);
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </div>
    ";
        }
        // line 21
        echo "</td>
<td colspan=\"2\" id=\"promotion-total\" class=\"right aligned\">
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotion_total"), "html", null, true);
        echo ":
    ";
        // line 24
        echo $context["money"]->getformat($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderPromotionTotal", array()), $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()));
        echo "
</td>
";
        
        $__internal_1f43b137ab2df118b89988ab39c779547e961119275822c37bd73344d3811a76->leave($__internal_1f43b137ab2df118b89988ab39c779547e961119275822c37bd73344d3811a76_prof);

        
        $__internal_918eab92042eb7509fb1d6c662e7d440b443e6c724e599d0db833096859c3821->leave($__internal_918eab92042eb7509fb1d6c662e7d440b443e6c724e599d0db833096859c3821_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  76 => 23,  72 => 21,  68 => 19,  57 => 14,  52 => 12,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
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

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}

<td colspan=\"2\" id=\"promotion-discounts\">
    {% set orderPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderPromotionAdjustment)) %}
    {% if not orderPromotions is empty %}
        <div class=\"ui relaxed divided list\">
            {% for label, amount in orderPromotions %}
                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">{{ label }}</div>
                        <div class=\"description\">
                            {{ money.convertAndFormat(amount) }}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</td>
<td colspan=\"2\" id=\"promotion-total\" class=\"right aligned\">
    {{ 'sylius.ui.promotion_total'|trans }}:
    {{ money.format(order.orderPromotionTotal, order.currencyCode) }}
</td>
", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_promotion.html.twig");
    }
}
