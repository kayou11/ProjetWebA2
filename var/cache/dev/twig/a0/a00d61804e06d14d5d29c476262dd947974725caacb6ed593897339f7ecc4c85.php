<?php

/* SyliusShopBundle:Cart/Summary:_header.html.twig */
class __TwigTemplate_69ef8563c7a1c2f831d0536a0a4300dd95d575b33fbfde87683cf11436d7ec34 extends Twig_Template
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
        $__internal_0ba6d4fece5362a457549c11c6fa0d98627c0772bc00c52fa706dea32c7c3644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba6d4fece5362a457549c11c6fa0d98627c0772bc00c52fa706dea32c7c3644->enter($__internal_0ba6d4fece5362a457549c11c6fa0d98627c0772bc00c52fa706dea32c7c3644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_header.html.twig"));

        $__internal_cee1e3606d6206d7744e7bc7d12b23f3582bcf58eb4df9a230daee08b470bbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee1e3606d6206d7744e7bc7d12b23f3582bcf58eb4df9a230daee08b470bbc0->enter($__internal_cee1e3606d6206d7744e7bc7d12b23f3582bcf58eb4df9a230daee08b470bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_header.html.twig"));

        // line 1
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["headers"] ?? $this->getContext($context, "headers")), "default", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), 1 => "cart", 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_your_items_apply_coupon_or_proceed_to_the_checkout")), "method"), "html", null, true);
        echo "
    </div>
    <div class=\"middle aligned column\">
        <form method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_clear");
        echo "\" >
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken($this->getAttribute(($context["cart"] ?? $this->getContext($context, "cart")), "id", array())), "html", null, true);
        echo "\" />
            <button type=\"submit\" id=\"sylius-cart-clear\" class=\"ui right floated basic red button\">
                <i class=\"icon remove\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.clear_cart"), "html", null, true);
        echo "
            </button>
        </form>
    </div>
</div>
";
        
        $__internal_0ba6d4fece5362a457549c11c6fa0d98627c0772bc00c52fa706dea32c7c3644->leave($__internal_0ba6d4fece5362a457549c11c6fa0d98627c0772bc00c52fa706dea32c7c3644_prof);

        
        $__internal_cee1e3606d6206d7744e7bc7d12b23f3582bcf58eb4df9a230daee08b470bbc0->leave($__internal_cee1e3606d6206d7744e7bc7d12b23f3582bcf58eb4df9a230daee08b470bbc0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  41 => 9,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui hidden divider\"></div>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ headers.default(header|trans, 'cart', 'sylius.ui.edit_your_items_apply_coupon_or_proceed_to_the_checkout'|trans) }}
    </div>
    <div class=\"middle aligned column\">
        <form method=\"post\" action=\"{{ path('sylius_shop_cart_clear') }}\" >
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(cart.id) }}\" />
            <button type=\"submit\" id=\"sylius-cart-clear\" class=\"ui right floated basic red button\">
                <i class=\"icon remove\"></i> {{ 'sylius.ui.clear_cart'|trans }}
            </button>
        </form>
    </div>
</div>
", "SyliusShopBundle:Cart/Summary:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_header.html.twig");
    }
}
