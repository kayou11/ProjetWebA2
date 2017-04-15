<?php

/* SyliusShopBundle:Order:show.html.twig */
class __TwigTemplate_f43099c5a3c51c298cd6a550333d8907cb19307773460466717a0de594429c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Order:show.html.twig", 1);
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
        $__internal_e66078cd5047c4ff766d6f3bda4d56b5a8c13315c19df134a5566dc622903a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66078cd5047c4ff766d6f3bda4d56b5a8c13315c19df134a5566dc622903a69->enter($__internal_e66078cd5047c4ff766d6f3bda4d56b5a8c13315c19df134a5566dc622903a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:show.html.twig"));

        $__internal_1ae72d3e4dfaddcd37a6fce67a0d7ec2b7e2a0fde11bcfab753ebfc67c6ff832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae72d3e4dfaddcd37a6fce67a0d7ec2b7e2a0fde11bcfab753ebfc67c6ff832->enter($__internal_1ae72d3e4dfaddcd37a6fce67a0d7ec2b7e2a0fde11bcfab753ebfc67c6ff832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:show.html.twig"));

        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Order:show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66078cd5047c4ff766d6f3bda4d56b5a8c13315c19df134a5566dc622903a69->leave($__internal_e66078cd5047c4ff766d6f3bda4d56b5a8c13315c19df134a5566dc622903a69_prof);

        
        $__internal_1ae72d3e4dfaddcd37a6fce67a0d7ec2b7e2a0fde11bcfab753ebfc67c6ff832->leave($__internal_1ae72d3e4dfaddcd37a6fce67a0d7ec2b7e2a0fde11bcfab753ebfc67c6ff832_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9eae0ae715e7fc50310b46381966936a8a29514fc1ea899cb95baf027bfc4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9eae0ae715e7fc50310b46381966936a8a29514fc1ea899cb95baf027bfc4d4->enter($__internal_a9eae0ae715e7fc50310b46381966936a8a29514fc1ea899cb95baf027bfc4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ec7e07b53090668db912e65630d53f473541099b817c2813c2cf767d56712c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7e07b53090668db912e65630d53f473541099b817c2813c2cf767d56712c22->enter($__internal_ec7e07b53090668db912e65630d53f473541099b817c2813c2cf767d56712c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui segment\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Order/_summary.html.twig", "SyliusShopBundle:Order:show.html.twig", 7)->display($context);
        // line 8
        echo "
        ";
        // line 9
        if (twig_in_filter($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentState", array()), array(0 => "awaiting_payment"))) {
            // line 10
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tokenValue", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
            echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
            // line 13
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "SyliusShopBundle:Order:show.html.twig", 13)->display($context);
            // line 14
            echo "            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\">
                <i class=\"check icon\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.pay"), "html", null, true);
            echo "
            </button>

            ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
            ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
            echo "
        ";
        } else {
            // line 22
            echo "            ";
            echo $context["messages"]->getinfo("sylius.ui.you_can_no_longer_change_payment_method_of_this_order");
            echo "
        ";
        }
        // line 24
        echo "    </div>
";
        
        $__internal_ec7e07b53090668db912e65630d53f473541099b817c2813c2cf767d56712c22->leave($__internal_ec7e07b53090668db912e65630d53f473541099b817c2813c2cf767d56712c22_prof);

        
        $__internal_a9eae0ae715e7fc50310b46381966936a8a29514fc1ea899cb95baf027bfc4d4->leave($__internal_a9eae0ae715e7fc50310b46381966936a8a29514fc1ea899cb95baf027bfc4d4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  90 => 22,  85 => 20,  81 => 19,  75 => 16,  71 => 14,  69 => 13,  62 => 10,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% block content %}
    <div class=\"ui segment\">
        {% include '@SyliusShop/Order/_summary.html.twig' %}

        {% if order.paymentState in ['awaiting_payment'] %}
            {{ form_start(form, {'action': path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\">
                <i class=\"check icon\"></i> {{ 'sylius.ui.pay'|trans }}
            </button>

            {{ form_row(form._token) }}
            {{ form_end(form, {'render_rest': false}) }}
        {% else %}
            {{ messages.info('sylius.ui.you_can_no_longer_change_payment_method_of_this_order') }}
        {% endif %}
    </div>
{% endblock %}
", "SyliusShopBundle:Order:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/show.html.twig");
    }
}
