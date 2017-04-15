<?php

/* SyliusShopBundle:ProductReview:index.html.twig */
class __TwigTemplate_f22a915d8e8d4c4d2d0771a445d10682832979eb638f268903846849336e4347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:ProductReview:index.html.twig", 1);
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
        $__internal_06baa1fea2c9dbabf05cf024beef9cedc10bcfb26bcfde3ca3835bb7f664f2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06baa1fea2c9dbabf05cf024beef9cedc10bcfb26bcfde3ca3835bb7f664f2f2->enter($__internal_06baa1fea2c9dbabf05cf024beef9cedc10bcfb26bcfde3ca3835bb7f664f2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:index.html.twig"));

        $__internal_e12f2cb73202f7f0fc5f9de71c76c3483846aed946e15af68ebd1c1a0a8d124e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12f2cb73202f7f0fc5f9de71c76c3483846aed946e15af68ebd1c1a0a8d124e->enter($__internal_e12f2cb73202f7f0fc5f9de71c76c3483846aed946e15af68ebd1c1a0a8d124e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06baa1fea2c9dbabf05cf024beef9cedc10bcfb26bcfde3ca3835bb7f664f2f2->leave($__internal_06baa1fea2c9dbabf05cf024beef9cedc10bcfb26bcfde3ca3835bb7f664f2f2_prof);

        
        $__internal_e12f2cb73202f7f0fc5f9de71c76c3483846aed946e15af68ebd1c1a0a8d124e->leave($__internal_e12f2cb73202f7f0fc5f9de71c76c3483846aed946e15af68ebd1c1a0a8d124e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_916b642e212fa3fc1aa6b4de384999d427266bd607d35c79db7313a28884e284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916b642e212fa3fc1aa6b4de384999d427266bd607d35c79db7313a28884e284->enter($__internal_916b642e212fa3fc1aa6b4de384999d427266bd607d35c79db7313a28884e284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cf96294b47b032ac3398bf1f61afc70fdff01a06dd6c7eafa1258bccbd1cb2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf96294b47b032ac3398bf1f61afc70fdff01a06dd6c7eafa1258bccbd1cb2b9->enter($__internal_cf96294b47b032ac3398bf1f61afc70fdff01a06dd6c7eafa1258bccbd1cb2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.before_product_box", array("product_reviews" => ($context["product_reviews"] ?? $this->getContext($context, "product_reviews")))));
        echo "

            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_show_by_slug", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Product/_box.html.twig")));
        // line 14
        echo "

            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.after_product_box", array("product_reviews" => ($context["product_reviews"] ?? $this->getContext($context, "product_reviews")))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\" id=\"sylius-product-reviews\">
                ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.before_list", array("product_reviews" => ($context["product_reviews"] ?? $this->getContext($context, "product_reviews")))));
        echo "

                ";
        // line 22
        $this->loadTemplate("@SyliusShop/ProductReview/_list.html.twig", "SyliusShopBundle:ProductReview:index.html.twig", 22)->display($context);
        // line 23
        echo "
                ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.after_list", array("product_reviews" => ($context["product_reviews"] ?? $this->getContext($context, "product_reviews")))));
        echo "
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\">
                    <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</div>
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_cf96294b47b032ac3398bf1f61afc70fdff01a06dd6c7eafa1258bccbd1cb2b9->leave($__internal_cf96294b47b032ac3398bf1f61afc70fdff01a06dd6c7eafa1258bccbd1cb2b9_prof);

        
        $__internal_916b642e212fa3fc1aa6b4de384999d427266bd607d35c79db7313a28884e284->leave($__internal_916b642e212fa3fc1aa6b4de384999d427266bd607d35c79db7313a28884e284_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  87 => 25,  83 => 24,  80 => 23,  78 => 22,  73 => 20,  66 => 16,  62 => 14,  60 => 11,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.product_review.index.before_product_box', {'product_reviews': product_reviews}) }}

            {{
                render(url('sylius_shop_partial_product_show_by_slug', {
                    'slug': app.request.attributes.get('slug'),
                    'template': '@SyliusShop/Product/_box.html.twig'
                }))
            }}

            {{ sonata_block_render_event('sylius.shop.product_review.index.after_product_box', {'product_reviews': product_reviews}) }}
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\" id=\"sylius-product-reviews\">
                {{ sonata_block_render_event('sylius.shop.product_review.index.before_list', {'product_reviews': product_reviews}) }}

                {% include '@SyliusShop/ProductReview/_list.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.product_review.index.after_list', {'product_reviews': product_reviews}) }}
                <a href=\"{{ path('sylius_shop_product_review_create', {'slug': app.request.get('slug')}) }}\">
                    <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> {{ 'sylius.ui.add_your_review'|trans }}</div>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:ProductReview:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/index.html.twig");
    }
}
