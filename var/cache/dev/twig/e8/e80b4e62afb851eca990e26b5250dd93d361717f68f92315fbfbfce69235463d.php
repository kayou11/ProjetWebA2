<?php

/* SyliusShopBundle:Cart:_widget.html.twig */
class __TwigTemplate_e5b5839c157d2859d1c1cb84f3f5ec1ed0415fdc6fad8efa30a93bb9fc046230 extends Twig_Template
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
        $__internal_625bbd5ae73a8f88387001963372176f0cd9f81ef7266c2b98b00cd81e48001f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625bbd5ae73a8f88387001963372176f0cd9f81ef7266c2b98b00cd81e48001f->enter($__internal_625bbd5ae73a8f88387001963372176f0cd9f81ef7266c2b98b00cd81e48001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart:_widget.html.twig"));

        $__internal_035c8fe5c4aa3178a222c010f4b41e024d26468acc6258dd4ac35ff081a098a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035c8fe5c4aa3178a222c010f4b41e024d26468acc6258dd4ac35ff081a098a1->enter($__internal_035c8fe5c4aa3178a222c010f4b41e024d26468acc6258dd4ac35ff081a098a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart:_widget.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart:_widget.html.twig", 1);
        // line 2
        echo "
<div id=\"sylius-cart-button\" class=\"ui circular cart button\">
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_widget_content", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
        echo "

    <i class=\"cart icon\"></i>
    <span id=\"sylius-cart-total\">
        ";
        // line 8
        echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "itemsTotal", array()));
        echo "
    </span>
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("sylius.ui.item.choice", twig_length_filter($this->env, $this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "items", array())), array(), "messages");
        // line 11
        echo "
    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_widget_content", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
        echo "
</div>
<div class=\"ui large flowing cart hidden popup\">
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_popup_content", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
        echo "

    ";
        // line 17
        if ($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "empty", array())) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_cart_is_empty"), "html", null, true);
            echo ".
    ";
        } else {
            // line 20
            echo "    <div class=\"ui list\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "        <div class=\"item\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo " x <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "product", array()), "html", null, true);
                echo "</strong> ";
                echo $context["money"]->getconvertAndFormat($this->getAttribute($context["item"], "unitPrice", array()));
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        <div class=\"item\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
            echo "</strong>: ";
            echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "itemsTotal", array()));
            echo "</div>
    </div>
    <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_summary");
            echo "\" class=\"ui fluid basic text button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_and_edit_cart"), "html", null, true);
            echo "</a>
    <div class=\"ui divider\"></div>
    <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_start");
            echo "\" class=\"ui fluid primary button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.checkout"), "html", null, true);
            echo "</a>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_popup_content", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")))));
        echo "
</div>
";
        
        $__internal_625bbd5ae73a8f88387001963372176f0cd9f81ef7266c2b98b00cd81e48001f->leave($__internal_625bbd5ae73a8f88387001963372176f0cd9f81ef7266c2b98b00cd81e48001f_prof);

        
        $__internal_035c8fe5c4aa3178a222c010f4b41e024d26468acc6258dd4ac35ff081a098a1->leave($__internal_035c8fe5c4aa3178a222c010f4b41e024d26468acc6258dd4ac35ff081a098a1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart:_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  109 => 30,  102 => 28,  95 => 26,  87 => 24,  74 => 22,  70 => 21,  67 => 20,  61 => 18,  59 => 17,  54 => 15,  48 => 12,  45 => 11,  43 => 10,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
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

<div id=\"sylius-cart-button\" class=\"ui circular cart button\">
    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.before_widget_content', {'cart': cart}) }}

    <i class=\"cart icon\"></i>
    <span id=\"sylius-cart-total\">
        {{ money.convertAndFormat(cart.itemsTotal) }}
    </span>
    {% transchoice cart.items|length %}sylius.ui.item.choice{% endtranschoice %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_widget_content', {'cart': cart}) }}
</div>
<div class=\"ui large flowing cart hidden popup\">
    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.before_popup_content', {'cart': cart}) }}

    {% if cart.empty %}
        {{ 'sylius.ui.your_cart_is_empty'|trans }}.
    {% else %}
    <div class=\"ui list\">
        {% for item in cart.items %}
        <div class=\"item\">{{ item.quantity }} x <strong>{{ item.product }}</strong> {{ money.convertAndFormat(item.unitPrice) }}</div>
        {% endfor %}
        <div class=\"item\"><strong>{{ 'sylius.ui.subtotal'|trans }}</strong>: {{ money.convertAndFormat(cart.itemsTotal) }}</div>
    </div>
    <a href=\"{{ path('sylius_shop_cart_summary') }}\" class=\"ui fluid basic text button\">{{ 'sylius.ui.view_and_edit_cart'|trans }}</a>
    <div class=\"ui divider\"></div>
    <a href=\"{{ path('sylius_shop_checkout_start') }}\" class=\"ui fluid primary button\">{{ 'sylius.ui.checkout'|trans }}</a>
    {% endif %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_popup_content', {'cart': cart}) }}
</div>
", "SyliusShopBundle:Cart:_widget.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/_widget.html.twig");
    }
}
