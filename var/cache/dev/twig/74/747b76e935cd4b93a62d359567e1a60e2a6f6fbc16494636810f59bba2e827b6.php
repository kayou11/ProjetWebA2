<?php

/* SyliusShopBundle:Checkout/Complete:_header.html.twig */
class __TwigTemplate_43c86c342465d501de71d9bc931f92c85cdadd5a4cefa62ad25b7403670dc8cb extends Twig_Template
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
        $__internal_2202adda9167af9ab96ffd417cbccbcfbe66a1ece5db4b04f23c1a910154d484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2202adda9167af9ab96ffd417cbccbcfbe66a1ece5db4b04f23c1a910154d484->enter($__internal_2202adda9167af9ab96ffd417cbccbcfbe66a1ece5db4b04f23c1a910154d484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_header.html.twig"));

        $__internal_99900768d3032ce44acc45c6ee55bf8e3d76e0f4690604752604b591fce45028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99900768d3032ce44acc45c6ee55bf8e3d76e0f4690604752604b591fce45028->enter($__internal_99900768d3032ce44acc45c6ee55bf8e3d76e0f4690604752604b591fce45028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_header.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusShopBundle:Checkout/Complete:_header.html.twig", 1);
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.summary_of_your_order"), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\" id=\"sylius-order-currency-code\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()), "html", null, true);
        echo "
                </div>
                <div class=\"item\" id=\"sylius-order-locale-name\">
                    ";
        // line 13
        echo $context["flags"]->getfromLocaleCode($this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "localeCode", array()));
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->locale($this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "localeCode", array()));
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>
";
        
        $__internal_2202adda9167af9ab96ffd417cbccbcfbe66a1ece5db4b04f23c1a910154d484->leave($__internal_2202adda9167af9ab96ffd417cbccbcfbe66a1ece5db4b04f23c1a910154d484_prof);

        
        $__internal_99900768d3032ce44acc45c6ee55bf8e3d76e0f4690604752604b591fce45028->leave($__internal_99900768d3032ce44acc45c6ee55bf8e3d76e0f4690604752604b591fce45028_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Complete:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 10,  33 => 6,  27 => 2,  25 => 1,);
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
        {{ 'sylius.ui.summary_of_your_order'|trans }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\" id=\"sylius-order-currency-code\">
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\" id=\"sylius-order-locale-name\">
                    {{ flags.fromLocaleCode(sylius.localeCode) }}{{ sylius.localeCode|locale }}
                </div>
            </div>
        </div>
    </div>
</h1>
", "SyliusShopBundle:Checkout/Complete:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Complete/_header.html.twig");
    }
}
