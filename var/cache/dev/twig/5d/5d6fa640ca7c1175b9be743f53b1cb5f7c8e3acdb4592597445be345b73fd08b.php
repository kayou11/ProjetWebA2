<?php

/* SyliusShopBundle:Product/Show:_association.html.twig */
class __TwigTemplate_e3e2b802d82f1ae4af6f03d86af5573561e8758856411a085d7886763cee523b extends Twig_Template
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
        $__internal_98914acdb8fa2111601e58ff92cfde5f51e7d52c5d78ee0e1d017893eac494eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98914acdb8fa2111601e58ff92cfde5f51e7d52c5d78ee0e1d017893eac494eb->enter($__internal_98914acdb8fa2111601e58ff92cfde5f51e7d52c5d78ee0e1d017893eac494eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_association.html.twig"));

        $__internal_3189e13a8fa948f8f527e0295af259f615747482689a38f43205af340ca10632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3189e13a8fa948f8f527e0295af259f615747482689a38f43205af340ca10632->enter($__internal_3189e13a8fa948f8f527e0295af259f615747482689a38f43205af340ca10632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_association.html.twig"));

        // line 1
        echo "<h4 class=\"ui horizontal section divider header\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product_association"] ?? $this->getContext($context, "product_association")), "type", array()), "name", array()), "html", null, true);
        echo "</h4>
<div id=\"sylius-product-association-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product_association"] ?? $this->getContext($context, "product_association")), "type", array()), "name", array()), "html", null, true);
        echo "\">
";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "SyliusShopBundle:Product/Show:_association.html.twig", 3)->display(array_merge($context, array("products" => $this->getAttribute(($context["product_association"] ?? $this->getContext($context, "product_association")), "associatedProducts", array()))));
        // line 4
        echo "</div>
";
        
        $__internal_98914acdb8fa2111601e58ff92cfde5f51e7d52c5d78ee0e1d017893eac494eb->leave($__internal_98914acdb8fa2111601e58ff92cfde5f51e7d52c5d78ee0e1d017893eac494eb_prof);

        
        $__internal_3189e13a8fa948f8f527e0295af259f615747482689a38f43205af340ca10632->leave($__internal_3189e13a8fa948f8f527e0295af259f615747482689a38f43205af340ca10632_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui horizontal section divider header\">{{ product_association.type.name }}</h4>
<div id=\"sylius-product-association-{{ product_association.type.name }}\">
{% include '@SyliusShop/Product/_horizontalList.html.twig' with {'products': product_association.associatedProducts} %}
</div>
", "SyliusShopBundle:Product/Show:_association.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_association.html.twig");
    }
}
