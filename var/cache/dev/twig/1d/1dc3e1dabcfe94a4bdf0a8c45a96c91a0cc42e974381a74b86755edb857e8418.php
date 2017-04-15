<?php

/* SyliusShopBundle:Product/Show:_associations.html.twig */
class __TwigTemplate_a5e2c65c3a72d5f37bbc58295f6d0cacee264043700fa7d5d0ded72d72ede2f3 extends Twig_Template
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
        $__internal_771040bae232f7e1ebadec40e5d06c65ffde2517ad5368eb031add20f45b04b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771040bae232f7e1ebadec40e5d06c65ffde2517ad5368eb031add20f45b04b3->enter($__internal_771040bae232f7e1ebadec40e5d06c65ffde2517ad5368eb031add20f45b04b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_associations.html.twig"));

        $__internal_1c9b9755d4eafe7040311f4caa557f94ada992e7c5c95b60fb43d70ae283d74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9b9755d4eafe7040311f4caa557f94ada992e7c5c95b60fb43d70ae283d74e->enter($__internal_1c9b9755d4eafe7040311f4caa557f94ada992e7c5c95b60fb43d70ae283d74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_associations.html.twig"));

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
        
        $__internal_771040bae232f7e1ebadec40e5d06c65ffde2517ad5368eb031add20f45b04b3->leave($__internal_771040bae232f7e1ebadec40e5d06c65ffde2517ad5368eb031add20f45b04b3_prof);

        
        $__internal_1c9b9755d4eafe7040311f4caa557f94ada992e7c5c95b60fb43d70ae283d74e->leave($__internal_1c9b9755d4eafe7040311f4caa557f94ada992e7c5c95b60fb43d70ae283d74e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_associations.html.twig";
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
", "SyliusShopBundle:Product/Show:_associations.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_associations.html.twig");
    }
}
