<?php

/* SyliusShopBundle:Checkout/Address:_form.html.twig */
class __TwigTemplate_0a225f70473a93359fb99013615cd37c20964b860ad7dbd67dc2ac8aaa28eaa3 extends Twig_Template
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
        $__internal_f57065106c7a526d3e5450e3686f3f720234c3bbf066c5325919c666e3bfb2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57065106c7a526d3e5450e3686f3f720234c3bbf066c5325919c666e3bfb2e8->enter($__internal_f57065106c7a526d3e5450e3686f3f720234c3bbf066c5325919c666e3bfb2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_form.html.twig"));

        $__internal_a78206db89f70dfbea21e834248b3b6a3d62c08ffb8a7d0ddd3ff4e26dc3aa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78206db89f70dfbea21e834248b3b6a3d62c08ffb8a7d0ddd3ff4e26dc3aa6f->enter($__internal_a78206db89f70dfbea21e834248b3b6a3d62c08ffb8a7d0ddd3ff4e26dc3aa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_form.html.twig"));

        // line 1
        echo "<div id=\"sylius-shipping-address\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 2)->display($context);
        // line 3
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h3>
    ";
        // line 4
        if ($this->getAttribute(($context["form"] ?? null), "customer", array(), "any", true, true)) {
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Common/Form/_login.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 5)->display(array_merge($context, array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()))));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 7)->display(array_merge($context, array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippingAddress", array()), "order" => ($context["order"] ?? $this->getContext($context, "order")))));
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "differentBillingAddress", array()), 'row', array("attr" => array("data-toggles" => "sylius-billing-address")));
        echo "

    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.shipping_address_form", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "
</div>

<div id=\"sylius-billing-address\">
    <div class=\"ui hidden divider\"></div>
    ";
        // line 15
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 15)->display($context);
        // line 16
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h3>
    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 17)->display(array_merge($context, array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "billingAddress", array()), "order" => ($context["order"] ?? $this->getContext($context, "order")))));
        // line 18
        echo "
    ";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.billing_address_form", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "
</div>
";
        
        $__internal_f57065106c7a526d3e5450e3686f3f720234c3bbf066c5325919c666e3bfb2e8->leave($__internal_f57065106c7a526d3e5450e3686f3f720234c3bbf066c5325919c666e3bfb2e8_prof);

        
        $__internal_a78206db89f70dfbea21e834248b3b6a3d62c08ffb8a7d0ddd3ff4e26dc3aa6f->leave($__internal_a78206db89f70dfbea21e834248b3b6a3d62c08ffb8a7d0ddd3ff4e26dc3aa6f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Address:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  67 => 17,  62 => 16,  60 => 15,  52 => 10,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sylius-shipping-address\">
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h3>
    {% if form.customer is defined %}
        {% include '@SyliusShop/Common/Form/_login.html.twig' with {'form': form.customer} %}
    {% endif %}
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.shippingAddress, 'order': order} %}
    {{ form_row(form.differentBillingAddress, {'attr': {'data-toggles': 'sylius-billing-address'}}) }}

    {{ sonata_block_render_event('sylius.shop.checkout.address.shipping_address_form', {'order': order}) }}
</div>

<div id=\"sylius-billing-address\">
    <div class=\"ui hidden divider\"></div>
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h3>
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.billingAddress, 'order': order} %}

    {{ sonata_block_render_event('sylius.shop.checkout.address.billing_address_form', {'order': order}) }}
</div>
", "SyliusShopBundle:Checkout/Address:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Address/_form.html.twig");
    }
}
