<?php

/* SyliusShopBundle:Checkout:selectPayment.html.twig */
class __TwigTemplate_0e21665ae4116d3c75f3af0dc24fdcf58cac3d203c370087511604bc65d3e64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1012ee5a02f455f63ed0d98262c2bd7e45cbcb00c93cfdba9f4a6feab2a12613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1012ee5a02f455f63ed0d98262c2bd7e45cbcb00c93cfdba9f4a6feab2a12613->enter($__internal_1012ee5a02f455f63ed0d98262c2bd7e45cbcb00c93cfdba9f4a6feab2a12613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectPayment.html.twig"));

        $__internal_498556ea6cf274029d62d5b94912f43bebee1eb66416630381f995e18e5d917a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498556ea6cf274029d62d5b94912f43bebee1eb66416630381f995e18e5d917a->enter($__internal_498556ea6cf274029d62d5b94912f43bebee1eb66416630381f995e18e5d917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectPayment.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1012ee5a02f455f63ed0d98262c2bd7e45cbcb00c93cfdba9f4a6feab2a12613->leave($__internal_1012ee5a02f455f63ed0d98262c2bd7e45cbcb00c93cfdba9f4a6feab2a12613_prof);

        
        $__internal_498556ea6cf274029d62d5b94912f43bebee1eb66416630381f995e18e5d917a->leave($__internal_498556ea6cf274029d62d5b94912f43bebee1eb66416630381f995e18e5d917a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bda2c569249f1ece91855dec6fe8d67707bf98e051fa972758b0250a98b5a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bda2c569249f1ece91855dec6fe8d67707bf98e051fa972758b0250a98b5a51->enter($__internal_8bda2c569249f1ece91855dec6fe8d67707bf98e051fa972758b0250a98b5a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bb01b596351a94b41d25be7125a1f118e60141813f2dd9adc253d4e048105baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb01b596351a94b41d25be7125a1f118e60141813f2dd9adc253d4e048105baa->enter($__internal_bb01b596351a94b41d25be7125a1f118e60141813f2dd9adc253d4e048105baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 6)->display(array_merge($context, array("active" => "select_payment", "orderTotal" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "total", array()))));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.after_steps", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-payment-methods\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_form", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_payment"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 18
        $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 18)->display($context);
        // line 19
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_navigation", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "
                    ";
        // line 22
        $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_navigation.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 22)->display($context);
        // line 23
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_summary", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

            ";
        // line 31
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 31)->display(array_merge($context, array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        // line 32
        echo "
            ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_support", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

            ";
        // line 35
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 35)->display($context);
        // line 36
        echo "
            ";
        // line 37
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.after_support", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "
        </div>
    </div>
";
        
        $__internal_bb01b596351a94b41d25be7125a1f118e60141813f2dd9adc253d4e048105baa->leave($__internal_bb01b596351a94b41d25be7125a1f118e60141813f2dd9adc253d4e048105baa_prof);

        
        $__internal_8bda2c569249f1ece91855dec6fe8d67707bf98e051fa972758b0250a98b5a51->leave($__internal_8bda2c569249f1ece91855dec6fe8d67707bf98e051fa972758b0250a98b5a51_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:selectPayment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  120 => 36,  118 => 35,  113 => 33,  110 => 32,  108 => 31,  103 => 29,  96 => 25,  92 => 24,  89 => 23,  87 => 22,  83 => 21,  79 => 19,  77 => 18,  71 => 15,  66 => 13,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'select_payment', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.select_payment.after_steps', {'order': order}) }}

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-payment-methods\">
                {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_select_payment'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>

                    {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_navigation', {'order': order}) }}
                    {% include '@SyliusShop/Checkout/SelectPayment/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.after_support', {'order': order}) }}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:selectPayment.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/selectPayment.html.twig");
    }
}
