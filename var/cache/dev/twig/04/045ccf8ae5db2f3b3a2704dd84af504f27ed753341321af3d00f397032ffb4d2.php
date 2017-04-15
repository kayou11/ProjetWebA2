<?php

/* SyliusAdminBundle:Order/Show:_shipment.html.twig */
class __TwigTemplate_479e6c59975fec6e12ab521765a49c92e5f8a02f22725bf288bc92d7c97c2b30 extends Twig_Template
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
        $__internal_f1850598c22efa69fe809d68fb523fa661449e10dc490974057e3c29d0f63d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1850598c22efa69fe809d68fb523fa661449e10dc490974057e3c29d0f63d99->enter($__internal_f1850598c22efa69fe809d68fb523fa661449e10dc490974057e3c29d0f63d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

        $__internal_e3b13a01d651881ffc1c5ecc726b0edcb3e73bd9cd536bf91c35ba7b347ed4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b13a01d651881ffc1c5ecc726b0edcb3e73bd9cd536bf91c35ba7b347ed4f2->enter($__internal_e3b13a01d651881ffc1c5ecc726b0edcb3e73bd9cd536bf91c35ba7b347ed4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

        // line 1
        echo "<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["label"] ?? $this->getContext($context, "label")), "default", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui." . $this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "state", array())))), "method"), "html", null, true);
        echo "
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "method", array()), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "method", array()), "zone", array()), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 14
        if ($this->env->getExtension('SM\Extension\Twig\SMExtension')->can(($context["shipment"] ?? $this->getContext($context, "shipment")), "ship", "sylius_shipment")) {
            // line 15
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_shipment_ship", array("orderId" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "id" => $this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "id", array()))));
            echo "
    ";
        }
        // line 17
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "tracking", array()))) {
            // line 18
            echo "        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tracking_code")), "html", null, true);
            echo "</span>
            <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["shipment"] ?? $this->getContext($context, "shipment")), "tracking", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 23
        echo "</div>
";
        
        $__internal_f1850598c22efa69fe809d68fb523fa661449e10dc490974057e3c29d0f63d99->leave($__internal_f1850598c22efa69fe809d68fb523fa661449e10dc490974057e3c29d0f63d99_prof);

        
        $__internal_e3b13a01d651881ffc1c5ecc726b0edcb3e73bd9cd536bf91c35ba7b347ed4f2->leave($__internal_e3b13a01d651881ffc1c5ecc726b0edcb3e73bd9cd536bf91c35ba7b347ed4f2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_shipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  67 => 20,  63 => 19,  60 => 18,  57 => 17,  51 => 15,  49 => 14,  43 => 11,  37 => 8,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"item\">
    <div class=\"right floated content\">
        {{ label.default(('sylius.ui.'~shipment.state)|trans) }}
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ shipment.method }}
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>{{ shipment.method.zone }}
        </div>
    </div>
    {% if sm_can(shipment, 'ship', 'sylius_shipment') %}
        {{ render(path('sylius_admin_partial_shipment_ship', {'orderId': order.id, 'id': shipment.id})) }}
    {% endif %}
    {% if shipment.tracking is not empty %}
        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> {{ 'sylius.ui.tracking_code'|trans|upper }}</span>
            <p>{{ shipment.tracking }}</p>
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_shipment.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_shipment.html.twig");
    }
}
