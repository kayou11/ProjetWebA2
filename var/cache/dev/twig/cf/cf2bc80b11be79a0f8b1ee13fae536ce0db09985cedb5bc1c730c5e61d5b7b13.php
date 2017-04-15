<?php

/* SyliusShopBundle:Account/Order/Show:_header.html.twig */
class __TwigTemplate_706b9c555585eff385da4c76ca91ffb175b70b5fe91bea364cfa68269e6a111a extends Twig_Template
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
        $__internal_79dba8bba3ffdd4195ba2d8576f7ccd49153f77846664c12e37adb25761f2409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dba8bba3ffdd4195ba2d8576f7ccd49153f77846664c12e37adb25761f2409->enter($__internal_79dba8bba3ffdd4195ba2d8576f7ccd49153f77846664c12e37adb25761f2409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_header.html.twig"));

        $__internal_82e8ff930a1f0f4282903664d586d573d71e3a8f8a0969fed543f3fdd9d4fe79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e8ff930a1f0f4282903664d586d573d71e3a8f8a0969fed543f3fdd9d4fe79->enter($__internal_82e8ff930a1f0f4282903664d586d573d71e3a8f8a0969fed543f3fdd9d4fe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_header.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/Order/Show:_header.html.twig", 1);
        // line 2
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusShopBundle:Account/Order/Show:_header.html.twig", 2);
        // line 3
        $context["labels"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusShopBundle:Account/Order/Show:_header.html.twig", 3);
        // line 4
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array()), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 12
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "checkoutCompletedAt", array()));
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 15
        $this->loadTemplate(array(0 => ((("@SyliusShop/Account/Order/Label/State" . "/") . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "state", array())) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusShopBundle:Account/Order/Show:_header.html.twig", 15)->display(array_merge($context, array("value" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui." . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "state", array()))))));
        // line 16
        echo "                </div>
                <div class=\"item\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "currencyCode", array()), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 21
        echo $context["flags"]->getfromLocaleCode($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "localeCode", array()));
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->locale($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "localeCode", array()));
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>

";
        // line 28
        if (twig_in_filter($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentState", array()), array(0 => "awaiting_payment"))) {
            // line 29
            echo "    ";
            echo $context["buttons"]->getdefault($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tokenValue", array()))), "sylius.ui.pay", null, "credit card alternative", "fluid blue");
            echo "
";
        }
        
        $__internal_79dba8bba3ffdd4195ba2d8576f7ccd49153f77846664c12e37adb25761f2409->leave($__internal_79dba8bba3ffdd4195ba2d8576f7ccd49153f77846664c12e37adb25761f2409_prof);

        
        $__internal_82e8ff930a1f0f4282903664d586d573d71e3a8f8a0969fed543f3fdd9d4fe79->leave($__internal_82e8ff930a1f0f4282903664d586d573d71e3a8f8a0969fed543f3fdd9d4fe79_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  75 => 28,  64 => 21,  58 => 18,  54 => 16,  52 => 15,  46 => 12,  37 => 8,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/flags.html.twig' as flags %}
{% import '@SyliusUi/Macro/labels.html.twig' as labels %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.order'|trans }} #{{ order.number }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ order.checkoutCompletedAt|format_date }}
                </div>
                <div class=\"item\">
                    {% include [('@SyliusShop/Account/Order/Label/State' ~ '/' ~ order.state ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': ('sylius.ui.' ~ order.state)|trans} %}
                </div>
                <div class=\"item\">
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\">
                    {{ flags.fromLocaleCode(order.localeCode) }}{{ order.localeCode|locale }}
                </div>
            </div>
        </div>
    </div>
</h1>

{% if order.paymentState in ['awaiting_payment'] %}
    {{ buttons.default(path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'sylius.ui.pay', null, 'credit card alternative', 'fluid blue') }}
{% endif %}
", "SyliusShopBundle:Account/Order/Show:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Show/_header.html.twig");
    }
}
