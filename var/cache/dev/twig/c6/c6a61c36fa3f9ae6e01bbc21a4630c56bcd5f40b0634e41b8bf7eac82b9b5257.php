<?php

/* SyliusAdminBundle:ProductVariant:_form.html.twig */
class __TwigTemplate_47a9186b3b3b7f0407fd4a926571a4d19715f9d40927aa49741bacf566f04d88 extends Twig_Template
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
        $__internal_9feb4e11087d269b5f4190de8add9e784a3313c64142ea37cc8906d716a09b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9feb4e11087d269b5f4190de8add9e784a3313c64142ea37cc8906d716a09b06->enter($__internal_9feb4e11087d269b5f4190de8add9e784a3313c64142ea37cc8906d716a09b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:_form.html.twig"));

        $__internal_3a846fd54f4ee625b82011dc6b3c2db287b15dbe9b3b7a82a458010d92acea83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a846fd54f4ee625b82011dc6b3c2db287b15dbe9b3b7a82a458010d92acea83->enter($__internal_3a846fd54f4ee625b82011dc6b3c2db287b15dbe9b3b7a82a458010d92acea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:_form.html.twig"));

        // line 1
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.product_variant_form", array(), array("product_variant" => ($context["product_variant"] ?? $this->getContext($context, "product_variant"))));
        // line 2
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), array("template" => "SyliusAdminBundle:ProductVariant:_menu.html.twig", "form" => ($context["form"] ?? $this->getContext($context, "form")), "product_variant" => ($context["product_variant"] ?? $this->getContext($context, "product_variant"))));
        echo "
";
        
        $__internal_9feb4e11087d269b5f4190de8add9e784a3313c64142ea37cc8906d716a09b06->leave($__internal_9feb4e11087d269b5f4190de8add9e784a3313c64142ea37cc8906d716a09b06_prof);

        
        $__internal_3a846fd54f4ee625b82011dc6b3c2db287b15dbe9b3b7a82a458010d92acea83->leave($__internal_3a846fd54f4ee625b82011dc6b3c2db287b15dbe9b3b7a82a458010d92acea83_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set menu = knp_menu_get('sylius.admin.product_variant_form', [], {'product_variant': product_variant}) %}
{{ knp_menu_render(menu, {'template': 'SyliusAdminBundle:ProductVariant:_menu.html.twig', 'form': form, 'product_variant': product_variant}) }}
", "SyliusAdminBundle:ProductVariant:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/_form.html.twig");
    }
}
