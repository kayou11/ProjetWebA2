<?php

/* SyliusAdminBundle:Order/History:_addresses.html.twig */
class __TwigTemplate_2eb6d1d083644f957dc3a7790aa4749e5dd3982c02ab794775ee20161951c32e extends Twig_Template
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
        $__internal_6416a4012b5c5a0bbbca9023f8b6eedda9d25ba34496dc1c0c2c2b2bead714de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6416a4012b5c5a0bbbca9023f8b6eedda9d25ba34496dc1c0c2c2b2bead714de->enter($__internal_6416a4012b5c5a0bbbca9023f8b6eedda9d25ba34496dc1c0c2c2b2bead714de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_addresses.html.twig"));

        $__internal_fdcff499e5f9482ca48cfd135683d157de06ada5a8d6196d47b67d7fc974f601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcff499e5f9482ca48cfd135683d157de06ada5a8d6196d47b67d7fc974f601->enter($__internal_fdcff499e5f9482ca48cfd135683d157de06ada5a8d6196d47b67d7fc974f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_addresses.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            ";
        // line 4
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "SyliusAdminBundle:Order/History:_addresses.html.twig", 4)->display(array_merge($context, array("type" => "shipping", "address" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shippingAddress", array()))));
        // line 5
        echo "        </div>
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "SyliusAdminBundle:Order/History:_addresses.html.twig", 7)->display(array_merge($context, array("type" => "billing", "address" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "billingAddress", array()))));
        // line 8
        echo "        </div>
    </div>
</div>
";
        
        $__internal_6416a4012b5c5a0bbbca9023f8b6eedda9d25ba34496dc1c0c2c2b2bead714de->leave($__internal_6416a4012b5c5a0bbbca9023f8b6eedda9d25ba34496dc1c0c2c2b2bead714de_prof);

        
        $__internal_fdcff499e5f9482ca48cfd135683d157de06ada5a8d6196d47b67d7fc974f601->leave($__internal_fdcff499e5f9482ca48cfd135683d157de06ada5a8d6196d47b67d7fc974f601_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  36 => 7,  32 => 5,  30 => 4,  25 => 1,);
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
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            {% include '@SyliusAdmin/Order/History/_address.html.twig' with {'type': 'shipping', address: order.shippingAddress} %}
        </div>
        <div class=\"column\">
            {% include '@SyliusAdmin/Order/History/_address.html.twig' with {'type': 'billing', address: order.billingAddress} %}
        </div>
    </div>
</div>
", "SyliusAdminBundle:Order/History:_addresses.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_addresses.html.twig");
    }
}
