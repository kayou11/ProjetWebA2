<?php

/* SyliusShopBundle:Cart/Summary:_suggestions.html.twig */
class __TwigTemplate_17e05040ce4e64b8d4e42e55a71d0527fe25929c62afa74f5c1a491db7eff45f extends Twig_Template
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
        $__internal_8e1df7c49450b0c302a545bb7196819e554988fdf64344d9a8089a39622f1870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1df7c49450b0c302a545bb7196819e554988fdf64344d9a8089a39622f1870->enter($__internal_8e1df7c49450b0c302a545bb7196819e554988fdf64344d9a8089a39622f1870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_suggestions.html.twig"));

        $__internal_919d025ad207d3a330118f1f7a0553a4ff40548847627f82666442e51536f25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919d025ad207d3a330118f1f7a0553a4ff40548847627f82666442e51536f25d->enter($__internal_919d025ad207d3a330118f1f7a0553a4ff40548847627f82666442e51536f25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_suggestions.html.twig"));

        // line 1
        echo "<h4 class=\"ui horizontal section divider header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.you_may_also_like"), "html", null, true);
        echo "</h4>
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "
";
        
        $__internal_8e1df7c49450b0c302a545bb7196819e554988fdf64344d9a8089a39622f1870->leave($__internal_8e1df7c49450b0c302a545bb7196819e554988fdf64344d9a8089a39622f1870_prof);

        
        $__internal_919d025ad207d3a330118f1f7a0553a4ff40548847627f82666442e51536f25d->leave($__internal_919d025ad207d3a330118f1f7a0553a4ff40548847627f82666442e51536f25d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_suggestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui horizontal section divider header\">{{ 'sylius.ui.you_may_also_like'|trans }}</h4>
{{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}
", "SyliusShopBundle:Cart/Summary:_suggestions.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_suggestions.html.twig");
    }
}
