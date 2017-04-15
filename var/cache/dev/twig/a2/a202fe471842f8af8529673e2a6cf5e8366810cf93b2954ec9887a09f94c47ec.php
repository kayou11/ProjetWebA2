<?php

/* SyliusShopBundle:Product:_box.html.twig */
class __TwigTemplate_d4eb15b05cad374a6581269f9eb7a6fcc045a6d13cfd9effdc68271ac1be2f9b extends Twig_Template
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
        $__internal_130aabf197c3de583917f33c922887eb02c551ef2742f6b90840884853296097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130aabf197c3de583917f33c922887eb02c551ef2742f6b90840884853296097->enter($__internal_130aabf197c3de583917f33c922887eb02c551ef2742f6b90840884853296097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_box.html.twig"));

        $__internal_19f73f4274b0566273b19e7545f464fd322796294adbf3585e979d422a2358dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f73f4274b0566273b19e7545f464fd322796294adbf3585e979d422a2358dc->enter($__internal_19f73f4274b0566273b19e7545f464fd322796294adbf3585e979d422a2358dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_box.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product:_box.html.twig", 1);
        // line 2
        echo "
<div class=\"ui fluid card\">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_show", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
                </div>
            </div>
        </div>
        ";
        // line 12
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "SyliusShopBundle:Product:_box.html.twig", 12)->display(array_merge($context, array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        // line 13
        echo "    </a>
    <div class=\"content\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_show", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"header sylius-product-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a>
        ";
        // line 16
        if ( !$this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array()), "empty", array(), "method")) {
            // line 17
            echo "            <div class=\"sylius-product-price\">";
            echo $context["money"]->getcalculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array(($context["product"] ?? $this->getContext($context, "product")))));
            echo "</div>
        ";
        }
        // line 19
        echo "    </div>
</div>
";
        
        $__internal_130aabf197c3de583917f33c922887eb02c551ef2742f6b90840884853296097->leave($__internal_130aabf197c3de583917f33c922887eb02c551ef2742f6b90840884853296097_prof);

        
        $__internal_19f73f4274b0566273b19e7545f464fd322796294adbf3585e979d422a2358dc->leave($__internal_19f73f4274b0566273b19e7545f464fd322796294adbf3585e979d422a2358dc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  59 => 17,  57 => 16,  51 => 15,  47 => 13,  45 => 12,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
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

<div class=\"ui fluid card\">
    <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">{{ 'sylius.ui.view_more'|trans }}</div>
                </div>
            </div>
        </div>
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
    </a>
    <div class=\"content\">
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"header sylius-product-name\">{{ product.name }}</a>
        {% if not product.variants.empty() %}
            <div class=\"sylius-product-price\">{{ money.calculatePrice(product|sylius_resolve_variant) }}</div>
        {% endif %}
    </div>
</div>
", "SyliusShopBundle:Product:_box.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_box.html.twig");
    }
}
