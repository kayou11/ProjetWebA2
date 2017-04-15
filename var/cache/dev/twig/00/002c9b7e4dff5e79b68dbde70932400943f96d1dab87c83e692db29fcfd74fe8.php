<?php

/* SyliusShopBundle:Account/Order/Grid/Field:total.html.twig */
class __TwigTemplate_36df43aceae56449a1b0f447579b580ac13e75fcf321d5b7d7f27353134cd7b2 extends Twig_Template
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
        $__internal_aab3580a008ddab994df9af98cabf669922dcce60987186dfc2f36d7df5bbbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab3580a008ddab994df9af98cabf669922dcce60987186dfc2f36d7df5bbbfc->enter($__internal_aab3580a008ddab994df9af98cabf669922dcce60987186dfc2f36d7df5bbbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig"));

        $__internal_4014eb326e3480e8a94cc028d74cd3014467a6bafe3deeb0410ea45ae89ddc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4014eb326e3480e8a94cc028d74cd3014467a6bafe3deeb0410ea45ae89ddc25->enter($__internal_4014eb326e3480e8a94cc028d74cd3014467a6bafe3deeb0410ea45ae89ddc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["money"]->getformat($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "total", array()), $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "currencyCode", array()));
        echo "
";
        
        $__internal_aab3580a008ddab994df9af98cabf669922dcce60987186dfc2f36d7df5bbbfc->leave($__internal_aab3580a008ddab994df9af98cabf669922dcce60987186dfc2f36d7df5bbbfc_prof);

        
        $__internal_4014eb326e3480e8a94cc028d74cd3014467a6bafe3deeb0410ea45ae89ddc25->leave($__internal_4014eb326e3480e8a94cc028d74cd3014467a6bafe3deeb0410ea45ae89ddc25_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ money.format(data.total, data.currencyCode) }}
", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Grid/Field/total.html.twig");
    }
}
