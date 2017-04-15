<?php

/* SyliusShopBundle:Common/Order:_addresses.html.twig */
class __TwigTemplate_539b3c1bc6f51a85afffea65b5e7669166a86166fabfafa1e78e0814ec6d6453 extends Twig_Template
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
        $__internal_ad9ca13f99b5c21b46a6d4121f6c08521f07af931902a98a08529ede929e4f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9ca13f99b5c21b46a6d4121f6c08521f07af931902a98a08529ede929e4f3d->enter($__internal_ad9ca13f99b5c21b46a6d4121f6c08521f07af931902a98a08529ede929e4f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_addresses.html.twig"));

        $__internal_a731ca7a55a7d587bfb310411afba623bcbb42806235c58cfb0efee8b8c437f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a731ca7a55a7d587bfb310411afba623bcbb42806235c58cfb0efee8b8c437f7->enter($__internal_a731ca7a55a7d587bfb310411afba623bcbb42806235c58cfb0efee8b8c437f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_addresses.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui two column divided stackable grid\">
        <div class=\"column\" id=\"sylius-shipping-address\">
            <div class=\"ui small dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</div>
            ";
        // line 5
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Common/Order:_addresses.html.twig", 5)->display(array_merge($context, array("address" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shippingAddress", array()))));
        // line 6
        echo "        </div>
        <div class=\"column\" id=\"sylius-billing-address\">
            <div class=\"ui small dividing header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</div>
            ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Common/Order:_addresses.html.twig", 9)->display(array_merge($context, array("address" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "billingAddress", array()))));
        // line 10
        echo "        </div>
    </div>
</div>
";
        
        $__internal_ad9ca13f99b5c21b46a6d4121f6c08521f07af931902a98a08529ede929e4f3d->leave($__internal_ad9ca13f99b5c21b46a6d4121f6c08521f07af931902a98a08529ede929e4f3d_prof);

        
        $__internal_a731ca7a55a7d587bfb310411afba623bcbb42806235c58cfb0efee8b8c437f7->leave($__internal_a731ca7a55a7d587bfb310411afba623bcbb42806235c58cfb0efee8b8c437f7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  44 => 9,  40 => 8,  36 => 6,  34 => 5,  30 => 4,  25 => 1,);
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
    <div class=\"ui two column divided stackable grid\">
        <div class=\"column\" id=\"sylius-shipping-address\">
            <div class=\"ui small dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.shippingAddress} %}
        </div>
        <div class=\"column\" id=\"sylius-billing-address\">
            <div class=\"ui small dividing header\">{{ 'sylius.ui.billing_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.billingAddress} %}
        </div>
    </div>
</div>
", "SyliusShopBundle:Common/Order:_addresses.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_addresses.html.twig");
    }
}
