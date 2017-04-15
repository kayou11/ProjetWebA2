<?php

/* SyliusAdminBundle:Order/Show:_payments.html.twig */
class __TwigTemplate_cb9761b06a48014cb979e4b74e5505ca909b9a8e7d07e0ba06060b51b52b43f5 extends Twig_Template
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
        $__internal_385c96c5517d6d005a36e0424d02f73af91db2466eee836def3c1c915d34b1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385c96c5517d6d005a36e0424d02f73af91db2466eee836def3c1c915d34b1ff->enter($__internal_385c96c5517d6d005a36e0424d02f73af91db2466eee836def3c1c915d34b1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_payments.html.twig"));

        $__internal_d13f00536c8696c591a00a1dfc98fc8d867f30de00641836211f4cc8430e770e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13f00536c8696c591a00a1dfc98fc8d867f30de00641836211f4cc8430e770e->enter($__internal_d13f00536c8696c591a00a1dfc98fc8d867f30de00641836211f4cc8430e770e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_payments.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order/Show:_payments.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\" id=\"payment-state\">
    ";
        // line 4
        $this->loadTemplate((("@SyliusAdmin/Order/Label/PaymentState/" . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentState", array())) . ".html.twig"), "SyliusAdminBundle:Order/Show:_payments.html.twig", 4)->display(array_merge($context, array("value" => ("sylius.ui." . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentState", array())), "attached" => true)));
        // line 5
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.payments"), "html", null, true);
        echo "</h3>
    <div class=\"ui relaxed divided list\" id=\"sylius-payments\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "payments", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 8
            echo "            ";
            $this->loadTemplate("@SyliusAdmin/Order/Show/_payment.html.twig", "SyliusAdminBundle:Order/Show:_payments.html.twig", 8)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
</div>
";
        
        $__internal_385c96c5517d6d005a36e0424d02f73af91db2466eee836def3c1c915d34b1ff->leave($__internal_385c96c5517d6d005a36e0424d02f73af91db2466eee836def3c1c915d34b1ff_prof);

        
        $__internal_d13f00536c8696c591a00a1dfc98fc8d867f30de00641836211f4cc8430e770e->leave($__internal_d13f00536c8696c591a00a1dfc98fc8d867f30de00641836211f4cc8430e770e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_payments.html.twig";
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

<div class=\"ui segment\" id=\"payment-state\">
    {% include '@SyliusAdmin/Order/Label/PaymentState/' ~ order.paymentState ~ '.html.twig' with { 'value': 'sylius.ui.' ~ order.paymentState, 'attached': true } %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.payments'|trans }}</h3>
    <div class=\"ui relaxed divided list\" id=\"sylius-payments\">
        {% for payment in order.payments %}
            {% include '@SyliusAdmin/Order/Show/_payment.html.twig' %}
        {% endfor %}
    </div>
</div>
", "SyliusAdminBundle:Order/Show:_payments.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_payments.html.twig");
    }
}
