<?php

/* SyliusAdminBundle:Crud/Index:_headerTitle.html.twig */
class __TwigTemplate_894b5e33234150da354619c81772a347faf755fe2252e5fbe905a2ad17a30b27 extends Twig_Template
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
        $__internal_8c2f039068869d00a29b240933c059c857817cb1686ff4a3334c5b4f369e7216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2f039068869d00a29b240933c059c857817cb1686ff4a3334c5b4f369e7216->enter($__internal_8c2f039068869d00a29b240933c059c857817cb1686ff4a3334c5b4f369e7216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig"));

        $__internal_a678673e1f1602e3457889feaf99bdb39e8e752197abcd084f2acbd9129c8b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a678673e1f1602e3457889feaf99bdb39e8e752197abcd084f2acbd9129c8b0a->enter($__internal_a678673e1f1602e3457889feaf99bdb39e8e752197abcd084f2acbd9129c8b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["headers"] ?? $this->getContext($context, "headers")), "default", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), 1 => (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "list")) : ("list")), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null)))), "method"), "html", null, true);
        echo "
";
        
        $__internal_8c2f039068869d00a29b240933c059c857817cb1686ff4a3334c5b4f369e7216->leave($__internal_8c2f039068869d00a29b240933c059c857817cb1686ff4a3334c5b4f369e7216_prof);

        
        $__internal_a678673e1f1602e3457889feaf99bdb39e8e752197abcd084f2acbd9129c8b0a->leave($__internal_a678673e1f1602e3457889feaf99bdb39e8e752197abcd084f2acbd9129c8b0a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig";
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
        return new Twig_Source("{{ headers.default(header|trans, configuration.vars.icon|default('list'), configuration.vars.subheader|default(null)|trans) }}
", "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Index/_headerTitle.html.twig");
    }
}
