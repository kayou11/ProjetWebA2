<?php

/* SyliusShopBundle:Product/Show/Tabs:_reviews.html.twig */
class __TwigTemplate_0c746001dd190ab9508224996e91b468616b92451aee488eea4ef359f8617caf extends Twig_Template
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
        $__internal_66a4d7eb309d4e15ef6904b5785bfd0361a41d582aa7af9aedbb23475e09bbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a4d7eb309d4e15ef6904b5785bfd0361a41d582aa7af9aedbb23475e09bbd5->enter($__internal_66a4d7eb309d4e15ef6904b5785bfd0361a41d582aa7af9aedbb23475e09bbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_reviews.html.twig"));

        $__internal_673771ebb06bba9cc288ad70a2a7cb193424dbace953c08d6c089510d44e8a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673771ebb06bba9cc288ad70a2a7cb193424dbace953c08d6c089510d44e8a98->enter($__internal_673771ebb06bba9cc288ad70a2a7cb193424dbace953c08d6c089510d44e8a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_reviews.html.twig"));

        // line 1
        echo "<div class=\"ui bottom attached tab segment\" data-tab=\"reviews\" id=\"sylius-product-reviews\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_reviews", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_review_latest", array("productId" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "template" => "@SyliusShop/ProductReview/_list.html.twig")));
        echo "

    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_index", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
    </a>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</div>
    </a>
</div>
";
        
        $__internal_66a4d7eb309d4e15ef6904b5785bfd0361a41d582aa7af9aedbb23475e09bbd5->leave($__internal_66a4d7eb309d4e15ef6904b5785bfd0361a41d582aa7af9aedbb23475e09bbd5_prof);

        
        $__internal_673771ebb06bba9cc288ad70a2a7cb193424dbace953c08d6c089510d44e8a98->leave($__internal_673771ebb06bba9cc288ad70a2a7cb193424dbace953c08d6c089510d44e8a98_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  42 => 7,  38 => 6,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui bottom attached tab segment\" data-tab=\"reviews\" id=\"sylius-product-reviews\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_reviews', {'product': product}) }}

    {{ render(url('sylius_shop_partial_product_review_latest', {'productId': product.id, 'template': '@SyliusShop/ProductReview/_list.html.twig'})) }}

    <a href=\"{{ path('sylius_shop_product_review_index', {'slug': product.slug, '_locale': product.translation.locale}) }}\">
        <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> {{ 'sylius.ui.view_more'|trans }}</div>
    </a>
    <a href=\"{{ path('sylius_shop_product_review_create', {'slug': product.slug, '_locale': product.translation.locale}) }}\">
        <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> {{ 'sylius.ui.add_your_review'|trans }}</div>
    </a>
</div>
", "SyliusShopBundle:Product/Show/Tabs:_reviews.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_reviews.html.twig");
    }
}
