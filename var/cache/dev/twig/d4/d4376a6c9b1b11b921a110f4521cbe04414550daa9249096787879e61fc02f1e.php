<?php

/* SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig */
class __TwigTemplate_8ee8555ef105603ffab8db73d4e0ec291884d07b9fa897a831aec3af3d9660c8 extends Twig_Template
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
        $__internal_577a945c3f3f53e7758b0b666df26e29006bec607a16842e0f84fd74e3c1642c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577a945c3f3f53e7758b0b666df26e29006bec607a16842e0f84fd74e3c1642c->enter($__internal_577a945c3f3f53e7758b0b666df26e29006bec607a16842e0f84fd74e3c1642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig"));

        $__internal_1df78d7f66c0c7084cacae5d1411267ca712f01b0e97f0aeb5739a11a9a9d34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df78d7f66c0c7084cacae5d1411267ca712f01b0e97f0aeb5739a11a9a9d34e->enter($__internal_1df78d7f66c0c7084cacae5d1411267ca712f01b0e97f0aeb5739a11a9a9d34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["headers"] ?? $this->getContext($context, "headers")), "default", array(0 => $this->getAttribute($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "promotion", array()), "name", array()), 1 => (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "plus")) : ("plus")), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), ($context["header"] ?? $this->getContext($context, "header")))) : (($context["header"] ?? $this->getContext($context, "header")))))), "method"), "html", null, true);
        echo "
";
        
        $__internal_577a945c3f3f53e7758b0b666df26e29006bec607a16842e0f84fd74e3c1642c->leave($__internal_577a945c3f3f53e7758b0b666df26e29006bec607a16842e0f84fd74e3c1642c_prof);

        
        $__internal_1df78d7f66c0c7084cacae5d1411267ca712f01b0e97f0aeb5739a11a9a9d34e->leave($__internal_1df78d7f66c0c7084cacae5d1411267ca712f01b0e97f0aeb5739a11a9a9d34e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig";
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
        return new Twig_Source("{{ headers.default(resource.promotion.name, configuration.vars.icon|default('plus'), configuration.vars.subheader|default(header)|trans) }}
", "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Create/_headerTitle.html.twig");
    }
}
