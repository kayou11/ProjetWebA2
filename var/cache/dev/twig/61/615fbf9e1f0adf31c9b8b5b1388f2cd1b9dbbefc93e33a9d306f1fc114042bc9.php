<?php

/* @SyliusShop/Product/Show/_variants.html.twig */
class __TwigTemplate_a32657ba73a9f805a0ff186caf37d95e299a5c407072a730b62602cc499673e0 extends Twig_Template
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
        $__internal_2a5fbdb11aa054d5d244db5472a495f2bb12f14572feecb4b9ef8bce878e8d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5fbdb11aa054d5d244db5472a495f2bb12f14572feecb4b9ef8bce878e8d1b->enter($__internal_2a5fbdb11aa054d5d244db5472a495f2bb12f14572feecb4b9ef8bce878e8d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        $__internal_5bfa22c7d9aaf4ab8c767e450819032b7ad5d3117d43543439338bf628657c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfa22c7d9aaf4ab8c767e450819032b7ad5d3117d43543439338bf628657c4c->enter($__internal_5bfa22c7d9aaf4ab8c767e450819032b7ad5d3117d43543439338bf628657c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_variants.html.twig", 1);
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
        
        $__internal_2a5fbdb11aa054d5d244db5472a495f2bb12f14572feecb4b9ef8bce878e8d1b->leave($__internal_2a5fbdb11aa054d5d244db5472a495f2bb12f14572feecb4b9ef8bce878e8d1b_prof);

        
        $__internal_5bfa22c7d9aaf4ab8c767e450819032b7ad5d3117d43543439338bf628657c4c->leave($__internal_5bfa22c7d9aaf4ab8c767e450819032b7ad5d3117d43543439338bf628657c4c_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_variants.html.twig";
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
", "@SyliusShop/Product/Show/_variants.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variants.html.twig");
    }
}
