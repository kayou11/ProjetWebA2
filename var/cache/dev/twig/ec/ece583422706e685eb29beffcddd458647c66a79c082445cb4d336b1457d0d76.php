<?php

/* @SyliusShop/Product/_mainImage.html.twig */
class __TwigTemplate_24abebe5ad0c2478a86d5e512be818ae98f28c62389bea7d1e815d157da50fd7 extends Twig_Template
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
        $__internal_c10a3908b03f5d4be757f35f957e319dd834de13244830cb85b6dbca33ade6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10a3908b03f5d4be757f35f957e319dd834de13244830cb85b6dbca33ade6c7->enter($__internal_c10a3908b03f5d4be757f35f957e319dd834de13244830cb85b6dbca33ade6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

        $__internal_b530b93e11ba9d529a751c1576c5fe9b344a29bbe2096f70e057e1beea3c27b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b530b93e11ba9d529a751c1576c5fe9b344a29bbe2096f70e057e1beea3c27b6->enter($__internal_b530b93e11ba9d529a751c1576c5fe9b344a29bbe2096f70e057e1beea3c27b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

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
        
        $__internal_c10a3908b03f5d4be757f35f957e319dd834de13244830cb85b6dbca33ade6c7->leave($__internal_c10a3908b03f5d4be757f35f957e319dd834de13244830cb85b6dbca33ade6c7_prof);

        
        $__internal_b530b93e11ba9d529a751c1576c5fe9b344a29bbe2096f70e057e1beea3c27b6->leave($__internal_b530b93e11ba9d529a751c1576c5fe9b344a29bbe2096f70e057e1beea3c27b6_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_mainImage.html.twig";
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
", "@SyliusShop/Product/_mainImage.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_mainImage.html.twig");
    }
}
