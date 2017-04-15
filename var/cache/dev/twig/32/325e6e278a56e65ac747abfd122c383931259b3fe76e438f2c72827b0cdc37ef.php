<?php

/* SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig */
class __TwigTemplate_7c0881e96fd08947851b624d2e632a47e2837ffbbaeafab249336ce508bb2c95 extends Twig_Template
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
        $__internal_d4f52e53b2b09457c2db2589e5c29f3ac859cd480e927f2c44b046b4ccd9407f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f52e53b2b09457c2db2589e5c29f3ac859cd480e927f2c44b046b4ccd9407f->enter($__internal_d4f52e53b2b09457c2db2589e5c29f3ac859cd480e927f2c44b046b4ccd9407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig"));

        $__internal_b0cee9841f01275d7783c6a6d10390588b48d9210c993804c0f96462388b4083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cee9841f01275d7783c6a6d10390588b48d9210c993804c0f96462388b4083->enter($__internal_b0cee9841f01275d7783c6a6d10390588b48d9210c993804c0f96462388b4083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig"));

        // line 1
        echo "<div class=\"ui top attached styled header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_default_address"), "html", null, true);
        echo "</div>
<div class=\"ui attached segment\" id=\"sylius-default-address\">
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            ";
        // line 5
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig", 5)->display(array_merge($context, array("address" => ($context["address"] ?? $this->getContext($context, "address")))));
        // line 6
        echo "        </div>
        <div class=\"right aligned column\">
            <div class=\"ui vertical icon labeled buttons\">
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["buttons"] ?? $this->getContext($context, "buttons")), "edit", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_update", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array())))), "method"), "html", null, true);
        echo "
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["buttons"] ?? $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_delete", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array()))), 1 => null, 2 => true, 3 => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array())), "method"), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>
<div class=\"ui divider\"></div>
";
        
        $__internal_d4f52e53b2b09457c2db2589e5c29f3ac859cd480e927f2c44b046b4ccd9407f->leave($__internal_d4f52e53b2b09457c2db2589e5c29f3ac859cd480e927f2c44b046b4ccd9407f_prof);

        
        $__internal_b0cee9841f01275d7783c6a6d10390588b48d9210c993804c0f96462388b4083->leave($__internal_b0cee9841f01275d7783c6a6d10390588b48d9210c993804c0f96462388b4083_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  40 => 9,  35 => 6,  33 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui top attached styled header\">{{ 'sylius.ui.your_default_address'|trans }}</div>
<div class=\"ui attached segment\" id=\"sylius-default-address\">
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
        </div>
        <div class=\"right aligned column\">
            <div class=\"ui vertical icon labeled buttons\">
                {{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}
                {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
            </div>
        </div>
    </div>
</div>
<div class=\"ui divider\"></div>
", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_defaultAddress.html.twig");
    }
}
