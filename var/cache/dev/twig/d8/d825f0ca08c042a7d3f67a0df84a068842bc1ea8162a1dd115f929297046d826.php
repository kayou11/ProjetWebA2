<?php

/* SyliusAdminBundle:Order/Show:_shipments.html.twig */
class __TwigTemplate_9be4241a3278debd563955c4c03842bd5dff2d30aa3282291863d16afc87a220 extends Twig_Template
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
        $__internal_094a759ce73120af4e92d1c90708496659b05b65b17a3cb31b1c5d57493b3976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094a759ce73120af4e92d1c90708496659b05b65b17a3cb31b1c5d57493b3976->enter($__internal_094a759ce73120af4e92d1c90708496659b05b65b17a3cb31b1c5d57493b3976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipments.html.twig"));

        $__internal_edbfcc9dfd8fadb38aa4688880aabea3764b18c3b01e5a22a8a4e04adae6e5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbfcc9dfd8fadb38aa4688880aabea3764b18c3b01e5a22a8a4e04adae6e5b8->enter($__internal_edbfcc9dfd8fadb38aa4688880aabea3764b18c3b01e5a22a8a4e04adae6e5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipments.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order/Show:_shipments.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    ";
        // line 4
        $this->loadTemplate((("@SyliusAdmin/Order/Label/ShippingState/" . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shippingState", array())) . ".html.twig"), "SyliusAdminBundle:Order/Show:_shipments.html.twig", 4)->display(array_merge($context, array("value" => ("sylius.ui." . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shippingState", array())), "attached" => true)));
        // line 5
        echo "    <h3 class=\"ui dividing header\" id=\"shipping-state\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipments"), "html", null, true);
        echo "</h3>
    <div class=\"ui relaxed divided list\" id=\"sylius-shipments\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shipments", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 8
            echo "            ";
            $this->loadTemplate("@SyliusAdmin/Order/Show/_shipment.html.twig", "SyliusAdminBundle:Order/Show:_shipments.html.twig", 8)->display($context);
            // line 9
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
</div>
";
        
        $__internal_094a759ce73120af4e92d1c90708496659b05b65b17a3cb31b1c5d57493b3976->leave($__internal_094a759ce73120af4e92d1c90708496659b05b65b17a3cb31b1c5d57493b3976_prof);

        
        $__internal_edbfcc9dfd8fadb38aa4688880aabea3764b18c3b01e5a22a8a4e04adae6e5b8->leave($__internal_edbfcc9dfd8fadb38aa4688880aabea3764b18c3b01e5a22a8a4e04adae6e5b8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_shipments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  59 => 9,  56 => 8,  39 => 7,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}

<div class=\"ui segment\">
    {% include '@SyliusAdmin/Order/Label/ShippingState/' ~ order.shippingState ~ '.html.twig' with { 'value': 'sylius.ui.' ~ order.shippingState, 'attached': true } %}
    <h3 class=\"ui dividing header\" id=\"shipping-state\">{{ 'sylius.ui.shipments'|trans }}</h3>
    <div class=\"ui relaxed divided list\" id=\"sylius-shipments\">
        {% for shipment in order.shipments %}
            {% include '@SyliusAdmin/Order/Show/_shipment.html.twig' %}
        {% endfor %}
    </div>
</div>
", "SyliusAdminBundle:Order/Show:_shipments.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_shipments.html.twig");
    }
}
