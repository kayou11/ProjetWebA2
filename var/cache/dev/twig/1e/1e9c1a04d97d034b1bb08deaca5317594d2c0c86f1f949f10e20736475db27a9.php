<?php

/* SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig */
class __TwigTemplate_19b73c73b1469607b02ed1b90cc8998e813ba856161c19bc7f858804dbef621d extends Twig_Template
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
        $__internal_51a94a8d4232dc51c3ac0fff46e83ca8b3d236f62524f6b985690ff20c1ee26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a94a8d4232dc51c3ac0fff46e83ca8b3d236f62524f6b985690ff20c1ee26f->enter($__internal_51a94a8d4232dc51c3ac0fff46e83ca8b3d236f62524f6b985690ff20c1ee26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig"));

        $__internal_32fdeb3c397a6a3231f35570743c44e451510208ee056e1248f14b1413f7ee25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fdeb3c397a6a3231f35570743c44e451510208ee056e1248f14b1413f7ee25->enter($__internal_32fdeb3c397a6a3231f35570743c44e451510208ee056e1248f14b1413f7ee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_generate", array("productId" => $this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "product", array()), "id", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_generate", array("productId" => $this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "product", array()), "id", array())))));
        // line 4
        echo "
";
        // line 5
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "product", array()), "options", array()))) {
            // line 6
            echo "    ";
            echo $context["buttons"]->getdefault(($context["path"] ?? $this->getContext($context, "path")), "sylius.ui.generate", null, "random");
            echo "
";
        }
        
        $__internal_51a94a8d4232dc51c3ac0fff46e83ca8b3d236f62524f6b985690ff20c1ee26f->leave($__internal_51a94a8d4232dc51c3ac0fff46e83ca8b3d236f62524f6b985690ff20c1ee26f_prof);

        
        $__internal_32fdeb3c397a6a3231f35570743c44e451510208ee056e1248f14b1413f7ee25->leave($__internal_32fdeb3c397a6a3231f35570743c44e451510208ee056e1248f14b1413f7ee25_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}

{% set path = options.link.url|default(path('sylius_admin_product_variant_generate', {'productId': options.product.id})) %}

{% if options.product.options is not empty %}
    {{ buttons.default(path, 'sylius.ui.generate', null, 'random') }}
{% endif %}
", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Grid/Action/generateVariants.html.twig");
    }
}
