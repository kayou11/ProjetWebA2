<?php

/* SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig */
class __TwigTemplate_8c2e64b154d22a3e47f19007192a9b2fb68b0f2d134ce3b2a5faec251c989196 extends Twig_Template
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
        $__internal_708fcd47ff4255b23d2f437036ecd372c75ce675724ab1a08ffe3832a367dd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708fcd47ff4255b23d2f437036ecd372c75ce675724ab1a08ffe3832a367dd0c->enter($__internal_708fcd47ff4255b23d2f437036ecd372c75ce675724ab1a08ffe3832a367dd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig"));

        $__internal_a266472d18a1c439807bf522021a62e13468ac7b8b63c38e329e9f3e77edb3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a266472d18a1c439807bf522021a62e13468ac7b8b63c38e329e9f3e77edb3d8->enter($__internal_a266472d18a1c439807bf522021a62e13468ac7b8b63c38e329e9f3e77edb3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig"));

        // line 1
        $context["enabled"] = twig_length_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "payments", array()));
        // line 2
        echo "
<div class=\"ui two column grid\">
    <div class=\"column\">
        ";
        // line 5
        if (call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), array(($context["order"] ?? $this->getContext($context, "order"))))) {
            // line 6
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_shipping");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_shipping_method"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 8
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_address"), "html", null, true);
            echo "</a>
        ";
        }
        // line 10
        echo "    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 12
        if ( !($context["enabled"] ?? $this->getContext($context, "enabled"))) {
            echo " disabled";
        }
        echo " button\">
            <i class=\"arrow right icon\"></i>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
        
        $__internal_708fcd47ff4255b23d2f437036ecd372c75ce675724ab1a08ffe3832a367dd0c->leave($__internal_708fcd47ff4255b23d2f437036ecd372c75ce675724ab1a08ffe3832a367dd0c_prof);

        
        $__internal_a266472d18a1c439807bf522021a62e13468ac7b8b63c38e329e9f3e77edb3d8->leave($__internal_a266472d18a1c439807bf522021a62e13468ac7b8b63c38e329e9f3e77edb3d8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 12,  50 => 10,  42 => 8,  34 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set enabled = order.payments|length %}

<div class=\"ui two column grid\">
    <div class=\"column\">
        {% if sylius_is_shipping_required(order) %}
            <a href=\"{{ path('sylius_shop_checkout_select_shipping') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_shipping_method'|trans }}</a>
        {% else %}
            <a href=\"{{ path('sylius_shop_checkout_address') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_address'|trans }}</a>
        {% endif %}
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled{% if not enabled %} disabled{% endif %} button\">
            <i class=\"arrow right icon\"></i>
            {{ 'sylius.ui.next'|trans }}
        </button>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_navigation.html.twig");
    }
}
