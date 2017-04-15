<?php

/* SyliusAdminBundle:Order/Show:_addresses.html.twig */
class __TwigTemplate_20a7a4089bc41529ae183e8c4ed04e6ac70e8c147492d43ded6d35b327476e40 extends Twig_Template
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
        $__internal_e818fb3398444ededb2b4f13ef1916dfa490d85c457d3cbf51e42d29add318c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e818fb3398444ededb2b4f13ef1916dfa490d85c457d3cbf51e42d29add318c7->enter($__internal_e818fb3398444ededb2b4f13ef1916dfa490d85c457d3cbf51e42d29add318c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_addresses.html.twig"));

        $__internal_dc446e28a026506011d1380b80d09e04858414db8c798e56f207e2e6a06f33b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc446e28a026506011d1380b80d09e04858414db8c798e56f207e2e6a06f33b1->enter($__internal_dc446e28a026506011d1380b80d09e04858414db8c798e56f207e2e6a06f33b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_addresses.html.twig"));

        // line 1
        echo "<h4 class=\"ui top attached styled header\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\" id=\"shipping-address\">
    ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Order/Show:_addresses.html.twig", 5)->display(array_merge($context, array("address" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shippingAddress", array()))));
        // line 6
        echo "</div>
<h4 class=\"ui attached styled header\">
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\" id=\"billing-address\">
    ";
        // line 11
        $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Order/Show:_addresses.html.twig", 11)->display(array_merge($context, array("address" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "billingAddress", array()))));
        // line 12
        echo "    <div class=\"ui segment\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_update", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\" class=\"ui icon labeled tiny fluid button\">
            <i class=\"pencil icon\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_e818fb3398444ededb2b4f13ef1916dfa490d85c457d3cbf51e42d29add318c7->leave($__internal_e818fb3398444ededb2b4f13ef1916dfa490d85c457d3cbf51e42d29add318c7_prof);

        
        $__internal_dc446e28a026506011d1380b80d09e04858414db8c798e56f207e2e6a06f33b1->leave($__internal_dc446e28a026506011d1380b80d09e04858414db8c798e56f207e2e6a06f33b1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 13,  48 => 12,  46 => 11,  40 => 8,  36 => 6,  34 => 5,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui top attached styled header\">
    {{ 'sylius.ui.shipping_address'|trans }}
</h4>
<div class=\"ui attached segment\" id=\"shipping-address\">
    {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.shippingAddress} %}
</div>
<h4 class=\"ui attached styled header\">
    {{ 'sylius.ui.billing_address'|trans }}
</h4>
<div class=\"ui attached segment\" id=\"billing-address\">
    {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.billingAddress} %}
    <div class=\"ui segment\">
        <a href=\"{{ path('sylius_admin_order_update', {'id': order.id}) }}\" class=\"ui icon labeled tiny fluid button\">
            <i class=\"pencil icon\"></i> {{ 'sylius.ui.edit'|trans }}
        </a>
    </div>
</div>
", "SyliusAdminBundle:Order/Show:_addresses.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_addresses.html.twig");
    }
}
