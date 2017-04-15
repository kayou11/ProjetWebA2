<?php

/* SyliusShopBundle:Product:_info.html.twig */
class __TwigTemplate_c21bd43d174aae75bc2f2e78d8dbf5a2c8ee8b021208674efc554e3e9a2e06eb extends Twig_Template
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
        $__internal_a31ad6ac6ef05cbd459012c232be293832eb033752d691a3529282d3220f583b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31ad6ac6ef05cbd459012c232be293832eb033752d691a3529282d3220f583b->enter($__internal_a31ad6ac6ef05cbd459012c232be293832eb033752d691a3529282d3220f583b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_info.html.twig"));

        $__internal_9cbb2cd154307dc417654012deb97101e8ca6f6abafd6e951bd058199bb443ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbb2cd154307dc417654012deb97101e8ca6f6abafd6e951bd058199bb443ab->enter($__internal_9cbb2cd154307dc417654012deb97101e8ca6f6abafd6e951bd058199bb443ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_info.html.twig"));

        // line 1
        $context["product"] = $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "product", array());
        // line 2
        echo "
<div class=\"ui header\">
    ";
        // line 4
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "SyliusShopBundle:Product:_info.html.twig", 4)->display(array_merge($context, array("product" => ($context["product"] ?? $this->getContext($context, "product")), "filter" => "sylius_shop_product_tiny_thumbnail")));
        // line 5
        echo "    <div class=\"content\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_show", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"sylius-product-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a>
        <span class=\"sub header sylius-product-variant-code\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "code", array()), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 12
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "hasOptions", array(), "method")) {
            // line 13
            echo "    <div class=\"ui horizontal divided list sylius-product-options\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 15
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["optionValue"], "name", array()), "html", null, true);
                echo "\">
                ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
";
        } elseif ( !(null === $this->getAttribute(        // line 20
($context["variant"] ?? $this->getContext($context, "variant")), "name", array()))) {
            // line 21
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "name", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_a31ad6ac6ef05cbd459012c232be293832eb033752d691a3529282d3220f583b->leave($__internal_a31ad6ac6ef05cbd459012c232be293832eb033752d691a3529282d3220f583b_prof);

        
        $__internal_9cbb2cd154307dc417654012deb97101e8ca6f6abafd6e951bd058199bb443ab->leave($__internal_9cbb2cd154307dc417654012deb97101e8ca6f6abafd6e951bd058199bb443ab_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 21,  76 => 20,  73 => 19,  64 => 16,  59 => 15,  55 => 14,  52 => 13,  50 => 12,  43 => 8,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = variant.product %}

<div class=\"ui header\">
    {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_shop_product_tiny_thumbnail'} %}
    <div class=\"content\">
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"sylius-product-name\">{{ product.name }}</a>
        <span class=\"sub header sylius-product-variant-code\">
            {{ variant.code }}
        </span>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\">
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif variant.name is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            {{ variant.name }}
        </div>
    </div>
{% endif %}
", "SyliusShopBundle:Product:_info.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_info.html.twig");
    }
}
