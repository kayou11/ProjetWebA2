<?php

/* SyliusShopBundle:Product/Show/Tabs:_menu.html.twig */
class __TwigTemplate_cb4de8dd6b4c2dc546ab122a8a268a63a2dce7bcd46d5aa9739a19ec3427970b extends Twig_Template
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
        $__internal_18a2bb0ddd9e95d8b19b3b7490a3e510f6c0fb9ddf2d08e04bef413d515c8228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a2bb0ddd9e95d8b19b3b7490a3e510f6c0fb9ddf2d08e04bef413d515c8228->enter($__internal_18a2bb0ddd9e95d8b19b3b7490a3e510f6c0fb9ddf2d08e04bef413d515c8228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig"));

        $__internal_c6ecea53d645964ae6ac093ad231c9bc3ba8ab8e55d234565e0e82fb2070bd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ecea53d645964ae6ac093ad231c9bc3ba8ab8e55d234565e0e82fb2070bd6d->enter($__internal_c6ecea53d645964ae6ac093ad231c9bc3ba8ab8e55d234565e0e82fb2070bd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig"));

        // line 1
        echo "<a class=\"item active\" data-tab=\"details\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details"), "html", null, true);
        echo "</a>
";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "attributes", array())) > 0)) {
            // line 3
            echo "    <a class=\"item\" data-tab=\"attributes\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.attributes"), "html", null, true);
            echo "</a>
";
        }
        // line 5
        echo "<a class=\"item\" data-tab=\"reviews\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reviews"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "acceptedReviews", array())), "html", null, true);
        echo ")</a>
";
        
        $__internal_18a2bb0ddd9e95d8b19b3b7490a3e510f6c0fb9ddf2d08e04bef413d515c8228->leave($__internal_18a2bb0ddd9e95d8b19b3b7490a3e510f6c0fb9ddf2d08e04bef413d515c8228_prof);

        
        $__internal_c6ecea53d645964ae6ac093ad231c9bc3ba8ab8e55d234565e0e82fb2070bd6d->leave($__internal_c6ecea53d645964ae6ac093ad231c9bc3ba8ab8e55d234565e0e82fb2070bd6d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"item active\" data-tab=\"details\">{{ 'sylius.ui.details'|trans }}</a>
{% if product.attributes|length > 0 %}
    <a class=\"item\" data-tab=\"attributes\">{{ 'sylius.ui.attributes'|trans }}</a>
{% endif %}
<a class=\"item\" data-tab=\"reviews\">{{ 'sylius.ui.reviews'|trans }} ({{ product.acceptedReviews|length }})</a>
", "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_menu.html.twig");
    }
}
