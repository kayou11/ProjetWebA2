<?php

/* SyliusAdminBundle:Dashboard:_statistics.html.twig */
class __TwigTemplate_6d5c348ffb474ed65ea31e9219dad1e584260fdc782e306f910edfa2a8da493e extends Twig_Template
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
        $__internal_99e6e7e88a13b75fe33467c8a745c7321fe498ceac3167cec59df49a20ec97a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e6e7e88a13b75fe33467c8a745c7321fe498ceac3167cec59df49a20ec97a3->enter($__internal_99e6e7e88a13b75fe33467c8a745c7321fe498ceac3167cec59df49a20ec97a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_statistics.html.twig"));

        $__internal_d1465f0252662b2090a77402446d56298b6cb467ea60dcda143d8c572fe2c58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1465f0252662b2090a77402446d56298b6cb467ea60dcda143d8c572fe2c58e->enter($__internal_d1465f0252662b2090a77402446d56298b6cb467ea60dcda143d8c572fe2c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_statistics.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Dashboard:_statistics.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <div class=\"ui center aligned four column stackable divided grid\">
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"total-sales\" class=\"value\">
                    ";
        // line 8
        echo $context["money"]->getformat($this->getAttribute(($context["statistics"] ?? $this->getContext($context, "statistics")), "totalSales", array()), $this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sales"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-orders\" class=\"value\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistics"] ?? $this->getContext($context, "statistics")), "numberOfNewOrders", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-customers\" class=\"value\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistics"] ?? $this->getContext($context, "statistics")), "numberOfNewCustomers", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"average-order-value\" class=\"value\">
                    ";
        // line 38
        echo $context["money"]->getformat($this->getAttribute(($context["statistics"] ?? $this->getContext($context, "statistics")), "averageOrderValue", array()), $this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_99e6e7e88a13b75fe33467c8a745c7321fe498ceac3167cec59df49a20ec97a3->leave($__internal_99e6e7e88a13b75fe33467c8a745c7321fe498ceac3167cec59df49a20ec97a3_prof);

        
        $__internal_d1465f0252662b2090a77402446d56298b6cb467ea60dcda143d8c572fe2c58e->leave($__internal_d1465f0252662b2090a77402446d56298b6cb467ea60dcda143d8c572fe2c58e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 41,  83 => 38,  73 => 31,  67 => 28,  57 => 21,  51 => 18,  41 => 11,  35 => 8,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <div class=\"ui center aligned four column stackable divided grid\">
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"total-sales\" class=\"value\">
                    {{ money.format(statistics.totalSales, channel.baseCurrency.code) }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.sales'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-orders\" class=\"value\">
                    {{ statistics.numberOfNewOrders }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.orders'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-customers\" class=\"value\">
                    {{ statistics.numberOfNewCustomers }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.customers'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"average-order-value\" class=\"value\">
                    {{ money.format(statistics.averageOrderValue, channel.baseCurrency.code) }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.average_order_value'|trans }}
                </div>
            </div>
        </div>
    </div>
</div>
", "SyliusAdminBundle:Dashboard:_statistics.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_statistics.html.twig");
    }
}
