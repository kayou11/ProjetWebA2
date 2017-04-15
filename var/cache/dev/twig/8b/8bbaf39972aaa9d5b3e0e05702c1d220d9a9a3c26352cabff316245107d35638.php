<?php

/* SyliusShopBundle:Product/Show/Tabs:_content.html.twig */
class __TwigTemplate_f27b3f8feb8a9685784b77a72a86e4cfef5e6001b3282fe2fddeaa47c6ea86f5 extends Twig_Template
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
        $__internal_1985696afa9892f05c6fd1a2579614de30109ee65a624b8f1c483aa997fbe962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1985696afa9892f05c6fd1a2579614de30109ee65a624b8f1c483aa997fbe962->enter($__internal_1985696afa9892f05c6fd1a2579614de30109ee65a624b8f1c483aa997fbe962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig"));

        $__internal_3f1fcf3fb7c0a76d66099043b6045aed62d57763369a17142f1d3b158c4fb7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1fcf3fb7c0a76d66099043b6045aed62d57763369a17142f1d3b158c4fb7f1->enter($__internal_3f1fcf3fb7c0a76d66099043b6045aed62d57763369a17142f1d3b158c4fb7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_details.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 3)->display($context);
        
        $__internal_1985696afa9892f05c6fd1a2579614de30109ee65a624b8f1c483aa997fbe962->leave($__internal_1985696afa9892f05c6fd1a2579614de30109ee65a624b8f1c483aa997fbe962_prof);

        
        $__internal_3f1fcf3fb7c0a76d66099043b6045aed62d57763369a17142f1d3b158c4fb7f1->leave($__internal_3f1fcf3fb7c0a76d66099043b6045aed62d57763369a17142f1d3b158c4fb7f1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Product/Show/Tabs/_details.html.twig' %}
{% include '@SyliusShop/Product/Show/Tabs/_attributes.html.twig' %}
{% include '@SyliusShop/Product/Show/Tabs/_reviews.html.twig' %}
", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_content.html.twig");
    }
}
