<?php

/* SyliusAdminBundle:Customer/Show/Statistics:index.html.twig */
class __TwigTemplate_e503f3f4ca56a0e5b1f3e31cc7c3426e6657f0f48e7d00a4fbda692e1075a0a6 extends Twig_Template
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
        $__internal_519e7cc4a274545764bc40f3a41904e22a9c95494bf47af45bc2a8d6b0e1203a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519e7cc4a274545764bc40f3a41904e22a9c95494bf47af45bc2a8d6b0e1203a->enter($__internal_519e7cc4a274545764bc40f3a41904e22a9c95494bf47af45bc2a8d6b0e1203a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig"));

        $__internal_bec20af66ba6c4c00505bc6ea4b9ddfad2f17a3edf1e0d5454eaff511c6cc14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec20af66ba6c4c00505bc6ea4b9ddfad2f17a3edf1e0d5454eaff511c6cc14c->enter($__internal_bec20af66ba6c4c00505bc6ea4b9ddfad2f17a3edf1e0d5454eaff511c6cc14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\" id=\"statistics\">
    ";
        // line 4
        if ( !twig_test_empty($this->getAttribute(($context["statistics"] ?? $this->getContext($context, "statistics")), "perChannelsStatistics", array()))) {
            // line 5
            echo "        <div class=\"ui accordion\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["statistics"] ?? $this->getContext($context, "statistics")), "perChannelsStatistics", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 7
                echo "                ";
                $this->loadTemplate("@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig", 7)->display($context);
                // line 8
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        } else {
            // line 11
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.this_customer_has_not_placed_any_orders_yet"), "html", null, true);
            echo "</h4>
    ";
        }
        // line 13
        echo "</div>
";
        
        $__internal_519e7cc4a274545764bc40f3a41904e22a9c95494bf47af45bc2a8d6b0e1203a->leave($__internal_519e7cc4a274545764bc40f3a41904e22a9c95494bf47af45bc2a8d6b0e1203a_prof);

        
        $__internal_bec20af66ba6c4c00505bc6ea4b9ddfad2f17a3edf1e0d5454eaff511c6cc14c->leave($__internal_bec20af66ba6c4c00505bc6ea4b9ddfad2f17a3edf1e0d5454eaff511c6cc14c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 11,  70 => 9,  56 => 8,  53 => 7,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\" id=\"statistics\">
    {% if statistics.perChannelsStatistics is not empty %}
        <div class=\"ui accordion\">
            {% for statistic in statistics.perChannelsStatistics %}
                {% include '@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig' %}
            {% endfor %}
        </div>
    {% else %}
        <h4>{{ 'sylius.ui.this_customer_has_not_placed_any_orders_yet'|trans }}</h4>
    {% endif %}
</div>
", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Statistics/index.html.twig");
    }
}
