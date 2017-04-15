<?php

/* SyliusShopBundle:Cart:summary.html.twig */
class __TwigTemplate_22719bb64259f641ec7cfd2db6b6899823d1ea0610022b914333593650678356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac373d0eca82c0839393bac520faef3197e14714e066907eb2b265d9aa38d611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac373d0eca82c0839393bac520faef3197e14714e066907eb2b265d9aa38d611->enter($__internal_ac373d0eca82c0839393bac520faef3197e14714e066907eb2b265d9aa38d611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart:summary.html.twig"));

        $__internal_390d7566964c4c993a1a6de1f6441bd3cf61d2dc9cdbb7a07d4fe9ea77d903cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390d7566964c4c993a1a6de1f6441bd3cf61d2dc9cdbb7a07d4fe9ea77d903cf->enter($__internal_390d7566964c4c993a1a6de1f6441bd3cf61d2dc9cdbb7a07d4fe9ea77d903cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart:summary.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 5
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 5);
        // line 6
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 6);
        // line 8
        $context["header"] = "sylius.ui.your_shopping_cart";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac373d0eca82c0839393bac520faef3197e14714e066907eb2b265d9aa38d611->leave($__internal_ac373d0eca82c0839393bac520faef3197e14714e066907eb2b265d9aa38d611_prof);

        
        $__internal_390d7566964c4c993a1a6de1f6441bd3cf61d2dc9cdbb7a07d4fe9ea77d903cf->leave($__internal_390d7566964c4c993a1a6de1f6441bd3cf61d2dc9cdbb7a07d4fe9ea77d903cf_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a9362355bcf15e3c1070dc64f718f407e018bd9ca386609ab0202c30c2fa8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9362355bcf15e3c1070dc64f718f407e018bd9ca386609ab0202c30c2fa8bd->enter($__internal_0a9362355bcf15e3c1070dc64f718f407e018bd9ca386609ab0202c30c2fa8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f47ff9513f825bc8420315cfa36fe9dd93d429dbcb5a610f13ee12208f0ebee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f47ff9513f825bc8420315cfa36fe9dd93d429dbcb5a610f13ee12208f0ebee->enter($__internal_9f47ff9513f825bc8420315cfa36fe9dd93d429dbcb5a610f13ee12208f0ebee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_9f47ff9513f825bc8420315cfa36fe9dd93d429dbcb5a610f13ee12208f0ebee->leave($__internal_9f47ff9513f825bc8420315cfa36fe9dd93d429dbcb5a610f13ee12208f0ebee_prof);

        
        $__internal_0a9362355bcf15e3c1070dc64f718f407e018bd9ca386609ab0202c30c2fa8bd->leave($__internal_0a9362355bcf15e3c1070dc64f718f407e018bd9ca386609ab0202c30c2fa8bd_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_9346f68fef6faef2687a7dff24a11b82d0e3d650a34bf4d325ba049ea56fc2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9346f68fef6faef2687a7dff24a11b82d0e3d650a34bf4d325ba049ea56fc2d2->enter($__internal_9346f68fef6faef2687a7dff24a11b82d0e3d650a34bf4d325ba049ea56fc2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c04d155d1c837b90108cdc3cd6e4b54d93f80f8f7d548a15b3f69a3190781987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04d155d1c837b90108cdc3cd6e4b54d93f80f8f7d548a15b3f69a3190781987->enter($__internal_c04d155d1c837b90108cdc3cd6e4b54d93f80f8f7d548a15b3f69a3190781987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        if ( !$this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "empty", array())) {
            // line 14
            echo "        ";
            $this->loadTemplate("@SyliusShop/Cart/Summary/_header.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 14)->display($context);
            // line 15
            echo "
        ";
            // line 16
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_content_header", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
            echo "

        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                ";
            // line 20
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_items", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
            echo "

                ";
            // line 22
            $this->loadTemplate("@SyliusShop/Cart/Summary/_items.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 22)->display($context);
            // line 23
            echo "
                ";
            // line 24
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_items", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
            echo "
            </div>
            <div class=\"five wide column\">
                ";
            // line 27
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_totals", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
            echo "

                ";
            // line 29
            $this->loadTemplate("@SyliusShop/Cart/Summary/_totals.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 29)->display($context);
            // line 30
            echo "
                ";
            // line 31
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_totals", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
            echo "

                ";
            // line 33
            $this->loadTemplate("@SyliusShop/Cart/Summary/_checkout.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 33)->display($context);
            // line 34
            echo "            </div>
        </div>

        ";
            // line 37
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_suggestions", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
            echo "

        ";
            // line 39
            $this->loadTemplate("@SyliusShop/Cart/Summary/_suggestions.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 39)->display($context);
            // line 40
            echo "    ";
        } else {
            // line 41
            echo "        ";
            echo $context["messages"]->getinfo("sylius.ui.your_cart_is_empty");
            echo "
    ";
        }
        
        $__internal_c04d155d1c837b90108cdc3cd6e4b54d93f80f8f7d548a15b3f69a3190781987->leave($__internal_c04d155d1c837b90108cdc3cd6e4b54d93f80f8f7d548a15b3f69a3190781987_prof);

        
        $__internal_9346f68fef6faef2687a7dff24a11b82d0e3d650a34bf4d325ba049ea56fc2d2->leave($__internal_9346f68fef6faef2687a7dff24a11b82d0e3d650a34bf4d325ba049ea56fc2d2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  140 => 40,  138 => 39,  133 => 37,  128 => 34,  126 => 33,  121 => 31,  118 => 30,  116 => 29,  111 => 27,  105 => 24,  102 => 23,  100 => 22,  95 => 20,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  70 => 12,  50 => 10,  40 => 1,  38 => 8,  36 => 6,  34 => 5,  32 => 3,  11 => 1,);
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

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/headers.html.twig' as headers %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% set header = 'sylius.ui.your_shopping_cart' %}

{% block title %}{{ parent() }} | {{ header|trans }}{% endblock %}

{% block content %}
    {% if not cart.empty %}
        {% include '@SyliusShop/Cart/Summary/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.cart.summary.after_content_header', {'cart': cart}) }}

        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                {{ sonata_block_render_event('sylius.shop.cart.summary.before_items', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_items.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.cart.summary.after_items', {'cart': cart}) }}
            </div>
            <div class=\"five wide column\">
                {{ sonata_block_render_event('sylius.shop.cart.summary.before_totals', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_totals.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.cart.summary.after_totals', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_checkout.html.twig' %}
            </div>
        </div>

        {{ sonata_block_render_event('sylius.shop.cart.summary.before_suggestions', {'cart': cart}) }}

        {% include '@SyliusShop/Cart/Summary/_suggestions.html.twig' %}
    {% else %}
        {{ messages.info('sylius.ui.your_cart_is_empty') }}
    {% endif %}
{% endblock %}
", "SyliusShopBundle:Cart:summary.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/summary.html.twig");
    }
}
