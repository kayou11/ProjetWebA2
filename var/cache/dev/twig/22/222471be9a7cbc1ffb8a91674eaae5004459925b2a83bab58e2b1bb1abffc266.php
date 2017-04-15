<?php

/* SyliusShopBundle:Order:thankYou.html.twig */
class __TwigTemplate_d72f8ec73424a92a71bb8f66a526f051498472734193b781ec1d99374a577c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Order:thankYou.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a31518612c8741b150f06505636002c00a64a6e4fd4a7b73ed0e80cff8520698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31518612c8741b150f06505636002c00a64a6e4fd4a7b73ed0e80cff8520698->enter($__internal_a31518612c8741b150f06505636002c00a64a6e4fd4a7b73ed0e80cff8520698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:thankYou.html.twig"));

        $__internal_7381acedf3b1e4cd7ac9ff5c5eeb86687bccc5006e2f82c1eebae0a26346843c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7381acedf3b1e4cd7ac9ff5c5eeb86687bccc5006e2f82c1eebae0a26346843c->enter($__internal_7381acedf3b1e4cd7ac9ff5c5eeb86687bccc5006e2f82c1eebae0a26346843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:thankYou.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31518612c8741b150f06505636002c00a64a6e4fd4a7b73ed0e80cff8520698->leave($__internal_a31518612c8741b150f06505636002c00a64a6e4fd4a7b73ed0e80cff8520698_prof);

        
        $__internal_7381acedf3b1e4cd7ac9ff5c5eeb86687bccc5006e2f82c1eebae0a26346843c->leave($__internal_7381acedf3b1e4cd7ac9ff5c5eeb86687bccc5006e2f82c1eebae0a26346843c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3205edba05f1905e664cd5bc0edfcb38446ed48ea962da55a24d6fda5773af85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3205edba05f1905e664cd5bc0edfcb38446ed48ea962da55a24d6fda5773af85->enter($__internal_3205edba05f1905e664cd5bc0edfcb38446ed48ea962da55a24d6fda5773af85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5d6b06562451033ccc81e22e539b9916647e423a641b6522a86eca1830c6d054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6b06562451033ccc81e22e539b9916647e423a641b6522a86eca1830c6d054->enter($__internal_5d6b06562451033ccc81e22e539b9916647e423a641b6522a86eca1830c6d054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                ";
        // line 8
        $context["lastPayment"] = $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "payments", array()), "last", array(), "method");
        // line 9
        echo "                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.thank_you"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.placed_an_order"), "html", null, true);
        echo "</div>
                </div>
            </h1>

            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.order.thank_you.after_message", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

            ";
        // line 18
        if ((($context["lastPayment"] ?? $this->getContext($context, "lastPayment")) != false)) {
            // line 19
            echo "                ";
            if ( !(null === $this->getAttribute($this->getAttribute(($context["lastPayment"] ?? $this->getContext($context, "lastPayment")), "method", array()), "instructions", array()))) {
                // line 20
                echo "                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lastPayment"] ?? $this->getContext($context, "lastPayment")), "method", array()), "instructions", array()), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 24
            echo "                <div class=\"ui hidden divider\"></div>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tokenValue", array()))), "html", null, true);
            echo "\" id=\"sylius-show-order\" class=\"ui large blue button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_your_order_or_change_payment_method"), "html", null, true);
            echo "</a>
            ";
        }
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_5d6b06562451033ccc81e22e539b9916647e423a641b6522a86eca1830c6d054->leave($__internal_5d6b06562451033ccc81e22e539b9916647e423a641b6522a86eca1830c6d054_prof);

        
        $__internal_3205edba05f1905e664cd5bc0edfcb38446ed48ea962da55a24d6fda5773af85->leave($__internal_3205edba05f1905e664cd5bc0edfcb38446ed48ea962da55a24d6fda5773af85_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Order:thankYou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  94 => 25,  91 => 24,  85 => 21,  82 => 20,  79 => 19,  77 => 18,  72 => 16,  65 => 12,  61 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                {% set lastPayment = order.payments.last() %}
                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\">
                    {{ 'sylius.ui.thank_you'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.placed_an_order'|trans }}</div>
                </div>
            </h1>

            {{ sonata_block_render_event('sylius.shop.order.thank_you.after_message', {'order': order}) }}

            {% if lastPayment != false %}
                {%  if lastPayment.method.instructions is not null %}
                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\">
                        {{ lastPayment.method.instructions }}
                    </div>
                {% endif %}
                <div class=\"ui hidden divider\"></div>
                <a href=\"{{ path('sylius_shop_order_show', {'tokenValue': order.tokenValue}) }}\" id=\"sylius-show-order\" class=\"ui large blue button\">{{ 'sylius.ui.view_your_order_or_change_payment_method'|trans }}</a>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Order:thankYou.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/thankYou.html.twig");
    }
}
