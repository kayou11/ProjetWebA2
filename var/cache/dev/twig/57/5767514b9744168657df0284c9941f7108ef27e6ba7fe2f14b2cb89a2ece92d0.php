<?php

/* SyliusAdminBundle:Order/Show:_header.html.twig */
class __TwigTemplate_ae44d79db2c64c292455aedf02da1695037e244c7b6de3613eb5d013cb79fe2a extends Twig_Template
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
        $__internal_8a2db454ed6b40b3e7d62b69c1cd40946f525acd925c78458e30013781e67862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2db454ed6b40b3e7d62b69c1cd40946f525acd925c78458e30013781e67862->enter($__internal_8a2db454ed6b40b3e7d62b69c1cd40946f525acd925c78458e30013781e67862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_header.html.twig"));

        $__internal_7af83639e2400047732063198bb191167f54746856830527cc85701939fd33fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af83639e2400047732063198bb191167f54746856830527cc85701939fd33fa->enter($__internal_7af83639e2400047732063198bb191167f54746856830527cc85701939fd33fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_header.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Order/Show:_header.html.twig", 1);
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array()), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 10
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "checkoutCompletedAt", array()));
        echo "
                </div>
                <div class=\"item\" id=\"sylius-order-state\">
                    ";
        // line 13
        $this->loadTemplate(array(0 => ((("@SyliusAdmin/Order/Label/State" . "/") . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "state", array())) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusAdminBundle:Order/Show:_header.html.twig", 13)->display(array_merge($context, array("value" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui." . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "state", array()))))));
        // line 14
        echo "                </div>
                <div class=\"item\" id=\"sylius-order-currency\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 19
        echo $context["flags"]->getfromLocaleCode($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "localeCode", array()));
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->locale($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "localeCode", array()));
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.purchased_from"), "html", null, true);
        echo "
                    <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "channel", array()), "color", array()), "html", null, true);
        echo "\"></span> <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "channel", array()), "html", null, true);
        echo "</strong>
                </div>
            </div>
        </div>
    </div>
</h1>
";
        
        $__internal_8a2db454ed6b40b3e7d62b69c1cd40946f525acd925c78458e30013781e67862->leave($__internal_8a2db454ed6b40b3e7d62b69c1cd40946f525acd925c78458e30013781e67862_prof);

        
        $__internal_7af83639e2400047732063198bb191167f54746856830527cc85701939fd33fa->leave($__internal_7af83639e2400047732063198bb191167f54746856830527cc85701939fd33fa_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  67 => 22,  60 => 19,  54 => 16,  50 => 14,  48 => 13,  42 => 10,  33 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.order'|trans }} #{{ order.number }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ order.checkoutCompletedAt|format_datetime }}
                </div>
                <div class=\"item\" id=\"sylius-order-state\">
                    {% include [('@SyliusAdmin/Order/Label/State' ~ '/' ~ order.state ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': ('sylius.ui.' ~ order.state)|trans} %}
                </div>
                <div class=\"item\" id=\"sylius-order-currency\">
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\">
                    {{ flags.fromLocaleCode(order.localeCode) }}{{ order.localeCode|locale }}
                </div>
                <div class=\"item\">
                    {{ 'sylius.ui.purchased_from'|trans }}
                    <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ order.channel.color }}\"></span> <strong>{{ order.channel }}</strong>
                </div>
            </div>
        </div>
    </div>
</h1>
", "SyliusAdminBundle:Order/Show:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_header.html.twig");
    }
}
