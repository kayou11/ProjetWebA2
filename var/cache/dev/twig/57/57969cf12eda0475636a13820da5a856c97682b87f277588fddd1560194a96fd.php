<?php

/* SyliusAdminBundle:Email:shipmentConfirmation.html.twig */
class __TwigTemplate_1940a5093a7ebf053de0652cf52c002ededadb87a6a9ac992bb60ab5b70102d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aec3d39c256e8452bf714fe1db5c27b282fbc7c9720e8f9de0d9239f65e2af54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec3d39c256e8452bf714fe1db5c27b282fbc7c9720e8f9de0d9239f65e2af54->enter($__internal_aec3d39c256e8452bf714fe1db5c27b282fbc7c9720e8f9de0d9239f65e2af54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Email:shipmentConfirmation.html.twig"));

        $__internal_6fc12cfde909cdc66a70f32fb55cd4a32bbe9f58e0eaf20a96afd4f68540697c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc12cfde909cdc66a70f32fb55cd4a32bbe9f58e0eaf20a96afd4f68540697c->enter($__internal_6fc12cfde909cdc66a70f32fb55cd4a32bbe9f58e0eaf20a96afd4f68540697c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Email:shipmentConfirmation.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_aec3d39c256e8452bf714fe1db5c27b282fbc7c9720e8f9de0d9239f65e2af54->leave($__internal_aec3d39c256e8452bf714fe1db5c27b282fbc7c9720e8f9de0d9239f65e2af54_prof);

        
        $__internal_6fc12cfde909cdc66a70f32fb55cd4a32bbe9f58e0eaf20a96afd4f68540697c->leave($__internal_6fc12cfde909cdc66a70f32fb55cd4a32bbe9f58e0eaf20a96afd4f68540697c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5794a2a857daca1296792c331afb3009270e539d211b823bc9498a7147416e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5794a2a857daca1296792c331afb3009270e539d211b823bc9498a7147416e81->enter($__internal_5794a2a857daca1296792c331afb3009270e539d211b823bc9498a7147416e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_429eadf43ef4adbc3eebed1e0a658c4a094054399f11db957a57e7bfb815930b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429eadf43ef4adbc3eebed1e0a658c4a094054399f11db957a57e7bfb815930b->enter($__internal_429eadf43ef4adbc3eebed1e0a658c4a094054399f11db957a57e7bfb815930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Shipment confirmation
";
        
        $__internal_429eadf43ef4adbc3eebed1e0a658c4a094054399f11db957a57e7bfb815930b->leave($__internal_429eadf43ef4adbc3eebed1e0a658c4a094054399f11db957a57e7bfb815930b_prof);

        
        $__internal_5794a2a857daca1296792c331afb3009270e539d211b823bc9498a7147416e81->leave($__internal_5794a2a857daca1296792c331afb3009270e539d211b823bc9498a7147416e81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d5cdabab5638c614aefca5cb4e58a0665f92247875914dda64decc25d8499bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5cdabab5638c614aefca5cb4e58a0665f92247875914dda64decc25d8499bd->enter($__internal_1d5cdabab5638c614aefca5cb4e58a0665f92247875914dda64decc25d8499bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e23d02aba99e1290758c4051ef12bb41e83b419b505ce9ff071f40a3c9d02267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23d02aba99e1290758c4051ef12bb41e83b419b505ce9ff071f40a3c9d02267->enter($__internal_e23d02aba99e1290758c4051ef12bb41e83b419b505ce9ff071f40a3c9d02267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        Your order with number ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array()), "html", null, true);
        echo " has been sent using ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "method", array()), "html", null, true);
        echo ".
        <br/>
        You can check it's location with the \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "tracking", array()), "html", null, true);
        echo "\" tracking code.
        <br/><br/>
        Thank you for a successful transaction.
    ";
        
        $__internal_e23d02aba99e1290758c4051ef12bb41e83b419b505ce9ff071f40a3c9d02267->leave($__internal_e23d02aba99e1290758c4051ef12bb41e83b419b505ce9ff071f40a3c9d02267_prof);

        
        $__internal_1d5cdabab5638c614aefca5cb4e58a0665f92247875914dda64decc25d8499bd->leave($__internal_1d5cdabab5638c614aefca5cb4e58a0665f92247875914dda64decc25d8499bd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Email:shipmentConfirmation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 9,  73 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Shipment confirmation
{% endblock %}

{% block body %}
    {% autoescape %}
        Your order with number {{ order.number }} has been sent using {{ shipment.method }}.
        <br/>
        You can check it's location with the \"{{ shipment.tracking }}\" tracking code.
        <br/><br/>
        Thank you for a successful transaction.
    {% endautoescape %}
{% endblock %}
", "SyliusAdminBundle:Email:shipmentConfirmation.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Email/shipmentConfirmation.html.twig");
    }
}
