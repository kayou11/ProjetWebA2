<?php

/* SyliusShopBundle:Product/Show:_price.html.twig */
class __TwigTemplate_f736c1f2e776340468957bd542c9f811e2592e2892eb99ccf6c6ad8b612f02b0 extends Twig_Template
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
        $__internal_fb4c0eb57cb62c824dc3354836493e49d09f494c26128f8be2469c472ab1a343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4c0eb57cb62c824dc3354836493e49d09f494c26128f8be2469c472ab1a343->enter($__internal_fb4c0eb57cb62c824dc3354836493e49d09f494c26128f8be2469c472ab1a343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_price.html.twig"));

        $__internal_e8cf1d97c6c6869bac271db9ad24121cbe000cf3e759459b702e67a9e865549f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cf1d97c6c6869bac271db9ad24121cbe000cf3e759459b702e67a9e865549f->enter($__internal_e8cf1d97c6c6869bac271db9ad24121cbe000cf3e759459b702e67a9e865549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_price.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Show:_price.html.twig", 1);
        // line 2
        echo "
<span class=\"ui huge header\" id=\"product-price\">
    ";
        // line 4
        echo $context["money"]->getcalculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array(($context["product"] ?? $this->getContext($context, "product")))));
        echo "
</span>
";
        
        $__internal_fb4c0eb57cb62c824dc3354836493e49d09f494c26128f8be2469c472ab1a343->leave($__internal_fb4c0eb57cb62c824dc3354836493e49d09f494c26128f8be2469c472ab1a343_prof);

        
        $__internal_e8cf1d97c6c6869bac271db9ad24121cbe000cf3e759459b702e67a9e865549f->leave($__internal_e8cf1d97c6c6869bac271db9ad24121cbe000cf3e759459b702e67a9e865549f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<span class=\"ui huge header\" id=\"product-price\">
    {{ money.calculatePrice(product|sylius_resolve_variant) }}
</span>
", "SyliusShopBundle:Product/Show:_price.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_price.html.twig");
    }
}
