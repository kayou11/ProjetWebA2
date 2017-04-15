<?php

/* SyliusAdminBundle:ProductReview:_author.html.twig */
class __TwigTemplate_3e6269c166fdbfa0cc97f57a736f1fac11e4b8cbad5358a17f8d3dc2679a4a58 extends Twig_Template
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
        $__internal_60d319974b8845d7a899cb3226d3b2005ee9cbffb0f38b6bdb4889cc94ea5913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d319974b8845d7a899cb3226d3b2005ee9cbffb0f38b6bdb4889cc94ea5913->enter($__internal_60d319974b8845d7a899cb3226d3b2005ee9cbffb0f38b6bdb4889cc94ea5913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_author.html.twig"));

        $__internal_d74b4ca514e601b6d5d84bf14cf4ab72616a52ca59be02dcf38dbd7a12d33aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74b4ca514e601b6d5d84bf14cf4ab72616a52ca59be02dcf38dbd7a12d33aca->enter($__internal_d74b4ca514e601b6d5d84bf14cf4ab72616a52ca59be02dcf38dbd7a12d33aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_author.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Customer/_info.html.twig", "SyliusAdminBundle:ProductReview:_author.html.twig", 1)->display(array_merge($context, array("customer" => $this->getAttribute(($context["product_review"] ?? $this->getContext($context, "product_review")), "author", array()))));
        
        $__internal_60d319974b8845d7a899cb3226d3b2005ee9cbffb0f38b6bdb4889cc94ea5913->leave($__internal_60d319974b8845d7a899cb3226d3b2005ee9cbffb0f38b6bdb4889cc94ea5913_prof);

        
        $__internal_d74b4ca514e601b6d5d84bf14cf4ab72616a52ca59be02dcf38dbd7a12d33aca->leave($__internal_d74b4ca514e601b6d5d84bf14cf4ab72616a52ca59be02dcf38dbd7a12d33aca_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview:_author.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Customer/_info.html.twig' with {'customer': product_review.author} %}
", "SyliusAdminBundle:ProductReview:_author.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/_author.html.twig");
    }
}
