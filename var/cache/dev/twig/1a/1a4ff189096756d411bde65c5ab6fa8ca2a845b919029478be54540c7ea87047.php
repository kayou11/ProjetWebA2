<?php

/* SyliusShopBundle:Product/Show:_variants.html.twig */
class __TwigTemplate_8cc8177c108fe6e1bce668d34cb76bf7fdca6b70718b1b3df66264e55fde37d4 extends Twig_Template
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
        $__internal_0e439f97e8e24a30a2c7685032c2d2e7f8df122c1a8c839feb741db8676a5494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e439f97e8e24a30a2c7685032c2d2e7f8df122c1a8c839feb741db8676a5494->enter($__internal_0e439f97e8e24a30a2c7685032c2d2e7f8df122c1a8c839feb741db8676a5494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variants.html.twig"));

        $__internal_528aadd47b9919c2cd58f08d3548f9402109259480eed55fec92b8712ed0d527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528aadd47b9919c2cd58f08d3548f9402109259480eed55fec92b8712ed0d527->enter($__internal_528aadd47b9919c2cd58f08d3548f9402109259480eed55fec92b8712ed0d527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variants.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Show:_variants.html.twig", 1);
        // line 2
        echo "
<table class=\"ui single line small table\" id=\"sylius-product-variants\">
    <thead>
    <tr>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variant"), "html", null, true);
        echo "</th>
        <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 13
            echo "        <tr>
            <td>
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["variant"], "name", array()), "html", null, true);
            echo "
                ";
            // line 16
            if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "hasOptions", array(), "method")) {
                // line 17
                echo "                    <div class=\"ui horizontal divided list\">
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["variant"], "optionValues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                    // line 19
                    echo "                            <div class=\"item\">
                                ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["optionValue"], "value", array()), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </div>
                ";
            }
            // line 25
            echo "            </td>
            <td>";
            // line 26
            echo $context["money"]->getcalculatePrice($context["variant"]);
            echo "</td>
            <td class=\"right aligned\">
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cartItem", array()), "variant", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), 'widget', array("label" => false));
            echo "
            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
";
        
        $__internal_0e439f97e8e24a30a2c7685032c2d2e7f8df122c1a8c839feb741db8676a5494->leave($__internal_0e439f97e8e24a30a2c7685032c2d2e7f8df122c1a8c839feb741db8676a5494_prof);

        
        $__internal_528aadd47b9919c2cd58f08d3548f9402109259480eed55fec92b8712ed0d527->leave($__internal_528aadd47b9919c2cd58f08d3548f9402109259480eed55fec92b8712ed0d527_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_variants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  103 => 28,  98 => 26,  95 => 25,  91 => 23,  82 => 20,  79 => 19,  75 => 18,  72 => 17,  70 => 16,  66 => 15,  62 => 13,  45 => 12,  37 => 7,  33 => 6,  27 => 2,  25 => 1,);
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

<table class=\"ui single line small table\" id=\"sylius-product-variants\">
    <thead>
    <tr>
        <th>{{ 'sylius.ui.variant'|trans }}</th>
        <th>{{ 'sylius.ui.price'|trans }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {% for variant in product.variants %}
        <tr>
            <td>
                {{ variant.name }}
                {% if product.hasOptions() %}
                    <div class=\"ui horizontal divided list\">
                        {% for optionValue in variant.optionValues %}
                            <div class=\"item\">
                                {{ optionValue.value }}
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </td>
            <td>{{ money.calculatePrice(variant) }}</td>
            <td class=\"right aligned\">
                {{ form_widget(form.cartItem.variant[loop.index0], {'label': false}) }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "SyliusShopBundle:Product/Show:_variants.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variants.html.twig");
    }
}
