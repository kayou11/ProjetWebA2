<?php

/* SyliusShopBundle:Checkout/SelectPayment:_form.html.twig */
class __TwigTemplate_a9c517dfa67b66b816523151794b5093371f5881d46bac8065ec54d03360bfa1 extends Twig_Template
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
        $__internal_7411d28519916e44a2f56a1d4fe9ce80b3afd4d18e923b63d7024dd034a7db67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7411d28519916e44a2f56a1d4fe9ce80b3afd4d18e923b63d7024dd034a7db67->enter($__internal_7411d28519916e44a2f56a1d4fe9ce80b3afd4d18e923b63d7024dd034a7db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig"));

        $__internal_3811a5d8e0fc09ac28e0d669813bd38d18e147434e27578cbfcec2bcf91f3d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3811a5d8e0fc09ac28e0d669813bd38d18e147434e27578cbfcec2bcf91f3d23->enter($__internal_3811a5d8e0fc09ac28e0d669813bd38d18e147434e27578cbfcec2bcf91f3d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig"));

        // line 1
        echo "<div class=\"ui unmargined segments\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "payments", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["payment_form"]) {
            // line 3
            echo "        ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_payment.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig", 3)->display(array_merge($context, array("form" => $context["payment_form"])));
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
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        
        $__internal_7411d28519916e44a2f56a1d4fe9ce80b3afd4d18e923b63d7024dd034a7db67->leave($__internal_7411d28519916e44a2f56a1d4fe9ce80b3afd4d18e923b63d7024dd034a7db67_prof);

        
        $__internal_3811a5d8e0fc09ac28e0d669813bd38d18e147434e27578cbfcec2bcf91f3d23->leave($__internal_3811a5d8e0fc09ac28e0d669813bd38d18e147434e27578cbfcec2bcf91f3d23_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig";
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
    {% for payment_form in form.payments %}
        {% include '@SyliusShop/Checkout/SelectPayment/_payment.html.twig' with {'form': payment_form} %}
    {% else %}
        {% include '@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig' %}
    {% endfor %}
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_form.html.twig");
    }
}
