<?php

/* SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig */
class __TwigTemplate_ae1f625151594712169088fb894da64fb378e57aa0be005ff3332972408472d9 extends Twig_Template
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
        $__internal_59ba230af8dc35a9652eae171ad768f444e67a7369fa3ab531d726739b14aad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ba230af8dc35a9652eae171ad768f444e67a7369fa3ab531d726739b14aad5->enter($__internal_59ba230af8dc35a9652eae171ad768f444e67a7369fa3ab531d726739b14aad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig"));

        $__internal_3c376da8401816ec915b75f6951313d67c173205c1cee5e928c6673034eceb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c376da8401816ec915b75f6951313d67c173205c1cee5e928c6673034eceb93->enter($__internal_3c376da8401816ec915b75f6951313d67c173205c1cee5e928c6673034eceb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig", 1);
        // line 2
        echo "
<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "</a>
        ";
        // line 11
        if ( !(null === $this->getAttribute(($context["method"] ?? $this->getContext($context, "method")), "description", array()))) {
            // line 12
            echo "            <div class=\"description\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["method"] ?? $this->getContext($context, "method")), "description", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 16
        echo "    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\">
            ";
        // line 19
        echo $context["money"]->getconvertAndFormat(($context["fee"] ?? $this->getContext($context, "fee")));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_59ba230af8dc35a9652eae171ad768f444e67a7369fa3ab531d726739b14aad5->leave($__internal_59ba230af8dc35a9652eae171ad768f444e67a7369fa3ab531d726739b14aad5_prof);

        
        $__internal_3c376da8401816ec915b75f6951313d67c173205c1cee5e928c6673034eceb93->leave($__internal_3c376da8401816ec915b75f6951313d67c173205c1cee5e928c6673034eceb93_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  55 => 16,  49 => 13,  46 => 12,  44 => 11,  40 => 10,  33 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusShop/Common/Macro/money.html.twig' as money %}

<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            {{ form_widget(form) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">{{ form_label(form) }}</a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\">
            {{ money.convertAndFormat(fee) }}
        </div>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_choice.html.twig");
    }
}
