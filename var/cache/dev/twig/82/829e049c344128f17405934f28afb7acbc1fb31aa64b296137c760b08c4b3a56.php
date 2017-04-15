<?php

/* @SyliusShop/Product/Show/_reviews.html.twig */
class __TwigTemplate_1bcfe0a8e779d86275dbfd6400fffdcd726964f27ddc678ac1c4f6a9a2d0f016 extends Twig_Template
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
        $__internal_f186272ce8b9fd2a81097d747ec0fb8e0fc634beec26157ea5ab3d409854cabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f186272ce8b9fd2a81097d747ec0fb8e0fc634beec26157ea5ab3d409854cabf->enter($__internal_f186272ce8b9fd2a81097d747ec0fb8e0fc634beec26157ea5ab3d409854cabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_reviews.html.twig"));

        $__internal_9addde4b138218e864da655e3d9930a899a5b1a076978e6c932eabeddba079f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9addde4b138218e864da655e3d9930a899a5b1a076978e6c932eabeddba079f3->enter($__internal_9addde4b138218e864da655e3d9930a899a5b1a076978e6c932eabeddba079f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_reviews.html.twig"));

        // line 1
        echo "<div class=\"ui text menu\">
    <div class=\"item\">
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_starRating.html.twig", "@SyliusShop/Product/Show/_reviews.html.twig", 3)->display($context);
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
        
        $__internal_f186272ce8b9fd2a81097d747ec0fb8e0fc634beec26157ea5ab3d409854cabf->leave($__internal_f186272ce8b9fd2a81097d747ec0fb8e0fc634beec26157ea5ab3d409854cabf_prof);

        
        $__internal_9addde4b138218e864da655e3d9930a899a5b1a076978e6c932eabeddba079f3->leave($__internal_9addde4b138218e864da655e3d9930a899a5b1a076978e6c932eabeddba079f3_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_reviews.html.twig";
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
", "@SyliusShop/Product/Show/_reviews.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_reviews.html.twig");
    }
}
