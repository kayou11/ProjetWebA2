<?php

/* SyliusShopBundle:Product/Index:_sidebar.html.twig */
class __TwigTemplate_434be99b16a34ff853cdc29ff49f632cef7eab5c2253a9d329cce06f924a79f3 extends Twig_Template
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
        $__internal_ddc628cc5ec5a9362ec536de074a3a6947217c110d5aa87c9cd32f16518418fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc628cc5ec5a9362ec536de074a3a6947217c110d5aa87c9cd32f16518418fe->enter($__internal_ddc628cc5ec5a9362ec536de074a3a6947217c110d5aa87c9cd32f16518418fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_sidebar.html.twig"));

        $__internal_d4f53de7cbd2d862058753104fdc48bd715cb5152628683e2f294f84bc4fab9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f53de7cbd2d862058753104fdc48bd715cb5152628683e2f294f84bc4fab9b->enter($__internal_d4f53de7cbd2d862058753104fdc48bd715cb5152628683e2f294f84bc4fab9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_sidebar.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_show_by_slug", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 2
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Taxon/_verticalMenu.html.twig")));
        // line 4
        echo "
";
        
        $__internal_ddc628cc5ec5a9362ec536de074a3a6947217c110d5aa87c9cd32f16518418fe->leave($__internal_ddc628cc5ec5a9362ec536de074a3a6947217c110d5aa87c9cd32f16518418fe_prof);

        
        $__internal_d4f53de7cbd2d862058753104fdc48bd715cb5152628683e2f294f84bc4fab9b->leave($__internal_d4f53de7cbd2d862058753104fdc48bd715cb5152628683e2f294f84bc4fab9b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(url('sylius_shop_partial_taxon_show_by_slug', {
    'slug': app.request.attributes.get('slug'),
    'template': '@SyliusShop/Taxon/_verticalMenu.html.twig'
})) }}
", "SyliusShopBundle:Product/Index:_sidebar.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_sidebar.html.twig");
    }
}
