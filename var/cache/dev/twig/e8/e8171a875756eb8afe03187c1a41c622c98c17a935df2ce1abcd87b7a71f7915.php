<?php

/* SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig */
class __TwigTemplate_42ba074adc5d885de5ac09f2b471b7bd55529184426aefdff301c50e79c4255e extends Twig_Template
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
        $__internal_4d5b8532e6c31ab8ef7192fe5711873a62dbae1713af8d7135c1a3b6e3555151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5b8532e6c31ab8ef7192fe5711873a62dbae1713af8d7135c1a3b6e3555151->enter($__internal_4d5b8532e6c31ab8ef7192fe5711873a62dbae1713af8d7135c1a3b6e3555151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig"));

        $__internal_8f312634492de688be48a39db6440430a21ac40e2d049d79a1b33b8fc83a6b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f312634492de688be48a39db6440430a21ac40e2d049d79a1b33b8fc83a6b2b->enter($__internal_8f312634492de688be48a39db6440430a21ac40e2d049d79a1b33b8fc83a6b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig", 1);
        // line 2
        echo "
<div class=\"column\">
    ";
        // line 4
        echo $context["headers"]->getdefault($this->getAttribute(($context["promotion"] ?? $this->getContext($context, "promotion")), "name", array()), (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "tags")) : ("tags")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_coupons")) : ("sylius.ui.manage_coupons"))));
        echo "

    ";
        // line 6
        $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig", 6)->display($context);
        // line 7
        echo "</div>
";
        
        $__internal_4d5b8532e6c31ab8ef7192fe5711873a62dbae1713af8d7135c1a3b6e3555151->leave($__internal_4d5b8532e6c31ab8ef7192fe5711873a62dbae1713af8d7135c1a3b6e3555151_prof);

        
        $__internal_8f312634492de688be48a39db6440430a21ac40e2d049d79a1b33b8fc83a6b2b->leave($__internal_8f312634492de688be48a39db6440430a21ac40e2d049d79a1b33b8fc83a6b2b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

<div class=\"column\">
    {{ headers.default(promotion.name, configuration.vars.icon|default('tags'), configuration.vars.subheader|default('sylius.ui.manage_coupons')|trans) }}

    {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig') %}
</div>
", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Index/_promotionHeader.html.twig");
    }
}
