<?php

/* SyliusShopBundle:Product:show.html.twig */
class __TwigTemplate_07bcc80971c096cb1cec084c2324da6d77d49305125b08d5ee5496b663c11e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Product:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_431b44ad67a69bcd600c4ce87237cb6fa022da51f8d1cde5fbcaa6e2b7149f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431b44ad67a69bcd600c4ce87237cb6fa022da51f8d1cde5fbcaa6e2b7149f9a->enter($__internal_431b44ad67a69bcd600c4ce87237cb6fa022da51f8d1cde5fbcaa6e2b7149f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:show.html.twig"));

        $__internal_57b211f83c58e13570edca9e5d231d68e5ed54d046ab5769899d546bad272b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b211f83c58e13570edca9e5d231d68e5ed54d046ab5769899d546bad272b4c->enter($__internal_57b211f83c58e13570edca9e5d231d68e5ed54d046ab5769899d546bad272b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_431b44ad67a69bcd600c4ce87237cb6fa022da51f8d1cde5fbcaa6e2b7149f9a->leave($__internal_431b44ad67a69bcd600c4ce87237cb6fa022da51f8d1cde5fbcaa6e2b7149f9a_prof);

        
        $__internal_57b211f83c58e13570edca9e5d231d68e5ed54d046ab5769899d546bad272b4c->leave($__internal_57b211f83c58e13570edca9e5d231d68e5ed54d046ab5769899d546bad272b4c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_909d1bc9984b5ff65a04c4925c6a7dcccd630049500a37f0e3f5a22d1212bcf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909d1bc9984b5ff65a04c4925c6a7dcccd630049500a37f0e3f5a22d1212bcf2->enter($__internal_909d1bc9984b5ff65a04c4925c6a7dcccd630049500a37f0e3f5a22d1212bcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_877669113e77904d873b652745f2bafb6333fe43a0ab9bf2dbfc1b1eee7dfd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877669113e77904d873b652745f2bafb6333fe43a0ab9bf2dbfc1b1eee7dfd41->enter($__internal_877669113e77904d873b652745f2bafb6333fe43a0ab9bf2dbfc1b1eee7dfd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Show/_breadcrumb.html.twig", "SyliusShopBundle:Product:show.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_images", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

        ";
        // line 11
        $this->loadTemplate("@SyliusShop/Product/Show/_images.html.twig", "SyliusShopBundle:Product:show.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_images", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 16
        $this->loadTemplate("@SyliusShop/Product/Show/_header.html.twig", "SyliusShopBundle:Product:show.html.twig", 16)->display($context);
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_product_header", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

        ";
        // line 20
        $this->loadTemplate("@SyliusShop/Product/Show/_reviews.html.twig", "SyliusShopBundle:Product:show.html.twig", 20)->display($context);
        // line 21
        echo "
        ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_reviews", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">
                ";
        // line 26
        if ( !$this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array()), "empty", array(), "method")) {
            // line 27
            echo "                ";
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "SyliusShopBundle:Product:show.html.twig", 27)->display($context);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>
            <div class=\"twelve wide right aligned column\">
                <span class=\"ui sub header\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "code", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_price", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

        <div class=\"ui basic segment\">
            <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "shortDescription", array()), "html", null, true);
        echo "</p>
        </div>

        ";
        // line 41
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_description", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

        ";
        // line 43
        if ((($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "isConfigurable", array(), "method") && ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getVariantSelectionMethod", array(), "method") == "match")) &&  !$this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array()), "empty", array(), "method"))) {
            // line 44
            echo "            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_variantsPricing.html.twig", "SyliusShopBundle:Product:show.html.twig", 44)->display(array_merge($context, array("pricing" => call_user_func_array($this->env->getFunction('sylius_product_variant_prices')->getCallable(), array(($context["product"] ?? $this->getContext($context, "product")), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array()))))));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        $this->loadTemplate("@SyliusShop/Product/Show/_inventory.html.twig", "SyliusShopBundle:Product:show.html.twig", 46)->display($context);
        // line 47
        echo "        <div class=\"ui hidden divider\"></div>

        ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_add_to_cart", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "
    </div>
</div>

";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_tabs", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

";
        // line 55
        $this->loadTemplate("@SyliusShop/Product/Show/_tabs.html.twig", "SyliusShopBundle:Product:show.html.twig", 55)->display($context);
        // line 56
        echo "
";
        // line 57
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_associations", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

";
        // line 59
        $this->loadTemplate("@SyliusShop/Product/Show/_associations.html.twig", "SyliusShopBundle:Product:show.html.twig", 59)->display($context);
        
        $__internal_877669113e77904d873b652745f2bafb6333fe43a0ab9bf2dbfc1b1eee7dfd41->leave($__internal_877669113e77904d873b652745f2bafb6333fe43a0ab9bf2dbfc1b1eee7dfd41_prof);

        
        $__internal_909d1bc9984b5ff65a04c4925c6a7dcccd630049500a37f0e3f5a22d1212bcf2->leave($__internal_909d1bc9984b5ff65a04c4925c6a7dcccd630049500a37f0e3f5a22d1212bcf2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  163 => 57,  160 => 56,  158 => 55,  153 => 53,  146 => 49,  142 => 47,  139 => 46,  136 => 45,  133 => 44,  131 => 43,  126 => 41,  120 => 38,  114 => 35,  107 => 31,  103 => 29,  100 => 28,  97 => 27,  95 => 26,  88 => 22,  85 => 21,  83 => 20,  78 => 18,  75 => 17,  73 => 16,  67 => 13,  64 => 12,  62 => 11,  57 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
{% include '@SyliusShop/Product/Show/_breadcrumb.html.twig' %}
<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ sonata_block_render_event('sylius.shop.product.show.before_images', {'product': product}) }}

        {% include '@SyliusShop/Product/Show/_images.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.product.show.after_images', {'product': product}) }}
    </div>
    <div class=\"column\">
        {% include '@SyliusShop/Product/Show/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.product.show.after_product_header', {'product': product}) }}

        {% include '@SyliusShop/Product/Show/_reviews.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.product.show.after_reviews', {'product': product}) }}

        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">
                {% if not product.variants.empty() %}
                {% include '@SyliusShop/Product/Show/_price.html.twig' %}
                {% endif %}
            </div>
            <div class=\"twelve wide right aligned column\">
                <span class=\"ui sub header\">{{ product.code }}</span>
            </div>
        </div>

        {{ sonata_block_render_event('sylius.shop.product.show.after_price', {'product': product}) }}

        <div class=\"ui basic segment\">
            <p>{{ product.shortDescription }}</p>
        </div>

        {{ sonata_block_render_event('sylius.shop.product.show.after_description', {'product': product}) }}

        {% if product.isConfigurable() and product.getVariantSelectionMethod() == 'match' and not product.variants.empty() %}
            {% include '@SyliusShop/Product/Show/_variantsPricing.html.twig' with {'pricing': sylius_product_variant_prices(product, sylius.channel)} %}
        {% endif %}
        {% include '@SyliusShop/Product/Show/_inventory.html.twig' %}
        <div class=\"ui hidden divider\"></div>

        {{ sonata_block_render_event('sylius.shop.product.show.after_add_to_cart', {'product': product}) }}
    </div>
</div>

{{ sonata_block_render_event('sylius.shop.product.show.before_tabs', {'product': product}) }}

{% include '@SyliusShop/Product/Show/_tabs.html.twig' %}

{{ sonata_block_render_event('sylius.shop.product.show.before_associations', {'product': product}) }}

{% include '@SyliusShop/Product/Show/_associations.html.twig' %}
{% endblock %}
", "SyliusShopBundle:Product:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/show.html.twig");
    }
}
