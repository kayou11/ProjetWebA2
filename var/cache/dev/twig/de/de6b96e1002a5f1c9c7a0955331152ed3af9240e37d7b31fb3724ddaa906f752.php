<?php

/* SyliusShopBundle:Taxon:_header.html.twig */
class __TwigTemplate_368c13f832423fdb3bc158f80a4b438215d7ed297c9cdd1fa0b9c849ea7b10a2 extends Twig_Template
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
        $__internal_3de47b2489a7f868c3f3f3b1351dccd91499cd9d331ede1e464c5e04e682d1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de47b2489a7f868c3f3f3b1351dccd91499cd9d331ede1e464c5e04e682d1cc->enter($__internal_3de47b2489a7f868c3f3f3b1351dccd91499cd9d331ede1e464c5e04e682d1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_header.html.twig"));

        $__internal_a3c334ce8273a9362b1755dfaaa131243ba291f0f6a38baceeb641d7a2e7f284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c334ce8273a9362b1755dfaaa131243ba291f0f6a38baceeb641d7a2e7f284->enter($__internal_a3c334ce8273a9362b1755dfaaa131243ba291f0f6a38baceeb641d7a2e7f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_header.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Taxon/_breadcrumb.html.twig", "SyliusShopBundle:Taxon:_header.html.twig", 1)->display($context);
        // line 2
        echo "
<h1 class=\"ui monster section dividing header\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
        echo "
    <div class=\"sub header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "description", array()), "html", null, true);
        echo "</div>
</h1>
";
        
        $__internal_3de47b2489a7f868c3f3f3b1351dccd91499cd9d331ede1e464c5e04e682d1cc->leave($__internal_3de47b2489a7f868c3f3f3b1351dccd91499cd9d331ede1e464c5e04e682d1cc_prof);

        
        $__internal_a3c334ce8273a9362b1755dfaaa131243ba291f0f6a38baceeb641d7a2e7f284->leave($__internal_a3c334ce8273a9362b1755dfaaa131243ba291f0f6a38baceeb641d7a2e7f284_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Taxon/_breadcrumb.html.twig' %}

<h1 class=\"ui monster section dividing header\">
    {{ taxon.name }}
    <div class=\"sub header\">{{ taxon.description }}</div>
</h1>
", "SyliusShopBundle:Taxon:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_header.html.twig");
    }
}
