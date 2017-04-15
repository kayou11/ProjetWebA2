<?php

/* SyliusShopBundle:Common/Order:_payments.html.twig */
class __TwigTemplate_dbc1806cacca1398af4a888816c088321850b6244fc9a11e544d94ac24d6440e extends Twig_Template
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
        $__internal_1d9993afc4a903d9775313678f242f2e2c28f466408c566bd04d92fe9551f83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9993afc4a903d9775313678f242f2e2c28f466408c566bd04d92fe9551f83d->enter($__internal_1d9993afc4a903d9775313678f242f2e2c28f466408c566bd04d92fe9551f83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_payments.html.twig"));

        $__internal_949aac918af6162402d66ff500e62421d39a690617b2764a7a5f2a9594384f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949aac918af6162402d66ff500e62421d39a690617b2764a7a5f2a9594384f1f->enter($__internal_949aac918af6162402d66ff500e62421d39a690617b2764a7a5f2a9594384f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_payments.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order:_payments.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "payments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 4
            echo "<div class=\"ui large icon message\">
    <i class=\"payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\" id=\"sylius-payment-method\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "method", array()), "html", null, true);
            echo "
        </div>
        <p>";
            // line 10
            echo $context["money"]->getformat($this->getAttribute($context["payment"], "amount", array()), $this->getAttribute($context["payment"], "currencyCode", array()));
            echo "</p>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1d9993afc4a903d9775313678f242f2e2c28f466408c566bd04d92fe9551f83d->leave($__internal_1d9993afc4a903d9775313678f242f2e2c28f466408c566bd04d92fe9551f83d_prof);

        
        $__internal_949aac918af6162402d66ff500e62421d39a690617b2764a7a5f2a9594384f1f->leave($__internal_949aac918af6162402d66ff500e62421d39a690617b2764a7a5f2a9594384f1f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 8,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
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

{% for payment in order.payments %}
<div class=\"ui large icon message\">
    <i class=\"payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\" id=\"sylius-payment-method\">
            {{ payment.method }}
        </div>
        <p>{{ money.format(payment.amount, payment.currencyCode) }}</p>
    </div>
</div>
{% endfor %}
", "SyliusShopBundle:Common/Order:_payments.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_payments.html.twig");
    }
}
