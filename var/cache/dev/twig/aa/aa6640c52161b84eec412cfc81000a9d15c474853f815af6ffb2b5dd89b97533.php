<?php

/* SyliusAdminBundle:PromotionCoupon:index.html.twig */
class __TwigTemplate_9b5fbacd46152cb4926f097c2a5d7e1fe6dc47c84e14f7a2ebc881c594e376e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb32eeaaaabcae83a821f5354383fdae9805be7ffec684224768553e9ab7d311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb32eeaaaabcae83a821f5354383fdae9805be7ffec684224768553e9ab7d311->enter($__internal_fb32eeaaaabcae83a821f5354383fdae9805be7ffec684224768553e9ab7d311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:index.html.twig"));

        $__internal_facef84498033cf90383ebb67d33a2625e21318787880378fd37ac39541b720a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facef84498033cf90383ebb67d33a2625e21318787880378fd37ac39541b720a->enter($__internal_facef84498033cf90383ebb67d33a2625e21318787880378fd37ac39541b720a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:index.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 3);
        // line 5
        $context["definition"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "definition", array());
        // line 6
        $context["data"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array());
        // line 8
        $context["header"] = (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array())))) : ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb32eeaaaabcae83a821f5354383fdae9805be7ffec684224768553e9ab7d311->leave($__internal_fb32eeaaaabcae83a821f5354383fdae9805be7ffec684224768553e9ab7d311_prof);

        
        $__internal_facef84498033cf90383ebb67d33a2625e21318787880378fd37ac39541b720a->leave($__internal_facef84498033cf90383ebb67d33a2625e21318787880378fd37ac39541b720a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_28e43534f73e5a71804c4c5294b27ce7b4863a58931aaed0a70fd106d31873fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e43534f73e5a71804c4c5294b27ce7b4863a58931aaed0a70fd106d31873fe->enter($__internal_28e43534f73e5a71804c4c5294b27ce7b4863a58931aaed0a70fd106d31873fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3b64864eb56f3576599c65da729fe4bfe041c80d2b6dc9737edea2c657320b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b64864eb56f3576599c65da729fe4bfe041c80d2b6dc9737edea2c657320b9->enter($__internal_b3b64864eb56f3576599c65da729fe4bfe041c80d2b6dc9737edea2c657320b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_b3b64864eb56f3576599c65da729fe4bfe041c80d2b6dc9737edea2c657320b9->leave($__internal_b3b64864eb56f3576599c65da729fe4bfe041c80d2b6dc9737edea2c657320b9_prof);

        
        $__internal_28e43534f73e5a71804c4c5294b27ce7b4863a58931aaed0a70fd106d31873fe->leave($__internal_28e43534f73e5a71804c4c5294b27ce7b4863a58931aaed0a70fd106d31873fe_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_624f758ede5447727709764a84f556a95965c0517dc558d0c295b24280ed42b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624f758ede5447727709764a84f556a95965c0517dc558d0c295b24280ed42b8->enter($__internal_624f758ede5447727709764a84f556a95965c0517dc558d0c295b24280ed42b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_59eb8c872142a4b126dde1ecfd721e61ce99468375dc8d367b82ae2350688315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59eb8c872142a4b126dde1ecfd721e61ce99468375dc8d367b82ae2350688315->enter($__internal_59eb8c872142a4b126dde1ecfd721e61ce99468375dc8d367b82ae2350688315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.index.before_header", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 16
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Index/_header.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 17)->display($context);
        // line 18
        echo "    </div>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.index.after_header", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

    ";
        // line 22
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 22)->display($context);
        // line 23
        echo "    
    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.index.after_content", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "
";
        
        $__internal_59eb8c872142a4b126dde1ecfd721e61ce99468375dc8d367b82ae2350688315->leave($__internal_59eb8c872142a4b126dde1ecfd721e61ce99468375dc8d367b82ae2350688315_prof);

        
        $__internal_624f758ede5447727709764a84f556a95965c0517dc558d0c295b24280ed42b8->leave($__internal_624f758ede5447727709764a84f556a95965c0517dc558d0c295b24280ed42b8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  102 => 23,  100 => 22,  95 => 20,  91 => 18,  88 => 17,  86 => 16,  79 => 13,  70 => 12,  50 => 10,  40 => 1,  38 => 8,  36 => 6,  34 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ parent() }} {{ header|trans }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.promotion_coupon.index.before_header', {'resources': resources}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/PromotionCoupon/Index/_header.html.twig' %}
        {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.promotion_coupon.index.after_header', {'resources': resources}) }}

    {% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}
    
    {{ sonata_block_render_event('sylius.admin.promotion_coupon.index.after_content', {'resources': resources}) }}
{% endblock %}
", "SyliusAdminBundle:PromotionCoupon:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/index.html.twig");
    }
}
