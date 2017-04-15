<?php

/* SyliusShopBundle:Homepage:index.html.twig */
class __TwigTemplate_e2631a6e815df1c9b3d2e804833d2d7e98b7f74c26fcc13f48534b956f715fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Homepage:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c72b98f4cb73d9bd07c20192a5073e6581ce4b893b98ac405774c4295b8b9bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72b98f4cb73d9bd07c20192a5073e6581ce4b893b98ac405774c4295b8b9bab->enter($__internal_c72b98f4cb73d9bd07c20192a5073e6581ce4b893b98ac405774c4295b8b9bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Homepage:index.html.twig"));

        $__internal_c5879801eb9ef12a10620f536cc96d2ef9b0b7613ef9fc6a3d448a00ba4db9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5879801eb9ef12a10620f536cc96d2ef9b0b7613ef9fc6a3d448a00ba4db9f3->enter($__internal_c5879801eb9ef12a10620f536cc96d2ef9b0b7613ef9fc6a3d448a00ba4db9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Homepage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c72b98f4cb73d9bd07c20192a5073e6581ce4b893b98ac405774c4295b8b9bab->leave($__internal_c72b98f4cb73d9bd07c20192a5073e6581ce4b893b98ac405774c4295b8b9bab_prof);

        
        $__internal_c5879801eb9ef12a10620f536cc96d2ef9b0b7613ef9fc6a3d448a00ba4db9f3->leave($__internal_c5879801eb9ef12a10620f536cc96d2ef9b0b7613ef9fc6a3d448a00ba4db9f3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_02cec5d1783e1e36e8559e3e13099797f420dbf3c756b96bb9df8cba11ab4e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cec5d1783e1e36e8559e3e13099797f420dbf3c756b96bb9df8cba11ab4e7e->enter($__internal_02cec5d1783e1e36e8559e3e13099797f420dbf3c756b96bb9df8cba11ab4e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_81c6fca7eacdf4c376c4c811f5f0f243a0e6f4ffdbbfa7790fcbdd27139cc24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c6fca7eacdf4c376c4c811f5f0f243a0e6f4ffdbbfa7790fcbdd27139cc24d->enter($__internal_81c6fca7eacdf4c376c4c811f5f0f243a0e6f4ffdbbfa7790fcbdd27139cc24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2 class=\"ui horizontal section divider header\">
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.latest_products"), "html", null, true);
        echo "
</h2>
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "
";
        
        $__internal_81c6fca7eacdf4c376c4c811f5f0f243a0e6f4ffdbbfa7790fcbdd27139cc24d->leave($__internal_81c6fca7eacdf4c376c4c811f5f0f243a0e6f4ffdbbfa7790fcbdd27139cc24d_prof);

        
        $__internal_02cec5d1783e1e36e8559e3e13099797f420dbf3c756b96bb9df8cba11ab4e7e->leave($__internal_02cec5d1783e1e36e8559e3e13099797f420dbf3c756b96bb9df8cba11ab4e7e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
<h2 class=\"ui horizontal section divider header\">
    {{ 'sylius.ui.latest_products'|trans }}
</h2>
{{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}
{% endblock %}
", "SyliusShopBundle:Homepage:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/index.html.twig");
    }
}
