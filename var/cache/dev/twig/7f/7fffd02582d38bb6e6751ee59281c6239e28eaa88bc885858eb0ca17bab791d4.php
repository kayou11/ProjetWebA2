<?php

/* SyliusAdminBundle:Crud/Create:_headerTitle.html.twig */
class __TwigTemplate_4bb93f7476de8a2c632c2ffffcf00e5cdd9a2328185632fc9d8a91ca92d3741e extends Twig_Template
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
        $__internal_b3700bf9b19c5bf4ed6f299acb6dcf488525eb88fd914f81b1a4d7bf336bd71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3700bf9b19c5bf4ed6f299acb6dcf488525eb88fd914f81b1a4d7bf336bd71c->enter($__internal_b3700bf9b19c5bf4ed6f299acb6dcf488525eb88fd914f81b1a4d7bf336bd71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig"));

        $__internal_0585c139c440077ef480f020579382b5893e9306d3e7ccc3c532ee610adba672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0585c139c440077ef480f020579382b5893e9306d3e7ccc3c532ee610adba672->enter($__internal_0585c139c440077ef480f020579382b5893e9306d3e7ccc3c532ee610adba672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["headers"] ?? $this->getContext($context, "headers")), "default", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), 1 => (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "plus")) : ("plus")), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null)))), "method"), "html", null, true);
        echo "
";
        
        $__internal_b3700bf9b19c5bf4ed6f299acb6dcf488525eb88fd914f81b1a4d7bf336bd71c->leave($__internal_b3700bf9b19c5bf4ed6f299acb6dcf488525eb88fd914f81b1a4d7bf336bd71c_prof);

        
        $__internal_0585c139c440077ef480f020579382b5893e9306d3e7ccc3c532ee610adba672->leave($__internal_0585c139c440077ef480f020579382b5893e9306d3e7ccc3c532ee610adba672_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig";
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
        return new Twig_Source("{{ headers.default(header|trans, configuration.vars.icon|default('plus'), configuration.vars.subheader|default(null)|trans) }}
", "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Create/_headerTitle.html.twig");
    }
}
