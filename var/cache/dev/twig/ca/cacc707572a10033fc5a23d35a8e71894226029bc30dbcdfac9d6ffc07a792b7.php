<?php

/* SyliusShopBundle:Email:orderConfirmation.html.twig */
class __TwigTemplate_052c6bcc0c484fb62b79d081c104552deb8131ed223a75bf2fe24aa8b9734acc extends Twig_Template
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
        $__internal_cdbea86ec888039302dcd083de207fc3fcfccd02085133d76001ceffec991c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbea86ec888039302dcd083de207fc3fcfccd02085133d76001ceffec991c5e->enter($__internal_cdbea86ec888039302dcd083de207fc3fcfccd02085133d76001ceffec991c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:orderConfirmation.html.twig"));

        $__internal_973624e1f0320e1165c7c4cba05ec26dab8dcca24ebd8e7078ef590ae6c017b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973624e1f0320e1165c7c4cba05ec26dab8dcca24ebd8e7078ef590ae6c017b2->enter($__internal_973624e1f0320e1165c7c4cba05ec26dab8dcca24ebd8e7078ef590ae6c017b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:orderConfirmation.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cdbea86ec888039302dcd083de207fc3fcfccd02085133d76001ceffec991c5e->leave($__internal_cdbea86ec888039302dcd083de207fc3fcfccd02085133d76001ceffec991c5e_prof);

        
        $__internal_973624e1f0320e1165c7c4cba05ec26dab8dcca24ebd8e7078ef590ae6c017b2->leave($__internal_973624e1f0320e1165c7c4cba05ec26dab8dcca24ebd8e7078ef590ae6c017b2_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6be5de422ccaaad3b2ea00ea0d6f23a21b22cbab9a462b2af972e6cfad58c637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be5de422ccaaad3b2ea00ea0d6f23a21b22cbab9a462b2af972e6cfad58c637->enter($__internal_6be5de422ccaaad3b2ea00ea0d6f23a21b22cbab9a462b2af972e6cfad58c637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_979660541995d044ccdfa5f008f4436f215709583e2372f8b99e65c34e02ee6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979660541995d044ccdfa5f008f4436f215709583e2372f8b99e65c34e02ee6a->enter($__internal_979660541995d044ccdfa5f008f4436f215709583e2372f8b99e65c34e02ee6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Order confirmation
";
        
        $__internal_979660541995d044ccdfa5f008f4436f215709583e2372f8b99e65c34e02ee6a->leave($__internal_979660541995d044ccdfa5f008f4436f215709583e2372f8b99e65c34e02ee6a_prof);

        
        $__internal_6be5de422ccaaad3b2ea00ea0d6f23a21b22cbab9a462b2af972e6cfad58c637->leave($__internal_6be5de422ccaaad3b2ea00ea0d6f23a21b22cbab9a462b2af972e6cfad58c637_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63d3bd2a6850a4a8147cefe100e60d57b561298c65e177671d3668882a741fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d3bd2a6850a4a8147cefe100e60d57b561298c65e177671d3668882a741fcd->enter($__internal_63d3bd2a6850a4a8147cefe100e60d57b561298c65e177671d3668882a741fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c0fc480ee4b3663cf4bff66873d3f2405ce5c4bcd5fccb9ea76ad06dfd05ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0fc480ee4b3663cf4bff66873d3f2405ce5c4bcd5fccb9ea76ad06dfd05ebf->enter($__internal_5c0fc480ee4b3663cf4bff66873d3f2405ce5c4bcd5fccb9ea76ad06dfd05ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context["url"] = (( !(null === $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "channel", array()), "hostname", array()))) ? ((("http://" . $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "channel", array()), "hostname", array())) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tokenValue", array()), "_locale" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "localeCode", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_order_show", array("tokenValue" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tokenValue", array()), "_locale" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "localeCode", array())))));
        // line 7
        echo "    ";
        // line 8
        echo "        Your order no. ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array()), "html", null, true);
        echo " has been successfully placed.
        <br/>
        To view order or change payment method - please visit ";
        // line 10
        echo ($context["url"] ?? $this->getContext($context, "url"));
        echo "
        <br/><br/>
        Thank you for shopping at our store!
    ";
        
        $__internal_5c0fc480ee4b3663cf4bff66873d3f2405ce5c4bcd5fccb9ea76ad06dfd05ebf->leave($__internal_5c0fc480ee4b3663cf4bff66873d3f2405ce5c4bcd5fccb9ea76ad06dfd05ebf_prof);

        
        $__internal_63d3bd2a6850a4a8147cefe100e60d57b561298c65e177671d3668882a741fcd->leave($__internal_63d3bd2a6850a4a8147cefe100e60d57b561298c65e177671d3668882a741fcd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:orderConfirmation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  76 => 8,  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
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
    Order confirmation
{% endblock %}

{% block body %}
    {% set url = order.channel.hostname is not null ? 'http://' ~ order.channel.hostname ~ path('sylius_shop_order_show', {'tokenValue': order.tokenValue, '_locale': order.localeCode}) : url('sylius_shop_order_show', {'tokenValue': order.tokenValue, '_locale': order.localeCode}) %}
    {% autoescape %}
        Your order no. {{ order.number }} has been successfully placed.
        <br/>
        To view order or change payment method - please visit {{ url|raw }}
        <br/><br/>
        Thank you for shopping at our store!
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:orderConfirmation.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/orderConfirmation.html.twig");
    }
}
