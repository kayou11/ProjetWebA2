<?php

/* SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig */
class __TwigTemplate_fd7abda75a56ca86e9ea126a93532f7e5e61888511676161aabf9d6c185c71ab extends Twig_Template
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
        $__internal_ea87545a3da4227c3566feb8e1e9f2226a4d2830cf3cfb11b4dbb425e9bdb2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea87545a3da4227c3566feb8e1e9f2226a4d2830cf3cfb11b4dbb425e9bdb2a6->enter($__internal_ea87545a3da4227c3566feb8e1e9f2226a4d2830cf3cfb11b4dbb425e9bdb2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig"));

        $__internal_0af8dbf870d6bbf57ac8eabfdcda397c7584964a2848e1d89886789d0dc3fdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af8dbf870d6bbf57ac8eabfdcda397c7584964a2848e1d89886789d0dc3fdb8->enter($__internal_0af8dbf870d6bbf57ac8eabfdcda397c7584964a2848e1d89886789d0dc3fdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig", 1);
        // line 2
        echo "
<div class=\"title";
        // line 3
        if ((0 == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array()))) {
            echo " active";
        }
        echo "\">
    <i class=\"dropdown icon\"></i>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "channel", array()), "name", array()), "html", null, true);
        echo "
</div>
<div class=\"content";
        // line 7
        if ((0 == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array()))) {
            echo " active";
        }
        echo "\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        ";
        // line 13
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "channel", array()), "color", array()))) {
            // line 14
            echo "                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "channel", array()), "color", array()), "html", null, true);
            echo "\"></span>
                        ";
        }
        // line 16
        echo "                        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "channel", array()), "name", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.channel"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "ordersCount", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        ";
        // line 36
        echo $context["money"]->getformat($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "ordersValue", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "channel", array()), "baseCurrency", array()), "code", array()));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total_value_of_orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        ";
        // line 46
        echo $context["money"]->getformat($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "averageOrderValue", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["statistic"] ?? $this->getContext($context, "statistic")), "channel", array()), "baseCurrency", array()), "code", array()));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_ea87545a3da4227c3566feb8e1e9f2226a4d2830cf3cfb11b4dbb425e9bdb2a6->leave($__internal_ea87545a3da4227c3566feb8e1e9f2226a4d2830cf3cfb11b4dbb425e9bdb2a6_prof);

        
        $__internal_0af8dbf870d6bbf57ac8eabfdcda397c7584964a2848e1d89886789d0dc3fdb8->leave($__internal_0af8dbf870d6bbf57ac8eabfdcda397c7584964a2848e1d89886789d0dc3fdb8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  110 => 46,  100 => 39,  94 => 36,  84 => 29,  78 => 26,  68 => 19,  61 => 16,  55 => 14,  53 => 13,  42 => 7,  37 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}

<div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
    <i class=\"dropdown icon\"></i>
    {{ statistic.channel.name }}
</div>
<div class=\"content{% if 0 == loop.index0 %} active{% endif %}\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        {% if statistic.channel.color is not empty %}
                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ statistic.channel.color }}\"></span>
                        {% endif %}
                        {{ statistic.channel.name }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.channel'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        {{ statistic.ordersCount }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        {{ money.format(statistic.ordersValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.total_value_of_orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        {{ money.format(statistic.averageOrderValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.average_order_value'|trans }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Statistics/_perChannel.html.twig");
    }
}
