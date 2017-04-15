<?php

/* SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig */
class __TwigTemplate_0d1249456b6b1fd90ad8bf3b5e127e754b82ee7b13f4803aa350000fad92071c extends Twig_Template
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
        $__internal_96507816ed03509ca14a6887059d3b11abf4f8de7363500426802b035c229cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96507816ed03509ca14a6887059d3b11abf4f8de7363500426802b035c229cb6->enter($__internal_96507816ed03509ca14a6887059d3b11abf4f8de7363500426802b035c229cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig"));

        $__internal_1c54526baac7d99cf22e317e55884c9fb216210645c9d6646bbd92b8f0bef9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c54526baac7d99cf22e317e55884c9fb216210645c9d6646bbd92b8f0bef9e8->enter($__internal_1c54526baac7d99cf22e317e55884c9fb216210645c9d6646bbd92b8f0bef9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gatewayFactories"] ?? $this->getContext($context, "gatewayFactories")));
        foreach ($context['_seq'] as $context["name"] => $context["gateway"]) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_payment_method_create", array("factory" => $context["name"])), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"item\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["gateway"]), "html", null, true);
            echo "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['gateway'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_96507816ed03509ca14a6887059d3b11abf4f8de7363500426802b035c229cb6->leave($__internal_96507816ed03509ca14a6887059d3b11abf4f8de7363500426802b035c229cb6_prof);

        
        $__internal_1c54526baac7d99cf22e317e55884c9fb216210645c9d6646bbd92b8f0bef9e8->leave($__internal_1c54526baac7d99cf22e317e55884c9fb216210645c9d6646bbd92b8f0bef9e8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for name, gateway in gatewayFactories %}
    <a href=\"{{ path('sylius_admin_payment_method_create', { 'factory': name }) }}\" id=\"{{ name }}\" class=\"item\">
        {{ gateway|trans }}
    </a>
{% endfor %}
", "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PaymentMethod/Gateways/paymentGateways.html.twig");
    }
}
