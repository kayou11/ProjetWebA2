<?php

/* SyliusShopBundle:Common/Order:_table.html.twig */
class __TwigTemplate_5a2b4fa43b390f65bdef5a52f5f3de6c1402a4a9ee3dec51c08a98e9fc6ebca2 extends Twig_Template
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
        $__internal_5a087045f5ad8db33af7ecef2189f0ed58df5219ecf7468bda4ffcd6ea02402b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a087045f5ad8db33af7ecef2189f0ed58df5219ecf7468bda4ffcd6ea02402b->enter($__internal_5a087045f5ad8db33af7ecef2189f0ed58df5219ecf7468bda4ffcd6ea02402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_table.html.twig"));

        $__internal_7afa526cc3ed1cb84d5a336087468c3272840278b266256094048c79fb2fa52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afa526cc3ed1cb84d5a336087468c3272840278b266256094048c79fb2fa52e->enter($__internal_7afa526cc3ed1cb84d5a336087468c3272840278b266256094048c79fb2fa52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_table.html.twig"));

        // line 1
        echo "<table class=\"ui celled table\" id=\"sylius-order\">
    <thead>
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_headers.html.twig", "SyliusShopBundle:Common/Order:_table.html.twig", 3)->display($context);
        // line 4
        echo "    </thead>
    <tbody>
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_items.html.twig", "SyliusShopBundle:Common/Order:_table.html.twig", 6)->display($context);
        // line 7
        echo "    </tbody>
    <tfoot>
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_totals.html.twig", "SyliusShopBundle:Common/Order:_table.html.twig", 9)->display($context);
        // line 10
        echo "    </tfoot>
</table>
";
        
        $__internal_5a087045f5ad8db33af7ecef2189f0ed58df5219ecf7468bda4ffcd6ea02402b->leave($__internal_5a087045f5ad8db33af7ecef2189f0ed58df5219ecf7468bda4ffcd6ea02402b_prof);

        
        $__internal_7afa526cc3ed1cb84d5a336087468c3272840278b266256094048c79fb2fa52e->leave($__internal_7afa526cc3ed1cb84d5a336087468c3272840278b266256094048c79fb2fa52e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  41 => 9,  37 => 7,  35 => 6,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"ui celled table\" id=\"sylius-order\">
    <thead>
        {% include '@SyliusShop/Common/Order/Table/_headers.html.twig' %}
    </thead>
    <tbody>
        {% include '@SyliusShop/Common/Order/Table/_items.html.twig' %}
    </tbody>
    <tfoot>
        {% include '@SyliusShop/Common/Order/Table/_totals.html.twig' %}
    </tfoot>
</table>
", "SyliusShopBundle:Common/Order:_table.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_table.html.twig");
    }
}
