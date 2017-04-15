<?php

/* SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig */
class __TwigTemplate_630ad0ccbc29f45a0af38f747331dfb3d44a428897fa547aec46496b8777a659 extends Twig_Template
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
        $__internal_032266ac8faeb9b53011d3d8a7965e7497cc032fcffdd3e477947a39ce821947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032266ac8faeb9b53011d3d8a7965e7497cc032fcffdd3e477947a39ce821947->enter($__internal_032266ac8faeb9b53011d3d8a7965e7497cc032fcffdd3e477947a39ce821947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig"));

        $__internal_006f5027e0718d49dd5dcceca93e0365f1370429d8f72b30d9084546677092ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006f5027e0718d49dd5dcceca93e0365f1370429d8f72b30d9084546677092ca->enter($__internal_006f5027e0718d49dd5dcceca93e0365f1370429d8f72b30d9084546677092ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig"));

        // line 1
        echo "<form class=\"sylius-update-product-variants\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_variants_update_position");
        echo "\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("update-product-variant-position"), "html", null, true);
        echo "\">
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_positions"), "html", null, true);
        echo "
    </button>
</form>
";
        
        $__internal_032266ac8faeb9b53011d3d8a7965e7497cc032fcffdd3e477947a39ce821947->leave($__internal_032266ac8faeb9b53011d3d8a7965e7497cc032fcffdd3e477947a39ce821947_prof);

        
        $__internal_006f5027e0718d49dd5dcceca93e0365f1370429d8f72b30d9084546677092ca->leave($__internal_006f5027e0718d49dd5dcceca93e0365f1370429d8f72b30d9084546677092ca_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"sylius-update-product-variants\" action=\"{{ path('sylius_admin_ajax_product_variants_update_position') }}\" data-csrf-token=\"{{ csrf_token('update-product-variant-position') }}\">
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        {{ 'sylius.ui.save_positions'|trans }}
    </button>
</form>
", "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Action/updatePositions.html.twig");
    }
}
