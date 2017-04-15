<?php

/* SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig */
class __TwigTemplate_b384a98a6b0744f85c35f06c56f0c5ec49b66239e8526b94dad2bd2caf19bba9 extends Twig_Template
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
        $__internal_84bd8f720d474e7b94dbb9e9fcb4939c6c780bb2da2ce48e9eb1e3520e9fc67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bd8f720d474e7b94dbb9e9fcb4939c6c780bb2da2ce48e9eb1e3520e9fc67c->enter($__internal_84bd8f720d474e7b94dbb9e9fcb4939c6c780bb2da2ce48e9eb1e3520e9fc67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig"));

        $__internal_e61f579f27d579b78175b5651eebf6669e26dfb171bed41490e2778f5f65ba9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61f579f27d579b78175b5651eebf6669e26dfb171bed41490e2778f5f65ba9f->enter($__internal_e61f579f27d579b78175b5651eebf6669e26dfb171bed41490e2778f5f65ba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig"));

        // line 1
        echo "<div class=\"ui icon message\" id=\"sylius-order-cannot-be-shipped\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.warning"), "html", null, true);
        echo "</div>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_shipping_methods_available"), "html", null, true);
        echo ".</p>
    </div>
</div>
";
        
        $__internal_84bd8f720d474e7b94dbb9e9fcb4939c6c780bb2da2ce48e9eb1e3520e9fc67c->leave($__internal_84bd8f720d474e7b94dbb9e9fcb4939c6c780bb2da2ce48e9eb1e3520e9fc67c_prof);

        
        $__internal_e61f579f27d579b78175b5651eebf6669e26dfb171bed41490e2778f5f65ba9f->leave($__internal_e61f579f27d579b78175b5651eebf6669e26dfb171bed41490e2778f5f65ba9f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui icon message\" id=\"sylius-order-cannot-be-shipped\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">{{ 'sylius.ui.warning'|trans }}</div>
        <p>{{ 'sylius.ui.no_shipping_methods_available'|trans }}.</p>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_unavailable.html.twig");
    }
}
