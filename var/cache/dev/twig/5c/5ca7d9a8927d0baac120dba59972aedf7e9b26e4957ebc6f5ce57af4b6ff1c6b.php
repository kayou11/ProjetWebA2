<?php

/* SyliusShopBundle:Common/Order:_shipments.html.twig */
class __TwigTemplate_045d6f147837f7967bbaf764a90067b75dc78c8161545922bbf96f19d84da602 extends Twig_Template
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
        $__internal_0cd9922abfcfe0af80960bba091ae68cbd5967ed8c8be28267aaa9d311613c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd9922abfcfe0af80960bba091ae68cbd5967ed8c8be28267aaa9d311613c70->enter($__internal_0cd9922abfcfe0af80960bba091ae68cbd5967ed8c8be28267aaa9d311613c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_shipments.html.twig"));

        $__internal_440f9790aa4c18ee9e3ec627b48f829b657865ceea1f0c33475d6314b124f9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440f9790aa4c18ee9e3ec627b48f829b657865ceea1f0c33475d6314b124f9b0->enter($__internal_440f9790aa4c18ee9e3ec627b48f829b657865ceea1f0c33475d6314b124f9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_shipments.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shipments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 2
            echo "    <div class=\"ui large icon message\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-shipping-method\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipment"], "method", array()), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0cd9922abfcfe0af80960bba091ae68cbd5967ed8c8be28267aaa9d311613c70->leave($__internal_0cd9922abfcfe0af80960bba091ae68cbd5967ed8c8be28267aaa9d311613c70_prof);

        
        $__internal_440f9790aa4c18ee9e3ec627b48f829b657865ceea1f0c33475d6314b124f9b0->leave($__internal_440f9790aa4c18ee9e3ec627b48f829b657865ceea1f0c33475d6314b124f9b0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_shipments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for shipment in order.shipments %}
    <div class=\"ui large icon message\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-shipping-method\">
                {{ shipment.method }}
            </div>
        </div>
    </div>
{% endfor %}
", "SyliusShopBundle:Common/Order:_shipments.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_shipments.html.twig");
    }
}
