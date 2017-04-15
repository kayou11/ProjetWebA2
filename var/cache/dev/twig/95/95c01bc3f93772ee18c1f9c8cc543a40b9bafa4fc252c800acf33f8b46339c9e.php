<?php

/* SyliusShopBundle:Common/Order:_summary.html.twig */
class __TwigTemplate_81c3e28f13a1e18a21f9ba98790178e2393718988b46dab8ff1a628b6fdd907d extends Twig_Template
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
        $__internal_758ce658dcadb11da79b2651b1feef92c75e4133ae4500bdea84e40e51ea3e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758ce658dcadb11da79b2651b1feef92c75e4133ae4500bdea84e40e51ea3e4b->enter($__internal_758ce658dcadb11da79b2651b1feef92c75e4133ae4500bdea84e40e51ea3e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_summary.html.twig"));

        $__internal_7d2f416197cebf4c93c6b58e05e168364da2b3293c6269c88422af7e89c43f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2f416197cebf4c93c6b58e05e168364da2b3293c6269c88422af7e89c43f5f->enter($__internal_7d2f416197cebf4c93c6b58e05e168364da2b3293c6269c88422af7e89c43f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_summary.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Common/Order/_addresses.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Common/Order/_table.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/_payments.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/_shipments.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
</div>
";
        
        $__internal_758ce658dcadb11da79b2651b1feef92c75e4133ae4500bdea84e40e51ea3e4b->leave($__internal_758ce658dcadb11da79b2651b1feef92c75e4133ae4500bdea84e40e51ea3e4b_prof);

        
        $__internal_7d2f416197cebf4c93c6b58e05e168364da2b3293c6269c88422af7e89c43f5f->leave($__internal_7d2f416197cebf4c93c6b58e05e168364da2b3293c6269c88422af7e89c43f5f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  40 => 9,  36 => 7,  34 => 6,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Common/Order/_addresses.html.twig' %}
{% include '@SyliusShop/Common/Order/_table.html.twig' %}

<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        {% include '@SyliusShop/Common/Order/_payments.html.twig' %}
    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        {% include '@SyliusShop/Common/Order/_shipments.html.twig' %}
    </div>
</div>
", "SyliusShopBundle:Common/Order:_summary.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_summary.html.twig");
    }
}
