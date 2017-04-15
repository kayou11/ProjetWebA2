<?php

/* SyliusAdminBundle:Product/Index:_taxonHeader.html.twig */
class __TwigTemplate_695aaef10dd52187c7402e2f55ec3967810ac7a43b0a1137aa967bf6180c0b01 extends Twig_Template
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
        $__internal_dcd1216a399b51efb1f3721b0b56c985b01ad8492ef15fdd7defac0f3227170e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd1216a399b51efb1f3721b0b56c985b01ad8492ef15fdd7defac0f3227170e->enter($__internal_dcd1216a399b51efb1f3721b0b56c985b01ad8492ef15fdd7defac0f3227170e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig"));

        $__internal_5ce8b877c5ee59b616665b32232d9f256a45001a04308ff7824d3a5523cef512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce8b877c5ee59b616665b32232d9f256a45001a04308ff7824d3a5523cef512->enter($__internal_5ce8b877c5ee59b616665b32232d9f256a45001a04308ff7824d3a5523cef512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig", 1);
        // line 2
        echo "
<div class=\"column\">
    ";
        // line 4
        echo $context["headers"]->getdefault($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cube")) : ("cube")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_your_product_catalog")) : ("sylius.ui.manage_your_product_catalog"))));
        echo "

    ";
        // line 6
        $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Product/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Product/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig", 6)->display($context);
        // line 7
        echo "</div>
";
        
        $__internal_dcd1216a399b51efb1f3721b0b56c985b01ad8492ef15fdd7defac0f3227170e->leave($__internal_dcd1216a399b51efb1f3721b0b56c985b01ad8492ef15fdd7defac0f3227170e_prof);

        
        $__internal_5ce8b877c5ee59b616665b32232d9f256a45001a04308ff7824d3a5523cef512->leave($__internal_5ce8b877c5ee59b616665b32232d9f256a45001a04308ff7824d3a5523cef512_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

<div class=\"column\">
    {{ headers.default(taxon.name, configuration.vars.icon|default('cube'), configuration.vars.subheader|default('sylius.ui.manage_your_product_catalog')|trans) }}

    {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Product/Index/_breadcrumb.html.twig') %}
</div>
", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Index/_taxonHeader.html.twig");
    }
}
