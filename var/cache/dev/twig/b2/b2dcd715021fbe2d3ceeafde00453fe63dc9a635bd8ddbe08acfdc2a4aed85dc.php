<?php

/* @SyliusShop/Homepage/index.html.twig */
class __TwigTemplate_da6d81fe8762f33796a85a0f02818914ffe7de6fd6665b03c4723b5700e962b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Homepage/index.html.twig", 1);
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
        $__internal_a359f7dbcca09497ed81b8975053d715845779e8bfe16b8165eabcf1f08ba89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a359f7dbcca09497ed81b8975053d715845779e8bfe16b8165eabcf1f08ba89a->enter($__internal_a359f7dbcca09497ed81b8975053d715845779e8bfe16b8165eabcf1f08ba89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $__internal_e9b3302747804b1db426e9823491539008f2f2f5ba5e64d62f1aaabe2e40ff69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b3302747804b1db426e9823491539008f2f2f5ba5e64d62f1aaabe2e40ff69->enter($__internal_e9b3302747804b1db426e9823491539008f2f2f5ba5e64d62f1aaabe2e40ff69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a359f7dbcca09497ed81b8975053d715845779e8bfe16b8165eabcf1f08ba89a->leave($__internal_a359f7dbcca09497ed81b8975053d715845779e8bfe16b8165eabcf1f08ba89a_prof);

        
        $__internal_e9b3302747804b1db426e9823491539008f2f2f5ba5e64d62f1aaabe2e40ff69->leave($__internal_e9b3302747804b1db426e9823491539008f2f2f5ba5e64d62f1aaabe2e40ff69_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a1a10aad4123c09a0b997db251d96c03803f46c65db0972f94797a523391e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1a10aad4123c09a0b997db251d96c03803f46c65db0972f94797a523391e9f->enter($__internal_5a1a10aad4123c09a0b997db251d96c03803f46c65db0972f94797a523391e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7c4bb827be80ad7a22b5f62216b1451953faecb68b10a4c5a26ba51e739e8df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4bb827be80ad7a22b5f62216b1451953faecb68b10a4c5a26ba51e739e8df8->enter($__internal_7c4bb827be80ad7a22b5f62216b1451953faecb68b10a4c5a26ba51e739e8df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7c4bb827be80ad7a22b5f62216b1451953faecb68b10a4c5a26ba51e739e8df8->leave($__internal_7c4bb827be80ad7a22b5f62216b1451953faecb68b10a4c5a26ba51e739e8df8_prof);

        
        $__internal_5a1a10aad4123c09a0b997db251d96c03803f46c65db0972f94797a523391e9f->leave($__internal_5a1a10aad4123c09a0b997db251d96c03803f46c65db0972f94797a523391e9f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/index.html.twig";
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
", "@SyliusShop/Homepage/index.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/index.html.twig");
    }
}
