<?php

/* SyliusAdminBundle:ProductReview:_product.html.twig */
class __TwigTemplate_c461bb0288bd3e861ca051a4befca3b3dbbb44ce5c8e64a8510ebc3ca8891590 extends Twig_Template
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
        $__internal_ff7e201141c3d4d3d7a39855ddb34036c8ff5f025d21d020fbb04f9b9cf561ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7e201141c3d4d3d7a39855ddb34036c8ff5f025d21d020fbb04f9b9cf561ff->enter($__internal_ff7e201141c3d4d3d7a39855ddb34036c8ff5f025d21d020fbb04f9b9cf561ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_product.html.twig"));

        $__internal_361505c1924a2417fb95973d879007c292c33470d8cf9307a1b81e17cad55518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361505c1924a2417fb95973d879007c292c33470d8cf9307a1b81e17cad55518->enter($__internal_361505c1924a2417fb95973d879007c292c33470d8cf9307a1b81e17cad55518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_product.html.twig"));

        // line 1
        $context["product"] = $this->getAttribute(($context["product_review"] ?? $this->getContext($context, "product_review")), "reviewSubject", array());
        // line 2
        echo "
<h4 class=\"ui top attached styled header\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.product"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\" class=\"header sylius-product-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_ff7e201141c3d4d3d7a39855ddb34036c8ff5f025d21d020fbb04f9b9cf561ff->leave($__internal_ff7e201141c3d4d3d7a39855ddb34036c8ff5f025d21d020fbb04f9b9cf561ff_prof);

        
        $__internal_361505c1924a2417fb95973d879007c292c33470d8cf9307a1b81e17cad55518->leave($__internal_361505c1924a2417fb95973d879007c292c33470d8cf9307a1b81e17cad55518_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview:_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = product_review.reviewSubject %}

<h4 class=\"ui top attached styled header\">
    {{ 'sylius.ui.product'|trans }}
</h4>
<div class=\"ui attached segment\">
    <a href=\"{{ path('sylius_admin_product_update', {'id': product.id}) }}\" class=\"header sylius-product-name\">{{ product.name }}</a>
</div>
", "SyliusAdminBundle:ProductReview:_product.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/_product.html.twig");
    }
}
