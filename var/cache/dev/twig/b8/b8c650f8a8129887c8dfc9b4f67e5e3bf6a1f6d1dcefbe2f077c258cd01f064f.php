<?php

/* @SyliusShop/Product/show.html.twig */
class __TwigTemplate_fe1bfa1defa411a976e7907655e5293a398a22cd9a9b0e8bfaccad185e6f28a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Product/show.html.twig", 1);
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
        $__internal_62b1f27b1b9fafde253512791f72f6fdee59d8e1889682b7b71abcad29ec7029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b1f27b1b9fafde253512791f72f6fdee59d8e1889682b7b71abcad29ec7029->enter($__internal_62b1f27b1b9fafde253512791f72f6fdee59d8e1889682b7b71abcad29ec7029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/show.html.twig"));

        $__internal_afbbe995dc6347a165d6b574ed142c3feae109dff3e9104a912b7a96605d376e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbbe995dc6347a165d6b574ed142c3feae109dff3e9104a912b7a96605d376e->enter($__internal_afbbe995dc6347a165d6b574ed142c3feae109dff3e9104a912b7a96605d376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b1f27b1b9fafde253512791f72f6fdee59d8e1889682b7b71abcad29ec7029->leave($__internal_62b1f27b1b9fafde253512791f72f6fdee59d8e1889682b7b71abcad29ec7029_prof);

        
        $__internal_afbbe995dc6347a165d6b574ed142c3feae109dff3e9104a912b7a96605d376e->leave($__internal_afbbe995dc6347a165d6b574ed142c3feae109dff3e9104a912b7a96605d376e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2ce0e3d8238c47fa47ca83ab8804766fb578be8d951d40a0e1661af4700ad8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ce0e3d8238c47fa47ca83ab8804766fb578be8d951d40a0e1661af4700ad8f->enter($__internal_f2ce0e3d8238c47fa47ca83ab8804766fb578be8d951d40a0e1661af4700ad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87f1608920ffdd75821fc8dc42f99b783ae4d130a01256a0d1b84a9b1204f9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f1608920ffdd75821fc8dc42f99b783ae4d130a01256a0d1b84a9b1204f9e7->enter($__internal_87f1608920ffdd75821fc8dc42f99b783ae4d130a01256a0d1b84a9b1204f9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Show/_breadcrumb.html.twig", "@SyliusShop/Product/show.html.twig", 4)->display($context);
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
        $this->loadTemplate("@SyliusShop/Product/Show/_images.html.twig", "@SyliusShop/Product/show.html.twig", 11)->display($context);
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
        $this->loadTemplate("@SyliusShop/Product/Show/_header.html.twig", "@SyliusShop/Product/show.html.twig", 16)->display($context);
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_product_header", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

        ";
        // line 20
        $this->loadTemplate("@SyliusShop/Product/Show/_reviews.html.twig", "@SyliusShop/Product/show.html.twig", 20)->display($context);
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
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "@SyliusShop/Product/show.html.twig", 27)->display($context);
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
            $this->loadTemplate("@SyliusShop/Product/Show/_variantsPricing.html.twig", "@SyliusShop/Product/show.html.twig", 44)->display(array_merge($context, array("pricing" => call_user_func_array($this->env->getFunction('sylius_product_variant_prices')->getCallable(), array(($context["product"] ?? $this->getContext($context, "product")), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array()))))));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        $this->loadTemplate("@SyliusShop/Product/Show/_inventory.html.twig", "@SyliusShop/Product/show.html.twig", 46)->display($context);
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
        $this->loadTemplate("@SyliusShop/Product/Show/_tabs.html.twig", "@SyliusShop/Product/show.html.twig", 55)->display($context);
        // line 56
        echo "
";
        // line 57
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_associations", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

";
        // line 59
        $this->loadTemplate("@SyliusShop/Product/Show/_associations.html.twig", "@SyliusShop/Product/show.html.twig", 59)->display($context);
        
        $__internal_87f1608920ffdd75821fc8dc42f99b783ae4d130a01256a0d1b84a9b1204f9e7->leave($__internal_87f1608920ffdd75821fc8dc42f99b783ae4d130a01256a0d1b84a9b1204f9e7_prof);

        
        $__internal_f2ce0e3d8238c47fa47ca83ab8804766fb578be8d951d40a0e1661af4700ad8f->leave($__internal_f2ce0e3d8238c47fa47ca83ab8804766fb578be8d951d40a0e1661af4700ad8f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/show.html.twig";
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
", "@SyliusShop/Product/show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/show.html.twig");
    }
}
