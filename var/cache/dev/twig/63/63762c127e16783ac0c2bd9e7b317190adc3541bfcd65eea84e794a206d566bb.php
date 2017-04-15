<?php

/* @SyliusShop/Product/_box.html.twig */
class __TwigTemplate_ae55d0b973438c3a03cd87b351259303c67391d9fbb6b82f557dc72d71e199fa extends Twig_Template
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
        $__internal_fd3797b08f5bab05c458982d46e66dce9089331d1e76c026a7498fba98720ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3797b08f5bab05c458982d46e66dce9089331d1e76c026a7498fba98720ec1->enter($__internal_fd3797b08f5bab05c458982d46e66dce9089331d1e76c026a7498fba98720ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box.html.twig"));

        $__internal_a05e241cc8058af606273ee5b39739f25b07a5eb36f04e15b597b3d316dc9f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05e241cc8058af606273ee5b39739f25b07a5eb36f04e15b597b3d316dc9f09->enter($__internal_a05e241cc8058af606273ee5b39739f25b07a5eb36f04e15b597b3d316dc9f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/_box.html.twig", 1);
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
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_box.html.twig", 12)->display(array_merge($context, array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
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
        
        $__internal_fd3797b08f5bab05c458982d46e66dce9089331d1e76c026a7498fba98720ec1->leave($__internal_fd3797b08f5bab05c458982d46e66dce9089331d1e76c026a7498fba98720ec1_prof);

        
        $__internal_a05e241cc8058af606273ee5b39739f25b07a5eb36f04e15b597b3d316dc9f09->leave($__internal_a05e241cc8058af606273ee5b39739f25b07a5eb36f04e15b597b3d316dc9f09_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_box.html.twig";
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
", "@SyliusShop/Product/_box.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_box.html.twig");
    }
}
