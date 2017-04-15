<?php

/* @SyliusShop/Product/Show/_addToCart.html.twig */
class __TwigTemplate_6e44e056de32018b0d77108068364d78662afde2f455c7767ea393b511b3aecc extends Twig_Template
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
        $__internal_e75549e6a6b19e637c13713b60dced92286a3190755035a87f625f6d1f83369f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75549e6a6b19e637c13713b60dced92286a3190755035a87f625f6d1f83369f->enter($__internal_e75549e6a6b19e637c13713b60dced92286a3190755035a87f625f6d1f83369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        $__internal_7140e72dad27a72aba045a7a783bed3e99906fee79249b34730777d00fc6f646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7140e72dad27a72aba045a7a783bed3e99906fee79249b34730777d00fc6f646->enter($__internal_7140e72dad27a72aba045a7a783bed3e99906fee79249b34730777d00fc6f646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        // line 1
        $context["product"] = $this->getAttribute($this->getAttribute(($context["order_item"] ?? $this->getContext($context, "order_item")), "variant", array()), "product", array());
        // line 2
        echo "
";
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 4
        echo "
<div class=\"ui segment\" id=\"sylius-product-selecting-variant\">
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_add_to_cart", array("product" => ($context["product"] ?? $this->getContext($context, "product")), "order_item" => ($context["order_item"] ?? $this->getContext($context, "order_item")))));
        echo "

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_cart_add_item", array("productId" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "attr" => array("id" => "sylius-product-adding-to-cart", "class" => "ui loadable form", "novalidate" => "novalidate", "data-redirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRedirectRoute", array(0 => "summary"), "method")))));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\"></div>
    ";
        // line 11
        if ( !$this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array())) {
            // line 12
            echo "        ";
            if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variantSelectionMethodChoice", array())) {
                // line 13
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_variants.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 13)->display($context);
                // line 14
                echo "        ";
            } else {
                // line 15
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_options.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cartItem", array()), "quantity", array()), 'row');
        echo "

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.add_to_cart_form", array("product" => ($context["product"] ?? $this->getContext($context, "product")), "order_item" => ($context["order_item"] ?? $this->getContext($context, "order_item")))));
        echo "

    <button type=\"submit\" class=\"ui huge primary icon labeled button\"><i class=\"cart icon\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_to_cart"), "html", null, true);
        echo "</button>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_e75549e6a6b19e637c13713b60dced92286a3190755035a87f625f6d1f83369f->leave($__internal_e75549e6a6b19e637c13713b60dced92286a3190755035a87f625f6d1f83369f_prof);

        
        $__internal_7140e72dad27a72aba045a7a783bed3e99906fee79249b34730777d00fc6f646->leave($__internal_7140e72dad27a72aba045a7a783bed3e99906fee79249b34730777d00fc6f646_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_addToCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  85 => 23,  81 => 22,  76 => 20,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  50 => 11,  45 => 9,  41 => 8,  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = order_item.variant.product %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

<div class=\"ui segment\" id=\"sylius-product-selecting-variant\">
    {{ sonata_block_render_event('sylius.shop.product.show.before_add_to_cart', {'product': product, 'order_item': order_item}) }}

    {{ form_start(form, {'action': path('sylius_shop_ajax_cart_add_item', {'productId': product.id}), 'attr': {'id': 'sylius-product-adding-to-cart', 'class': 'ui loadable form', 'novalidate': 'novalidate', 'data-redirect': path(configuration.getRedirectRoute('summary'))}}) }}
    {{ form_errors(form) }}
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\"></div>
    {% if not product.simple %}
        {% if product.variantSelectionMethodChoice %}
            {% include '@SyliusShop/Product/Show/_variants.html.twig' %}
        {% else %}
            {% include '@SyliusShop/Product/Show/_options.html.twig' %}
        {% endif %}
    {% endif %}
    {{ form_row(form.cartItem.quantity) }}

    {{ sonata_block_render_event('sylius.shop.product.show.add_to_cart_form', {'product': product, 'order_item': order_item}) }}

    <button type=\"submit\" class=\"ui huge primary icon labeled button\"><i class=\"cart icon\"></i> {{ 'sylius.ui.add_to_cart'|trans }}</button>
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "@SyliusShop/Product/Show/_addToCart.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_addToCart.html.twig");
    }
}
