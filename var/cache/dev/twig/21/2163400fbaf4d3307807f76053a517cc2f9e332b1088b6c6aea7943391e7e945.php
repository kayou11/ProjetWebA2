<?php

/* SyliusShopBundle:Product:_mainImage.html.twig */
class __TwigTemplate_0bc299524bea8399bab6879695c0d242060f3c2af08f7f24acf5b6e785fb02ce extends Twig_Template
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
        $__internal_6cc7429560b25198ad1a1b35004c0476a51e690f20ecc04325437a62612d3e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc7429560b25198ad1a1b35004c0476a51e690f20ecc04325437a62612d3e40->enter($__internal_6cc7429560b25198ad1a1b35004c0476a51e690f20ecc04325437a62612d3e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_mainImage.html.twig"));

        $__internal_51ac7436ee3a25cad97ab18290e60154315ae40fe209c302ca9fa3d08a1ec704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ac7436ee3a25cad97ab18290e60154315ae40fe209c302ca9fa3d08a1ec704->enter($__internal_51ac7436ee3a25cad97ab18290e60154315ae40fe209c302ca9fa3d08a1ec704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_mainImage.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagesByType", array(0 => "thumbnail"), "method"))) {
            // line 2
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagesByType", array(0 => "thumbnail"), "method"), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? $this->getContext($context, "filter")), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } elseif ($this->getAttribute($this->getAttribute(        // line 3
($context["product"] ?? $this->getContext($context, "product")), "images", array()), "first", array())) {
            // line 4
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "images", array()), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? $this->getContext($context, "filter")), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } else {
            // line 6
            echo "    ";
            $context["path"] = "http://placehold.it/200x200";
        }
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
        echo "\" alt=\"\" class=\"ui bordered image\" />
";
        
        $__internal_6cc7429560b25198ad1a1b35004c0476a51e690f20ecc04325437a62612d3e40->leave($__internal_6cc7429560b25198ad1a1b35004c0476a51e690f20ecc04325437a62612d3e40_prof);

        
        $__internal_51ac7436ee3a25cad97ab18290e60154315ae40fe209c302ca9fa3d08a1ec704->leave($__internal_51ac7436ee3a25cad97ab18290e60154315ae40fe209c302ca9fa3d08a1ec704_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_mainImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.imagesByType('thumbnail') is not empty %}
    {% set path = product.imagesByType('thumbnail').first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% elseif product.images.first %}
    {% set path = product.images.first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% else %}
    {% set path = 'http://placehold.it/200x200' %}
{% endif %}

<img src=\"{{ path }}\" alt=\"\" class=\"ui bordered image\" />
", "SyliusShopBundle:Product:_mainImage.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_mainImage.html.twig");
    }
}
