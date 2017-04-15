<?php

/* SyliusShopBundle::_header.html.twig */
class __TwigTemplate_b8369785e38e82847bb40f0ccda6aee0c6b9b6af97e550d60f3f7cf83511b36a extends Twig_Template
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
        $__internal_e62f43f38cec39cf986a8a437f88b6434f988a0264485560b81bb22221bcfc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62f43f38cec39cf986a8a437f88b6434f988a0264485560b81bb22221bcfc3c->enter($__internal_e62f43f38cec39cf986a8a437f88b6434f988a0264485560b81bb22221bcfc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_header.html.twig"));

        $__internal_7b6618245d824cdd66bd2ae686249b955cd3ccc36f32648187fe37bc216eff45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6618245d824cdd66bd2ae686249b955cd3ccc36f32648187fe37bc216eff45->enter($__internal_7b6618245d824cdd66bd2ae686249b955cd3ccc36f32648187fe37bc216eff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_header.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui three column stackable grid\">
        <div class=\"column\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" /></a>
        </div>
        <div class=\"column\">
            ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.header"));
        echo "
        </div>
        <div class=\"right aligned column\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_cart_summary", array("template" => "@SyliusShop/Cart/_widget.html.twig")));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_e62f43f38cec39cf986a8a437f88b6434f988a0264485560b81bb22221bcfc3c->leave($__internal_e62f43f38cec39cf986a8a437f88b6434f988a0264485560b81bb22221bcfc3c_prof);

        
        $__internal_7b6618245d824cdd66bd2ae686249b955cd3ccc36f32648187fe37bc216eff45->leave($__internal_7b6618245d824cdd66bd2ae686249b955cd3ccc36f32648187fe37bc216eff45_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui three column stackable grid\">
        <div class=\"column\">
            <a href=\"{{ path('sylius_shop_homepage') }}\"><img src=\"{{ asset('assets/shop/img/logo.png') }}\" alt=\"Sylius logo\" class=\"ui small image\" /></a>
        </div>
        <div class=\"column\">
            {{ sonata_block_render_event('sylius.shop.layout.header') }}
        </div>
        <div class=\"right aligned column\">
            {{ render(url('sylius_shop_partial_cart_summary', {'template': '@SyliusShop/Cart/_widget.html.twig'})) }}
        </div>
    </div>
</div>
", "SyliusShopBundle::_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/_header.html.twig");
    }
}
