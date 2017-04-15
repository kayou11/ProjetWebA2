<?php

/* SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig */
class __TwigTemplate_f50635d710c59417eee66aa8456ddf252e781be166f205f6426ff00a2d930d4a extends Twig_Template
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
        $__internal_390141ee0eab90c90c7b1c85df02a0681c2d8fedae6df0ac56edd39f277344ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390141ee0eab90c90c7b1c85df02a0681c2d8fedae6df0ac56edd39f277344ba->enter($__internal_390141ee0eab90c90c7b1c85df02a0681c2d8fedae6df0ac56edd39f277344ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig"));

        $__internal_6f7282ee8dc1206af635091d71c34814887c8fdfc0bc0a798934d68cc46907fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7282ee8dc1206af635091d71c34814887c8fdfc0bc0a798934d68cc46907fa->enter($__internal_6f7282ee8dc1206af635091d71c34814887c8fdfc0bc0a798934d68cc46907fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipment"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index", array()), "html", null, true);
        echo "</div>
    <div class=\"ui fluid stackable items\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", array()), 'errors');
        echo "

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice_form"]) {
            // line 7
            echo "            ";
            $context["fee"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", array()), "vars", array()), "shipping_costs", array()), $this->getAttribute($this->getAttribute($context["choice_form"], "vars", array()), "value", array()), array(), "array");
            // line 8
            echo "            ";
            $context["method"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", array()), "vars", array()), "choices", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "data", array());
            // line 9
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_choice.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig", 9)->display(array_merge($context, array("form" => $context["choice_form"], "method" => ($context["method"] ?? $this->getContext($context, "method")), "fee" => ($context["fee"] ?? $this->getContext($context, "fee")))));
            // line 10
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig", 11)->display($context);
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
</div>
";
        
        $__internal_390141ee0eab90c90c7b1c85df02a0681c2d8fedae6df0ac56edd39f277344ba->leave($__internal_390141ee0eab90c90c7b1c85df02a0681c2d8fedae6df0ac56edd39f277344ba_prof);

        
        $__internal_6f7282ee8dc1206af635091d71c34814887c8fdfc0bc0a798934d68cc46907fa->leave($__internal_6f7282ee8dc1206af635091d71c34814887c8fdfc0bc0a798934d68cc46907fa_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  83 => 12,  80 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  40 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <div class=\"ui dividing header\">{{ 'sylius.ui.shipment'|trans }} #{{ loop.index }}</div>
    <div class=\"ui fluid stackable items\">
        {{ form_errors(form.method) }}

        {% for choice_form in form.method %}
            {% set fee = form.method.vars.shipping_costs[choice_form.vars.value] %}
            {% set method = form.method.vars.choices[loop.index0].data %}
            {% include '@SyliusShop/Checkout/SelectShipping/_choice.html.twig' with {'form': choice_form, 'method': method, 'fee': fee} %}
        {% else %}
            {% include '@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig' %}
        {% endfor %}
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_shipment.html.twig");
    }
}
