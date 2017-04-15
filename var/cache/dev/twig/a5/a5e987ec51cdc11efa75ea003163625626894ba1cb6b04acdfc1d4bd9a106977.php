<?php

/* SyliusShopBundle:Account/Order/Index:_header.html.twig */
class __TwigTemplate_e05b6e8aad9d766c6d9eaeaac97972c2bb592c3f2a91a920b0d2e7a27d5393db extends Twig_Template
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
        $__internal_4b4004cd8ab7b71b0c64da05b3be1aeb2e7d9552e570d85a7c596d140c99bbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4004cd8ab7b71b0c64da05b3be1aeb2e7d9552e570d85a7c596d140c99bbe6->enter($__internal_4b4004cd8ab7b71b0c64da05b3be1aeb2e7d9552e570d85a7c596d140c99bbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_header.html.twig"));

        $__internal_205f401d51dcd75c72bf06936f6445080cde1cd9dc04d2d98f6d3d1a253b4bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205f401d51dcd75c72bf06936f6445080cde1cd9dc04d2d98f6d3d1a253b4bdb->enter($__internal_205f401d51dcd75c72bf06936f6445080cde1cd9dc04d2d98f6d3d1a253b4bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_header.html.twig"));

        // line 1
        echo "<h1 class=\"ui header\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        echo "
    <div class=\"sub header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.browse_your_orders_from_the_past"), "html", null, true);
        echo "</div>

    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.index.header", array("orders" => ($context["orders"] ?? $this->getContext($context, "orders")))));
        echo "
</h1>
";
        
        $__internal_4b4004cd8ab7b71b0c64da05b3be1aeb2e7d9552e570d85a7c596d140c99bbe6->leave($__internal_4b4004cd8ab7b71b0c64da05b3be1aeb2e7d9552e570d85a7c596d140c99bbe6_prof);

        
        $__internal_205f401d51dcd75c72bf06936f6445080cde1cd9dc04d2d98f6d3d1a253b4bdb->leave($__internal_205f401d51dcd75c72bf06936f6445080cde1cd9dc04d2d98f6d3d1a253b4bdb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"ui header\">
    {{ 'sylius.ui.order_history'|trans }}
    <div class=\"sub header\">{{ 'sylius.ui.browse_your_orders_from_the_past'|trans }}</div>

    {{ sonata_block_render_event('sylius.shop.account.order.index.header', {'orders': orders}) }}
</h1>
", "SyliusShopBundle:Account/Order/Index:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Index/_header.html.twig");
    }
}
