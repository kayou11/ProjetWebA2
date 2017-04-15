<?php

/* SyliusShopBundle:Product/Index:_header.html.twig */
class __TwigTemplate_875c7e742f894330e2651c97a12205d9b9d8057b5a0e90683a4cffea3f6f6a9d extends Twig_Template
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
        $__internal_564a271011a2d34865776afb1919f6ba09e0c127e16cd555e7362c6267e67bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564a271011a2d34865776afb1919f6ba09e0c127e16cd555e7362c6267e67bff->enter($__internal_564a271011a2d34865776afb1919f6ba09e0c127e16cd555e7362c6267e67bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_header.html.twig"));

        $__internal_f670035b1a2e604feeff575055248cf18145771cd43dc623304d4f5ce24d452f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f670035b1a2e604feeff575055248cf18145771cd43dc623304d4f5ce24d452f->enter($__internal_f670035b1a2e604feeff575055248cf18145771cd43dc623304d4f5ce24d452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_header.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_show_by_slug", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 2
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Taxon/_header.html.twig")));
        // line 4
        echo "
";
        
        $__internal_564a271011a2d34865776afb1919f6ba09e0c127e16cd555e7362c6267e67bff->leave($__internal_564a271011a2d34865776afb1919f6ba09e0c127e16cd555e7362c6267e67bff_prof);

        
        $__internal_f670035b1a2e604feeff575055248cf18145771cd43dc623304d4f5ce24d452f->leave($__internal_f670035b1a2e604feeff575055248cf18145771cd43dc623304d4f5ce24d452f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_header.html.twig";
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
    'template': '@SyliusShop/Taxon/_header.html.twig'
})) }}
", "SyliusShopBundle:Product/Index:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_header.html.twig");
    }
}
