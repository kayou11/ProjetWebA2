<?php

/* SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig */
class __TwigTemplate_8528e0b7fcd903d511bfb786ffb29e1d7ecb58246ecc5c208d2c8e422756ca26 extends Twig_Template
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
        $__internal_02f2566ffc5ddec851a25404397a8bb175e5d91faf79a9e2e4608bcf167758dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f2566ffc5ddec851a25404397a8bb175e5d91faf79a9e2e4608bcf167758dd->enter($__internal_02f2566ffc5ddec851a25404397a8bb175e5d91faf79a9e2e4608bcf167758dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig"));

        $__internal_d02268fdab303294ddb6d0851573a90f4a16c474632fa36cf179d6ba762d71bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02268fdab303294ddb6d0851573a90f4a16c474632fa36cf179d6ba762d71bb->enter($__internal_d02268fdab303294ddb6d0851573a90f4a16c474632fa36cf179d6ba762d71bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig", 1);
        // line 2
        echo "
<div class=\"column\">
    ";
        // line 4
        echo $context["headers"]->getdefault($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cubes")) : ("cubes")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_variants")) : ("sylius.ui.manage_variants"))));
        echo "

    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    ";
        // line 8
        $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig", 8)->display($context);
        // line 9
        echo "</div>
";
        
        $__internal_02f2566ffc5ddec851a25404397a8bb175e5d91faf79a9e2e4608bcf167758dd->leave($__internal_02f2566ffc5ddec851a25404397a8bb175e5d91faf79a9e2e4608bcf167758dd_prof);

        
        $__internal_d02268fdab303294ddb6d0851573a90f4a16c474632fa36cf179d6ba762d71bb->leave($__internal_d02268fdab303294ddb6d0851573a90f4a16c474632fa36cf179d6ba762d71bb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  41 => 8,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
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
    {{ headers.default(product.name, configuration.vars.icon|default('cubes'), configuration.vars.subheader|default('sylius.ui.manage_variants')|trans) }}

    {{ sonata_block_render_event('sylius.admin.product_variant.index.header', {'resource': resource}) }}

    {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig') %}
</div>
", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Index/_productHeader.html.twig");
    }
}
