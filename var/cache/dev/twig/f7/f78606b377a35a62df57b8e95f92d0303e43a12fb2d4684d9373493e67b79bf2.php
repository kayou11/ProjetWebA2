<?php

/* @SyliusShop/Cart/_widget.html.twig */
class __TwigTemplate_54a504ad711a65cea4b1e06e14095bb1065afa502f24b09ee7c02423b4529a44 extends Twig_Template
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
        $__internal_86c2dbd205d27b8bc9dd4ed16fd829df02adc1f960112472cc74d47891c0b0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c2dbd205d27b8bc9dd4ed16fd829df02adc1f960112472cc74d47891c0b0fa->enter($__internal_86c2dbd205d27b8bc9dd4ed16fd829df02adc1f960112472cc74d47891c0b0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        $__internal_c6af1e7feb731821ec6ea800e24f7523bbeb11f1ae7dbb5f32230d41005efb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6af1e7feb731821ec6ea800e24f7523bbeb11f1ae7dbb5f32230d41005efb46->enter($__internal_c6af1e7feb731821ec6ea800e24f7523bbeb11f1ae7dbb5f32230d41005efb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/_widget.html.twig", 1);
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
        
        $__internal_86c2dbd205d27b8bc9dd4ed16fd829df02adc1f960112472cc74d47891c0b0fa->leave($__internal_86c2dbd205d27b8bc9dd4ed16fd829df02adc1f960112472cc74d47891c0b0fa_prof);

        
        $__internal_c6af1e7feb731821ec6ea800e24f7523bbeb11f1ae7dbb5f32230d41005efb46->leave($__internal_c6af1e7feb731821ec6ea800e24f7523bbeb11f1ae7dbb5f32230d41005efb46_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/_widget.html.twig";
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
", "@SyliusShop/Cart/_widget.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/_widget.html.twig");
    }
}
