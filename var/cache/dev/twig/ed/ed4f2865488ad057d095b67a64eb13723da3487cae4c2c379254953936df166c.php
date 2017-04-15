<?php

/* @SyliusShop/Product/Show/Tabs/_reviews.html.twig */
class __TwigTemplate_1b6f5e3562c7b6d241ac6e8aab969dd51885b05809b9fb2a67b205977e5aa3c1 extends Twig_Template
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
        $__internal_f3c77ee727b91be1d8a6bbb354631ff170964d299fc9ba2d172268f6f0ff831c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c77ee727b91be1d8a6bbb354631ff170964d299fc9ba2d172268f6f0ff831c->enter($__internal_f3c77ee727b91be1d8a6bbb354631ff170964d299fc9ba2d172268f6f0ff831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig"));

        $__internal_4101fde4cc6a9ddc6119213fbd0f2601d14fc2d53eac6da10130141a58c8da59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4101fde4cc6a9ddc6119213fbd0f2601d14fc2d53eac6da10130141a58c8da59->enter($__internal_4101fde4cc6a9ddc6119213fbd0f2601d14fc2d53eac6da10130141a58c8da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig"));

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
        
        $__internal_f3c77ee727b91be1d8a6bbb354631ff170964d299fc9ba2d172268f6f0ff831c->leave($__internal_f3c77ee727b91be1d8a6bbb354631ff170964d299fc9ba2d172268f6f0ff831c_prof);

        
        $__internal_4101fde4cc6a9ddc6119213fbd0f2601d14fc2d53eac6da10130141a58c8da59->leave($__internal_4101fde4cc6a9ddc6119213fbd0f2601d14fc2d53eac6da10130141a58c8da59_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_reviews.html.twig";
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
", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_reviews.html.twig");
    }
}
