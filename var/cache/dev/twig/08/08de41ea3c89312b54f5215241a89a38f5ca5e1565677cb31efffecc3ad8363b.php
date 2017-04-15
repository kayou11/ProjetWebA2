<?php

/* SyliusShopBundle:Checkout:_steps.html.twig */
class __TwigTemplate_23ac8c33781b0580a7c5e04b784ba68e303dfd5cc9f69be63a22ccbf07e0c4cf extends Twig_Template
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
        $__internal_486903299f84cbbb198c80b5ee423f515a1870cd80b3507b03094b9f6542b547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486903299f84cbbb198c80b5ee423f515a1870cd80b3507b03094b9f6542b547->enter($__internal_486903299f84cbbb198c80b5ee423f515a1870cd80b3507b03094b9f6542b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_steps.html.twig"));

        $__internal_986032d93a16c179fc5ab1a5ec3bc5fd0090f8d7051205a43d77a49d66f11239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986032d93a16c179fc5ab1a5ec3bc5fd0090f8d7051205a43d77a49d66f11239->enter($__internal_986032d93a16c179fc5ab1a5ec3bc5fd0090f8d7051205a43d77a49d66f11239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_steps.html.twig"));

        // line 1
        if (( !array_key_exists("active", $context) || (($context["active"] ?? $this->getContext($context, "active")) == "address"))) {
            // line 2
            echo "    ";
            $context["steps"] = array("address" => "active", "select_shipping" => "disabled", "select_payment" => "disabled", "complete" => "disabled");
        } elseif ((        // line 3
($context["active"] ?? $this->getContext($context, "active")) == "select_shipping")) {
            // line 4
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "active", "select_payment" => "disabled", "complete" => "disabled");
        } elseif ((        // line 5
($context["active"] ?? $this->getContext($context, "active")) == "select_payment")) {
            // line 6
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "completed", "select_payment" => "active", "complete" => "disabled");
        } else {
            // line 8
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "completed", "select_payment" => "completed", "complete" => "active");
        }
        // line 10
        echo "
";
        // line 11
        $context["order_requires_payment"] = call_user_func_array($this->env->getFunction('sylius_is_payment_required')->getCallable(), array(($context["order"] ?? $this->getContext($context, "order"))));
        // line 12
        $context["order_requires_shipping"] = call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), array(($context["order"] ?? $this->getContext($context, "order"))));
        // line 13
        echo "
";
        // line 14
        $context["steps_count"] = "four";
        // line 15
        if (( !($context["order_requires_payment"] ?? $this->getContext($context, "order_requires_payment")) &&  !($context["order_requires_shipping"] ?? $this->getContext($context, "order_requires_shipping")))) {
            // line 16
            echo "    ";
            $context["steps_count"] = "two";
        } elseif (( !        // line 17
($context["order_requires_payment"] ?? $this->getContext($context, "order_requires_payment")) ||  !($context["order_requires_shipping"] ?? $this->getContext($context, "order_requires_shipping")))) {
            // line 18
            echo "    ";
            $context["steps_count"] = "three";
        }
        // line 20
        echo "
<div class=\"ui ";
        // line 21
        echo twig_escape_filter($this->env, ($context["steps_count"] ?? $this->getContext($context, "steps_count")), "html", null, true);
        echo " steps\">
    <a class=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["steps"] ?? $this->getContext($context, "steps")), "address", array(), "array"), "html", null, true);
        echo " step\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address");
        echo "\">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.fill_in_your_billing_and_shipping_addresses"), "html", null, true);
        echo "</div>
        </div>
    </a>
    ";
        // line 29
        if (($context["order_requires_shipping"] ?? $this->getContext($context, "order_requires_shipping"))) {
            // line 30
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["steps"] ?? $this->getContext($context, "steps")), "select_shipping", array(), "array"), "html", null, true);
            echo " step\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_shipping");
            echo "\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_how_your_goods_will_be_delivered"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 38
        echo "    ";
        if (($context["order_requires_payment"] ?? $this->getContext($context, "order_requires_payment"))) {
            // line 39
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["steps"] ?? $this->getContext($context, "steps")), "select_payment", array(), "array"), "html", null, true);
            echo " step\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_payment");
            echo "\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.payment"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_how_you_will_pay"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 47
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["steps"] ?? $this->getContext($context, "steps")), "complete", array(), "array"), "html", null, true);
        echo " step\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_complete");
        echo "\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.complete"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.review_and_confirm_your_order"), "html", null, true);
        echo "</div>
        </div>
    </div>
</div>
";
        
        $__internal_486903299f84cbbb198c80b5ee423f515a1870cd80b3507b03094b9f6542b547->leave($__internal_486903299f84cbbb198c80b5ee423f515a1870cd80b3507b03094b9f6542b547_prof);

        
        $__internal_986032d93a16c179fc5ab1a5ec3bc5fd0090f8d7051205a43d77a49d66f11239->leave($__internal_986032d93a16c179fc5ab1a5ec3bc5fd0090f8d7051205a43d77a49d66f11239_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 51,  147 => 50,  138 => 47,  131 => 43,  127 => 42,  118 => 39,  115 => 38,  108 => 34,  104 => 33,  95 => 30,  93 => 29,  87 => 26,  83 => 25,  75 => 22,  71 => 21,  68 => 20,  64 => 18,  62 => 17,  59 => 16,  57 => 15,  55 => 14,  52 => 13,  50 => 12,  48 => 11,  45 => 10,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if active is not defined or active == 'address' %}
    {% set steps = {'address': 'active', 'select_shipping': 'disabled', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_shipping' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'active', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_payment' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'active', 'complete': 'disabled'} %}
{% else %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'completed', 'complete': 'active'} %}
{% endif %}

{% set order_requires_payment = sylius_is_payment_required(order) %}
{% set order_requires_shipping = sylius_is_shipping_required(order) %}

{% set steps_count = 'four' %}
{% if not order_requires_payment and not order_requires_shipping %}
    {% set steps_count = 'two' %}
{% elseif not order_requires_payment or not order_requires_shipping %}
    {% set steps_count = 'three' %}
{% endif %}

<div class=\"ui {{ steps_count }} steps\">
    <a class=\"{{ steps['address'] }} step\" href=\"{{ path('sylius_shop_checkout_address') }}\">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.address'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.fill_in_your_billing_and_shipping_addresses'|trans }}</div>
        </div>
    </a>
    {% if order_requires_shipping %}
    <a class=\"{{ steps['select_shipping'] }} step\" href=\"{{ path('sylius_shop_checkout_select_shipping') }}\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.shipping'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_your_goods_will_be_delivered'|trans }}</div>
        </div>
    </a>
    {% endif %}
    {% if order_requires_payment %}
    <a class=\"{{ steps['select_payment'] }} step\" href=\"{{ path('sylius_shop_checkout_select_payment') }}\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.payment'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_you_will_pay'|trans }}</div>
        </div>
    </a>
    {% endif %}
    <div class=\"{{ steps['complete'] }} step\" href=\"{{ path('sylius_shop_checkout_complete') }}\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.complete'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.review_and_confirm_your_order'|trans }}</div>
        </div>
    </div>
</div>
", "SyliusShopBundle:Checkout:_steps.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_steps.html.twig");
    }
}
