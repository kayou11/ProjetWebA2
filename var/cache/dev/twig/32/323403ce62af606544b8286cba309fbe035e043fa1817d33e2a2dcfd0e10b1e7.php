<?php

/* SyliusShopBundle:Checkout/SelectShipping:_form.html.twig */
class __TwigTemplate_176bb2ce91595a9d0ce0770118afd5c51609dcae2f2cd888728420b53ad537f5 extends Twig_Template
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
        $__internal_2e11a1822e3066b8541a8947cf265f2bb832bb460550b240dc3efd4c2a5dc39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e11a1822e3066b8541a8947cf265f2bb832bb460550b240dc3efd4c2a5dc39e->enter($__internal_2e11a1822e3066b8541a8947cf265f2bb832bb460550b240dc3efd4c2a5dc39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig"));

        $__internal_b5310767952bc3244e9c81277e1fd4c586f73a1d96f9f488b35e8b221597fa2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5310767952bc3244e9c81277e1fd4c586f73a1d96f9f488b35e8b221597fa2f->enter($__internal_b5310767952bc3244e9c81277e1fd4c586f73a1d96f9f488b35e8b221597fa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig"));

        // line 1
        echo "<div class=\"ui unmargined segments\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shipments", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 3
            echo "        ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_shipment.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig", 3)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shipments", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"))));
            // line 4
            echo "    ";
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
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        
        $__internal_2e11a1822e3066b8541a8947cf265f2bb832bb460550b240dc3efd4c2a5dc39e->leave($__internal_2e11a1822e3066b8541a8947cf265f2bb832bb460550b240dc3efd4c2a5dc39e_prof);

        
        $__internal_b5310767952bc3244e9c81277e1fd4c586f73a1d96f9f488b35e8b221597fa2f->leave($__internal_b5310767952bc3244e9c81277e1fd4c586f73a1d96f9f488b35e8b221597fa2f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  65 => 6,  62 => 5,  49 => 4,  46 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui unmargined segments\">
    {% for shipment in order.shipments %}
        {% include '@SyliusShop/Checkout/SelectShipping/_shipment.html.twig' with {'form': form.shipments[loop.index0]} %}
    {% else %}
        {% include '@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig' %}
    {% endfor %}
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_form.html.twig");
    }
}
