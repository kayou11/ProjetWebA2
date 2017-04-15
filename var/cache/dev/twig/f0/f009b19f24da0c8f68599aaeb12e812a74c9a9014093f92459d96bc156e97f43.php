<?php

/* SyliusShopBundle:Product/Show:_reviews.html.twig */
class __TwigTemplate_3ebb0a8d24d38d15037b4514095dfe42306e415f3021ed53a80e9a5c48899596 extends Twig_Template
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
        $__internal_2ae36dfe6802b71d54c54d6a0f8768d01237a86ae556de4842c46d2533482d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae36dfe6802b71d54c54d6a0f8768d01237a86ae556de4842c46d2533482d9c->enter($__internal_2ae36dfe6802b71d54c54d6a0f8768d01237a86ae556de4842c46d2533482d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_reviews.html.twig"));

        $__internal_d92882ff18d95f405494abce801bef2629f8d9311bbccda23eb9b1dcb31bb57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92882ff18d95f405494abce801bef2629f8d9311bbccda23eb9b1dcb31bb57b->enter($__internal_d92882ff18d95f405494abce801bef2629f8d9311bbccda23eb9b1dcb31bb57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_reviews.html.twig"));

        // line 1
        echo "<div class=\"ui text menu\">
    <div class=\"item\">
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_starRating.html.twig", "SyliusShopBundle:Product/Show:_reviews.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_index", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "acceptedReviews", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reviews"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_2ae36dfe6802b71d54c54d6a0f8768d01237a86ae556de4842c46d2533482d9c->leave($__internal_2ae36dfe6802b71d54c54d6a0f8768d01237a86ae556de4842c46d2533482d9c_prof);

        
        $__internal_d92882ff18d95f405494abce801bef2629f8d9311bbccda23eb9b1dcb31bb57b->leave($__internal_d92882ff18d95f405494abce801bef2629f8d9311bbccda23eb9b1dcb31bb57b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui text menu\">
    <div class=\"item\">
        {% include '@SyliusShop/Product/_starRating.html.twig' %}
    </div>
    <a href=\"{{ path('sylius_shop_product_review_index', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"item\">{{ product.acceptedReviews|length }} {{ 'sylius.ui.reviews'|trans }}</a>
    <a href=\"{{ path('sylius_shop_product_review_create', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"item\">{{ 'sylius.ui.add_your_review'|trans }}</a>
</div>
", "SyliusShopBundle:Product/Show:_reviews.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_reviews.html.twig");
    }
}
