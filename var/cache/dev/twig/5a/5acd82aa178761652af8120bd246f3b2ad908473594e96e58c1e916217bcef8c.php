<?php

/* SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig */
class __TwigTemplate_28c9071ff1d4ed1d6de901c38d5191b386705d1076bc048bce3a53d0a84c6a53 extends Twig_Template
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
        $__internal_9525ddd600a291d27d6701371cddf7bb55e9550a334a6c3c644eb596c1c21d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9525ddd600a291d27d6701371cddf7bb55e9550a334a6c3c644eb596c1c21d77->enter($__internal_9525ddd600a291d27d6701371cddf7bb55e9550a334a6c3c644eb596c1c21d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig"));

        $__internal_3f26d6becc96d4158e8f7894dc1b64960a67d1ac8f7b9ae8895f7164e2f686cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f26d6becc96d4158e8f7894dc1b64960a67d1ac8f7b9ae8895f7164e2f686cb->enter($__internal_3f26d6becc96d4158e8f7894dc1b64960a67d1ac8f7b9ae8895f7164e2f686cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig"));

        // line 1
        $context["enabled"] = twig_length_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shipments", array()));
        // line 2
        echo "
<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address");
        echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_address"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 8
        if ( !($context["enabled"] ?? $this->getContext($context, "enabled"))) {
            echo " disabled";
        }
        echo " button\">
            <i class=\"arrow right icon\"></i>
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
        
        $__internal_9525ddd600a291d27d6701371cddf7bb55e9550a334a6c3c644eb596c1c21d77->leave($__internal_9525ddd600a291d27d6701371cddf7bb55e9550a334a6c3c644eb596c1c21d77_prof);

        
        $__internal_3f26d6becc96d4158e8f7894dc1b64960a67d1ac8f7b9ae8895f7164e2f686cb->leave($__internal_3f26d6becc96d4158e8f7894dc1b64960a67d1ac8f7b9ae8895f7164e2f686cb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  40 => 8,  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set enabled = order.shipments|length %}

<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"{{ path('sylius_shop_checkout_address') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_address'|trans }}</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled{% if not enabled %} disabled{% endif %} button\">
            <i class=\"arrow right icon\"></i>
            {{ 'sylius.ui.next'|trans }}
        </button>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_navigation.html.twig");
    }
}
