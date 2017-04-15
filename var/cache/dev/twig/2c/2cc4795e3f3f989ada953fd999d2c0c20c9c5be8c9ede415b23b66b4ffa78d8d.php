<?php

/* SyliusShopBundle:Cart/Summary:_items.html.twig */
class __TwigTemplate_0e78e7c827915a9b902010c6a66ac08e1e8bf5c9dcec4872c8e05cb3fc949f5f extends Twig_Template
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
        $__internal_8cc807d2a186beaf778295993cc60db1839f2438f818c6778a496e7f3f4ff696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc807d2a186beaf778295993cc60db1839f2438f818c6778a496e7f3f4ff696->enter($__internal_8cc807d2a186beaf778295993cc60db1839f2438f818c6778a496e7f3f4ff696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_items.html.twig"));

        $__internal_10adaaf41ef5c940520ff53c761f13c918598b43e1c859592bf98dd89d10c6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10adaaf41ef5c940520ff53c761f13c918598b43e1c859592bf98dd89d10c6e1->enter($__internal_10adaaf41ef5c940520ff53c761f13c918598b43e1c859592bf98dd89d10c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_items.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_save"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>

        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.items", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")), "form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

        <table id=\"sylius-cart-items\" class=\"ui very basic celled table\">
            <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.unit_price"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.qty"), "html", null, true);
        echo "</th>
                <th></th>
                <th class=\"right aligned\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "items", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                    ";
            $this->loadTemplate("@SyliusShop/Cart/Summary/_item.html.twig", "SyliusShopBundle:Cart/Summary:_items.html.twig", 20)->display(array_merge($context, array("item" => $context["item"], "form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "items", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"))));
            // line 21
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </tbody>
        </table>
        ";
        // line 24
        if ($this->getAttribute(($context["form"] ?? null), "promotionCoupon", array(), "any", true, true)) {
            // line 25
            echo "            <div class=\"ui hidden divider\"></div>

            ";
            // line 27
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_coupon", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")), "form" => ($context["form"] ?? $this->getContext($context, "form")))));
            echo "

            ";
            // line 29
            $this->loadTemplate("@SyliusShop/Cart/Summary/_coupon.html.twig", "SyliusShopBundle:Cart/Summary:_items.html.twig", 29)->display(array_merge($context, array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promotionCoupon", array()))));
            // line 30
            echo "
            ";
            // line 31
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_coupon", array("cart" => ($context["cart"] ?? $this->getContext($context, "cart")), "form" => ($context["form"] ?? $this->getContext($context, "form")))));
            echo "
        ";
        }
        // line 33
        echo "        <div class=\"ui hidden divider\"></div>
        ";
        // line 34
        $this->loadTemplate("@SyliusShop/Cart/Summary/_update.html.twig", "SyliusShopBundle:Cart/Summary:_items.html.twig", 34)->display($context);
        // line 35
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_8cc807d2a186beaf778295993cc60db1839f2438f818c6778a496e7f3f4ff696->leave($__internal_8cc807d2a186beaf778295993cc60db1839f2438f818c6778a496e7f3f4ff696_prof);

        
        $__internal_10adaaf41ef5c940520ff53c761f13c918598b43e1c859592bf98dd89d10c6e1->leave($__internal_10adaaf41ef5c940520ff53c761f13c918598b43e1c859592bf98dd89d10c6e1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  130 => 35,  128 => 34,  125 => 33,  120 => 31,  117 => 30,  115 => 29,  110 => 27,  106 => 25,  104 => 24,  100 => 22,  86 => 21,  83 => 20,  66 => 19,  59 => 15,  54 => 13,  50 => 12,  46 => 11,  38 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path('sylius_shop_cart_save'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        {{ form_errors(form) }}
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>

        {{ sonata_block_render_event('sylius.shop.cart.summary.items', {'cart': cart, 'form': form}) }}

        <table id=\"sylius-cart-items\" class=\"ui very basic celled table\">
            <thead>
            <tr>
                <th>{{ 'sylius.ui.item'|trans }}</th>
                <th>{{ 'sylius.ui.unit_price'|trans }}</th>
                <th>{{ 'sylius.ui.qty'|trans }}</th>
                <th></th>
                <th class=\"right aligned\">{{ 'sylius.ui.total'|trans }}</th>
            </tr>
            </thead>
            <tbody>
                {% for item in cart.items %}
                    {% include '@SyliusShop/Cart/Summary/_item.html.twig' with {'item': item, 'form': form.items[loop.index0]} %}
                {% endfor %}
            </tbody>
        </table>
        {% if form.promotionCoupon is defined %}
            <div class=\"ui hidden divider\"></div>

            {{ sonata_block_render_event('sylius.shop.cart.summary.before_coupon', {'cart': cart, 'form': form}) }}

            {% include '@SyliusShop/Cart/Summary/_coupon.html.twig' with {'form': form.promotionCoupon} %}

            {{ sonata_block_render_event('sylius.shop.cart.summary.after_coupon', {'cart': cart, 'form': form}) }}
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        {% include '@SyliusShop/Cart/Summary/_update.html.twig' %}
        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "SyliusShopBundle:Cart/Summary:_items.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_items.html.twig");
    }
}
