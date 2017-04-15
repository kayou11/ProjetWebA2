<?php

/* SyliusShopBundle:Menu:_currencySwitch.html.twig */
class __TwigTemplate_773588613091a8e92279c315eda49c6d90049c9a49768c146a16d17bde12280b extends Twig_Template
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
        $__internal_cc9cffc65af74b193ad9691a30f76fba788d7ff9c1119709b2a0c3253db71fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9cffc65af74b193ad9691a30f76fba788d7ff9c1119709b2a0c3253db71fb5->enter($__internal_cc9cffc65af74b193ad9691a30f76fba788d7ff9c1119709b2a0c3253db71fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_currencySwitch.html.twig"));

        $__internal_da6b953ecd021efde52b46f95e94a04d9ce414e6c8518ac2c266a6bb53745ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6b953ecd021efde52b46f95e94a04d9ce414e6c8518ac2c266a6bb53745ec6->enter($__internal_da6b953ecd021efde52b46f95e94a04d9ce414e6c8518ac2c266a6bb53745ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_currencySwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["currencies"] ?? $this->getContext($context, "currencies"))) > 1)) {
            // line 2
            echo "    <div class=\"ui pointing dropdown link item\" id=\"sylius-currency-selector\">
        <span class=\"text sylius-active-currency\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            echo "</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? $this->getContext($context, "currencies")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 7
                echo "                ";
                if ( !($context["code"] === ($context["active"] ?? $this->getContext($context, "active")))) {
                    // line 8
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_switch_currency", array("code" => $context["code"])), "html", null, true);
                    echo "\" class=\"item sylius-available-currency\">
                    ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "
                </a>
                ";
                }
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        }
        
        $__internal_cc9cffc65af74b193ad9691a30f76fba788d7ff9c1119709b2a0c3253db71fb5->leave($__internal_cc9cffc65af74b193ad9691a30f76fba788d7ff9c1119709b2a0c3253db71fb5_prof);

        
        $__internal_da6b953ecd021efde52b46f95e94a04d9ce414e6c8518ac2c266a6bb53745ec6->leave($__internal_da6b953ecd021efde52b46f95e94a04d9ce414e6c8518ac2c266a6bb53745ec6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Menu:_currencySwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 12,  48 => 9,  43 => 8,  40 => 7,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if currencies|length > 1 %}
    <div class=\"ui pointing dropdown link item\" id=\"sylius-currency-selector\">
        <span class=\"text sylius-active-currency\">{{ active }}</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for code in currencies %}
                {% if code is not same as(active) %}
                <a href=\"{{ path('sylius_shop_switch_currency', {'code': code}) }}\" class=\"item sylius-available-currency\">
                    {{ code }}
                </a>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}
", "SyliusShopBundle:Menu:_currencySwitch.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Menu/_currencySwitch.html.twig");
    }
}
