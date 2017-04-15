<?php

/* @SyliusShop/_header.html.twig */
class __TwigTemplate_470c0a917e4a7fff387dac4f7f2ee0f33144e8c4abf49070a11a3a9d35a9ecb1 extends Twig_Template
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
        $__internal_f3b3107a574ad93f4ee52d070783a1d12391cf0c058efc8acf154a84229888d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b3107a574ad93f4ee52d070783a1d12391cf0c058efc8acf154a84229888d0->enter($__internal_f3b3107a574ad93f4ee52d070783a1d12391cf0c058efc8acf154a84229888d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

        $__internal_6ba69929258ba4a7a8de1e0558ce73e6719e76b0c66e2cd574060723e97e4d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba69929258ba4a7a8de1e0558ce73e6719e76b0c66e2cd574060723e97e4d19->enter($__internal_6ba69929258ba4a7a8de1e0558ce73e6719e76b0c66e2cd574060723e97e4d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

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
        
        $__internal_f3b3107a574ad93f4ee52d070783a1d12391cf0c058efc8acf154a84229888d0->leave($__internal_f3b3107a574ad93f4ee52d070783a1d12391cf0c058efc8acf154a84229888d0_prof);

        
        $__internal_6ba69929258ba4a7a8de1e0558ce73e6719e76b0c66e2cd574060723e97e4d19->leave($__internal_6ba69929258ba4a7a8de1e0558ce73e6719e76b0c66e2cd574060723e97e4d19_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/_header.html.twig";
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
", "@SyliusShop/_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/_header.html.twig");
    }
}
