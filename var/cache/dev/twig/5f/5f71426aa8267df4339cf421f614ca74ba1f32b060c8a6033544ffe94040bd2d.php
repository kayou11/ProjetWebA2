<?php

/* @SyliusShop/Product/Show/_header.html.twig */
class __TwigTemplate_981e4b8c5920166d0c74fa6f3d57114f60ef12cceb135289b851ab5d06987fbc extends Twig_Template
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
        $__internal_3443434e98ae0b5cb28aa082589d946557311c2a8be619e99e3206a3a8bf37f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3443434e98ae0b5cb28aa082589d946557311c2a8be619e99e3206a3a8bf37f9->enter($__internal_3443434e98ae0b5cb28aa082589d946557311c2a8be619e99e3206a3a8bf37f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_header.html.twig"));

        $__internal_db7f33cb7887af23248646feff6bd5193c97b52ce74f465fdba86fbb543fb6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7f33cb7887af23248646feff6bd5193c97b52ce74f465fdba86fbb543fb6e0->enter($__internal_db7f33cb7887af23248646feff6bd5193c97b52ce74f465fdba86fbb543fb6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_header.html.twig"));

        // line 1
        echo "<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h1>
";
        
        $__internal_3443434e98ae0b5cb28aa082589d946557311c2a8be619e99e3206a3a8bf37f9->leave($__internal_3443434e98ae0b5cb28aa082589d946557311c2a8be619e99e3206a3a8bf37f9_prof);

        
        $__internal_db7f33cb7887af23248646feff6bd5193c97b52ce74f465fdba86fbb543fb6e0->leave($__internal_db7f33cb7887af23248646feff6bd5193c97b52ce74f465fdba86fbb543fb6e0_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_header.html.twig";
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
        return new Twig_Source("<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">{{ product.name }}</h1>
", "@SyliusShop/Product/Show/_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_header.html.twig");
    }
}
