<?php

/* @SyliusShop/Product/Show/_associations.html.twig */
class __TwigTemplate_d959fccfc04da5003227fbf1756dec5a97a5ef1054fd00b7b1e0581f0c9f50d3 extends Twig_Template
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
        $__internal_672e5179f8c42ea3bc869be0e5f28e999c0096a748ca414344c7c227bb3f3f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672e5179f8c42ea3bc869be0e5f28e999c0096a748ca414344c7c227bb3f3f35->enter($__internal_672e5179f8c42ea3bc869be0e5f28e999c0096a748ca414344c7c227bb3f3f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_associations.html.twig"));

        $__internal_0d8e840d21170a2c8fc7227ca119d78f37e6d29bf3414bf2797f6f23f7d5a1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8e840d21170a2c8fc7227ca119d78f37e6d29bf3414bf2797f6f23f7d5a1a2->enter($__internal_0d8e840d21170a2c8fc7227ca119d78f37e6d29bf3414bf2797f6f23f7d5a1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_associations.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "associations", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_association_show", array("productId" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "id" => $this->getAttribute($context["association"], "id", array()), "template" => "@SyliusShop/Product/Show/_association.html.twig")));
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 4
            echo "    <h4 class=\"ui horizontal section divider header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.latest_products"), "html", null, true);
            echo "</h4>
    ";
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_672e5179f8c42ea3bc869be0e5f28e999c0096a748ca414344c7c227bb3f3f35->leave($__internal_672e5179f8c42ea3bc869be0e5f28e999c0096a748ca414344c7c227bb3f3f35_prof);

        
        $__internal_0d8e840d21170a2c8fc7227ca119d78f37e6d29bf3414bf2797f6f23f7d5a1a2->leave($__internal_0d8e840d21170a2c8fc7227ca119d78f37e6d29bf3414bf2797f6f23f7d5a1a2_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  38 => 4,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for association in product.associations %}
    {{ render(url('sylius_shop_partial_product_association_show', {'productId': product.id, 'id': association.id, 'template': '@SyliusShop/Product/Show/_association.html.twig'})) }}
{% else %}
    <h4 class=\"ui horizontal section divider header\">{{ 'sylius.ui.latest_products'|trans }}</h4>
    {{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}
{% endfor %}
", "@SyliusShop/Product/Show/_associations.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_associations.html.twig");
    }
}
