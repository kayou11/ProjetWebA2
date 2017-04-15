<?php

/* SyliusShopBundle:Product:_starRating.html.twig */
class __TwigTemplate_9309add22648c5ff4fa608724aa295c82e0eaf2b3f93ae66115b74de2765e68c extends Twig_Template
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
        $__internal_1aca2e535fbb22304b9328587b20b8ac9ead4dd88d23a84030655fbe57dc6971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aca2e535fbb22304b9328587b20b8ac9ead4dd88d23a84030655fbe57dc6971->enter($__internal_1aca2e535fbb22304b9328587b20b8ac9ead4dd88d23a84030655fbe57dc6971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_starRating.html.twig"));

        $__internal_1dc25ef9da09dadcaad337df6b4ec6c948052bd2e036472d55744fe89d1bd740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc25ef9da09dadcaad337df6b4ec6c948052bd2e036472d55744fe89d1bd740->enter($__internal_1dc25ef9da09dadcaad337df6b4ec6c948052bd2e036472d55744fe89d1bd740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_starRating.html.twig"));

        // line 1
        echo "<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"";
        echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "averageRating", array())), "html", null, true);
        echo "\" data-max-rating=\"5\" data-average-rating=\"";
        echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "averageRating", array()), 2), "html", null, true);
        echo "\" style=\"pointer-events: none;\"></div>
";
        
        $__internal_1aca2e535fbb22304b9328587b20b8ac9ead4dd88d23a84030655fbe57dc6971->leave($__internal_1aca2e535fbb22304b9328587b20b8ac9ead4dd88d23a84030655fbe57dc6971_prof);

        
        $__internal_1dc25ef9da09dadcaad337df6b4ec6c948052bd2e036472d55744fe89d1bd740->leave($__internal_1dc25ef9da09dadcaad337df6b4ec6c948052bd2e036472d55744fe89d1bd740_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_starRating.html.twig";
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
", "SyliusShopBundle:Product:_starRating.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_starRating.html.twig");
    }
}
