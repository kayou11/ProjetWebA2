<?php

/* SyliusShopBundle:Product/Show:_variantsPricing.html.twig */
class __TwigTemplate_746bd36dc50aa94cfc29ee8168c688e00d66f25462a15efd0390839f763ac652 extends Twig_Template
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
        $__internal_a14b98f6554799807abebd15eb56918cbd83129c69b0df37869cb0378b46f49c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14b98f6554799807abebd15eb56918cbd83129c69b0df37869cb0378b46f49c->enter($__internal_a14b98f6554799807abebd15eb56918cbd83129c69b0df37869cb0378b46f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig"));

        $__internal_2440d5f0d28bd77a53f8fbc41e33aabac8e204079b45e4ec5cbb610ec7670843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2440d5f0d28bd77a53f8fbc41e33aabac8e204079b45e4ec5cbb610ec7670843->enter($__internal_2440d5f0d28bd77a53f8fbc41e33aabac8e204079b45e4ec5cbb610ec7670843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig", 1);
        // line 2
        echo "
<div id=\"sylius-variants-pricing\" data-unavailable-text=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.unavailable"), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pricing"] ?? $this->getContext($context, "pricing")));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 5
            echo "    <div ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["price"]);
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                echo "data-";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "=\"";
                if (($context["option"] == "value")) {
                    echo $context["money"]->getconvertAndFormat($context["value"]);
                } else {
                    echo twig_escape_filter($this->env, twig_replace_filter($context["value"], "\"", "'"), "html", null, true);
                }
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        
        $__internal_a14b98f6554799807abebd15eb56918cbd83129c69b0df37869cb0378b46f49c->leave($__internal_a14b98f6554799807abebd15eb56918cbd83129c69b0df37869cb0378b46f49c_prof);

        
        $__internal_2440d5f0d28bd77a53f8fbc41e33aabac8e204079b45e4ec5cbb610ec7670843->leave($__internal_2440d5f0d28bd77a53f8fbc41e33aabac8e204079b45e4ec5cbb610ec7670843_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_variantsPricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  38 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div id=\"sylius-variants-pricing\" data-unavailable-text=\"{{ 'sylius.ui.unavailable'|trans }}\">
{% for price in pricing %}
    <div {% for option, value in price %}data-{{ option }}=\"{% if option == 'value' %}{{ money.convertAndFormat(value) }}{% else %}{{ value|replace('\\\"', '\\'') }}{% endif %}\" {% endfor %}></div>
{% endfor %}
</div>
", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variantsPricing.html.twig");
    }
}
