<?php

/* SyliusShopBundle:Order:_summary.html.twig */
class __TwigTemplate_57ecdf996d6cd31d2f09dc324adbe3b36eb4688b66040bd9c5b66ffc1352c54c extends Twig_Template
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
        $__internal_8694f303868fe108c5770f3f8bf54cd4980b153435331c0b1fcb8bd3cf1bb0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8694f303868fe108c5770f3f8bf54cd4980b153435331c0b1fcb8bd3cf1bb0f3->enter($__internal_8694f303868fe108c5770f3f8bf54cd4980b153435331c0b1fcb8bd3cf1bb0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:_summary.html.twig"));

        $__internal_097e130a9174e8570ef5bf6787a7366f18037a10aca9b459eb56a612077b885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097e130a9174e8570ef5bf6787a7366f18037a10aca9b459eb56a612077b885b->enter($__internal_097e130a9174e8570ef5bf6787a7366f18037a10aca9b459eb56a612077b885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:_summary.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Order:_summary.html.twig", 1);
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.summary_of_your_order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array()), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "checkoutCompletedAt", array())), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 13
        echo $context["money"]->getconvertAndFormat($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "total", array()));
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "items", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.items")), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>
";
        
        $__internal_8694f303868fe108c5770f3f8bf54cd4980b153435331c0b1fcb8bd3cf1bb0f3->leave($__internal_8694f303868fe108c5770f3f8bf54cd4980b153435331c0b1fcb8bd3cf1bb0f3_prof);

        
        $__internal_097e130a9174e8570ef5bf6787a7366f18037a10aca9b459eb56a612077b885b->leave($__internal_097e130a9174e8570ef5bf6787a7366f18037a10aca9b459eb56a612077b885b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Order:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 13,  42 => 10,  33 => 6,  27 => 2,  25 => 1,);
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

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.summary_of_your_order'|trans }} #{{ order.number }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ order.checkoutCompletedAt|date }}
                </div>
                <div class=\"item\">
                    {{ money.convertAndFormat(order.total) }}
                </div>
                <div class=\"item\">
                    {{ order.items|length }} {{ 'sylius.ui.items'|trans|lower }}
                </div>
            </div>
        </div>
    </div>
</h1>
", "SyliusShopBundle:Order:_summary.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/_summary.html.twig");
    }
}
