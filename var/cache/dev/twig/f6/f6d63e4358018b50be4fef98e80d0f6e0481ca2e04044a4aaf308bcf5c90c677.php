<?php

/* SyliusAdminBundle:Dashboard:_orders.html.twig */
class __TwigTemplate_f7523859dfa8a2a7b9f43e8c924970bcd4452ab7e5e203f498abbff040c48e61 extends Twig_Template
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
        $__internal_7bd41583b59a163f2dfdc95872dcbb19e6747864eff566c0fe9e68f4b2c9d930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd41583b59a163f2dfdc95872dcbb19e6747864eff566c0fe9e68f4b2c9d930->enter($__internal_7bd41583b59a163f2dfdc95872dcbb19e6747864eff566c0fe9e68f4b2c9d930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_orders.html.twig"));

        $__internal_2d3e68ae8286cedf770f7dcfac766d3f576f7d9aa87c90196a55d7b8cb15481e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3e68ae8286cedf770f7dcfac766d3f576f7d9aa87c90196a55d7b8cb15481e->enter($__internal_2d3e68ae8286cedf770f7dcfac766d3f576f7d9aa87c90196a55d7b8cb15481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_orders.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "SyliusAdminBundle:Dashboard:_orders.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "SyliusAdminBundle:Dashboard:_orders.html.twig", 2);
        // line 3
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Dashboard:_orders.html.twig", 3);
        // line 4
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new_orders"), "html", null, true);
        echo "</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, ($context["orders"] ?? $this->getContext($context, "orders"))) > 0)) {
            // line 9
            echo "        <table class=\"ui stackable table\" id=\"orders\">
            <thead>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
            echo "</th>
                <th>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.items"), "html", null, true);
            echo "</th>
                <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
            echo "</th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 18
                echo "                <tr>
                    <td>
                        <strong>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "customer", array()), "fullName", array()), "html", null, true);
                echo "</strong><br>
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "customer", array()), "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalQuantity", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 27
                echo $context["money"]->getformat($this->getAttribute($context["order"], "total", array()), $this->getAttribute($context["order"], "currencyCode", array()));
                echo "
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 31
                echo $context["buttons"]->getshow($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => $this->getAttribute($context["order"], "id", array()))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 39
            echo "        ";
            echo $context["messages"]->getinfo("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 41
        echo "</div>

";
        
        $__internal_7bd41583b59a163f2dfdc95872dcbb19e6747864eff566c0fe9e68f4b2c9d930->leave($__internal_7bd41583b59a163f2dfdc95872dcbb19e6747864eff566c0fe9e68f4b2c9d930_prof);

        
        $__internal_2d3e68ae8286cedf770f7dcfac766d3f576f7d9aa87c90196a55d7b8cb15481e->leave($__internal_2d3e68ae8286cedf770f7dcfac766d3f576f7d9aa87c90196a55d7b8cb15481e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  108 => 39,  103 => 36,  92 => 31,  85 => 27,  79 => 24,  73 => 21,  69 => 20,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  46 => 11,  42 => 9,  40 => 8,  35 => 6,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}
{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.new_orders'|trans }}</h3>

    {% if orders|length > 0 %}
        <table class=\"ui stackable table\" id=\"orders\">
            <thead>
                <th>{{ 'sylius.ui.order'|trans }}</th>
                <th>{{ 'sylius.ui.items'|trans }}</th>
                <th>{{ 'sylius.ui.total'|trans }}</th>
                <th></th>
            </thead>
            <tbody>
            {% for order in orders %}
                <tr>
                    <td>
                        <strong>{{ order.customer.fullName }}</strong><br>
                        {{ order.customer.email }}
                    </td>
                    <td>
                        {{ order.totalQuantity }}
                    </td>
                    <td>
                        {{ money.format(order.total, order.currencyCode) }}
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            {{ buttons.show(path('sylius_admin_order_show', {'id': order.id})) }}
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
</div>

", "SyliusAdminBundle:Dashboard:_orders.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_orders.html.twig");
    }
}
