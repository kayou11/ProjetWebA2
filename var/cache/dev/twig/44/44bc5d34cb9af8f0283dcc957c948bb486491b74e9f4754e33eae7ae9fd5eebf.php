<?php

/* SyliusAdminBundle:ProductVariant/Index:_header.html.twig */
class __TwigTemplate_af07f05f1cee95bf0412f4810c27a17a69e80a24ab68c43ad18872ca5abd8205 extends Twig_Template
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
        $__internal_e900fbeabbc37160448e469ace2826758c3c07aec79d96392d0b3bb67d2c74fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e900fbeabbc37160448e469ace2826758c3c07aec79d96392d0b3bb67d2c74fa->enter($__internal_e900fbeabbc37160448e469ace2826758c3c07aec79d96392d0b3bb67d2c74fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_header.html.twig"));

        $__internal_6ca57cb1a566657823c151d17abda05e546094eb248366d2d77bb5fe0df01e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca57cb1a566657823c151d17abda05e546094eb248366d2d77bb5fe0df01e6c->enter($__internal_6ca57cb1a566657823c151d17abda05e546094eb248366d2d77bb5fe0df01e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_header.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_product_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 2
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "productId"), "method"), "template" => "@SyliusAdmin/ProductVariant/Index/_productHeader.html.twig", "vars" => $this->getAttribute(        // line 4
($context["configuration"] ?? $this->getContext($context, "configuration")), "vars", array()))));
        // line 5
        echo "
";
        
        $__internal_e900fbeabbc37160448e469ace2826758c3c07aec79d96392d0b3bb67d2c74fa->leave($__internal_e900fbeabbc37160448e469ace2826758c3c07aec79d96392d0b3bb67d2c74fa_prof);

        
        $__internal_6ca57cb1a566657823c151d17abda05e546094eb248366d2d77bb5fe0df01e6c->leave($__internal_6ca57cb1a566657823c151d17abda05e546094eb248366d2d77bb5fe0df01e6c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  26 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(url('sylius_admin_partial_product_show', {
    'id': app.request.attributes.get('productId'),
    'template': '@SyliusAdmin/ProductVariant/Index/_productHeader.html.twig',
    'vars': configuration.vars
})) }}
", "SyliusAdminBundle:ProductVariant/Index:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Index/_header.html.twig");
    }
}
