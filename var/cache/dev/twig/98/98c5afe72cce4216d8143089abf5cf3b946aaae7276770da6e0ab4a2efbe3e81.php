<?php

/* SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig */
class __TwigTemplate_19b12d5871d32c24272ac1b758200e17b529fda0de30fd52ff4343b05c490f51 extends Twig_Template
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
        $__internal_5c4fe60a234ab09997f4e2e7c9b8e96ceef75757525126dd064e00cafc36f9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4fe60a234ab09997f4e2e7c9b8e96ceef75757525126dd064e00cafc36f9e2->enter($__internal_5c4fe60a234ab09997f4e2e7c9b8e96ceef75757525126dd064e00cafc36f9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig"));

        $__internal_06adf348efda9c72478419a5883259a49d32670834cd4dd89d963a39b37ce507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06adf348efda9c72478419a5883259a49d32670834cd4dd89d963a39b37ce507->enter($__internal_06adf348efda9c72478419a5883259a49d32670834cd4dd89d963a39b37ce507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_promotion_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 2
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "promotionId"), "method"), "template" => "@SyliusAdmin/PromotionCoupon/Index/_promotionHeader.html.twig", "vars" => $this->getAttribute(        // line 4
($context["configuration"] ?? $this->getContext($context, "configuration")), "vars", array()))));
        // line 5
        echo "
";
        
        $__internal_5c4fe60a234ab09997f4e2e7c9b8e96ceef75757525126dd064e00cafc36f9e2->leave($__internal_5c4fe60a234ab09997f4e2e7c9b8e96ceef75757525126dd064e00cafc36f9e2_prof);

        
        $__internal_06adf348efda9c72478419a5883259a49d32670834cd4dd89d963a39b37ce507->leave($__internal_06adf348efda9c72478419a5883259a49d32670834cd4dd89d963a39b37ce507_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig";
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
        return new Twig_Source("{{ render(url('sylius_admin_partial_promotion_show', {
    'id': app.request.attributes.get('promotionId'),
    'template': '@SyliusAdmin/PromotionCoupon/Index/_promotionHeader.html.twig',
    'vars': configuration.vars
})) }}
", "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Index/_header.html.twig");
    }
}
