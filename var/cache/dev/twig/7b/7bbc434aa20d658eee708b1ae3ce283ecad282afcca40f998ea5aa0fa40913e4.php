<?php

/* @SyliusShop/Product/_starRating.html.twig */
class __TwigTemplate_44da22620bd44d4b27557e2f06e2da755fb65891787b6c99951ba34ec1d0f08a extends Twig_Template
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
        $__internal_33c9749e32bd4a61bb7a2fcff20db8e19e813d2f59d8c241a0b64ac74d5f5059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c9749e32bd4a61bb7a2fcff20db8e19e813d2f59d8c241a0b64ac74d5f5059->enter($__internal_33c9749e32bd4a61bb7a2fcff20db8e19e813d2f59d8c241a0b64ac74d5f5059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_starRating.html.twig"));

        $__internal_3eac8d644a8e0c7ecbda0e5d550db75b00034a8fce2f284ed51d0c6aeaa19eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eac8d644a8e0c7ecbda0e5d550db75b00034a8fce2f284ed51d0c6aeaa19eaa->enter($__internal_3eac8d644a8e0c7ecbda0e5d550db75b00034a8fce2f284ed51d0c6aeaa19eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_starRating.html.twig"));

        // line 1
        echo "<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"";
        echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "averageRating", array())), "html", null, true);
        echo "\" data-max-rating=\"5\" data-average-rating=\"";
        echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "averageRating", array()), 2), "html", null, true);
        echo "\" style=\"pointer-events: none;\"></div>
";
        
        $__internal_33c9749e32bd4a61bb7a2fcff20db8e19e813d2f59d8c241a0b64ac74d5f5059->leave($__internal_33c9749e32bd4a61bb7a2fcff20db8e19e813d2f59d8c241a0b64ac74d5f5059_prof);

        
        $__internal_3eac8d644a8e0c7ecbda0e5d550db75b00034a8fce2f284ed51d0c6aeaa19eaa->leave($__internal_3eac8d644a8e0c7ecbda0e5d550db75b00034a8fce2f284ed51d0c6aeaa19eaa_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_starRating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"{{ product.averageRating|round }}\" data-max-rating=\"5\" data-average-rating=\"{{ product.averageRating|round(2) }}\" style=\"pointer-events: none;\"></div>
", "@SyliusShop/Product/_starRating.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_starRating.html.twig");
    }
}
