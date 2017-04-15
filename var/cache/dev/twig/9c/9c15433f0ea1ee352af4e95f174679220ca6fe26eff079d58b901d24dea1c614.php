<?php

/* SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig */
class __TwigTemplate_f87abc471f84f07dd59cfd3818b0a0a2f5c1dc054968eee40db6186845588e56 extends Twig_Template
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
        $__internal_1cae64bc24d1518f22f804768bebeebb24ad687ca248b4b5a5eb25dedff462e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cae64bc24d1518f22f804768bebeebb24ad687ca248b4b5a5eb25dedff462e0->enter($__internal_1cae64bc24d1518f22f804768bebeebb24ad687ca248b4b5a5eb25dedff462e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig"));

        $__internal_c32e0051344e2943a1b850eab04bb09f4baffb6e9de85d8fd87bb9746705d90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32e0051344e2943a1b850eab04bb09f4baffb6e9de85d8fd87bb9746705d90c->enter($__internal_c32e0051344e2943a1b850eab04bb09f4baffb6e9de85d8fd87bb9746705d90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["headers"] ?? $this->getContext($context, "headers")), "default", array(0 => $this->getAttribute($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "product", array()), "name", array()), 1 => (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "plus")) : ("plus")), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), ($context["header"] ?? $this->getContext($context, "header")))) : (($context["header"] ?? $this->getContext($context, "header")))))), "method"), "html", null, true);
        echo "
";
        
        $__internal_1cae64bc24d1518f22f804768bebeebb24ad687ca248b4b5a5eb25dedff462e0->leave($__internal_1cae64bc24d1518f22f804768bebeebb24ad687ca248b4b5a5eb25dedff462e0_prof);

        
        $__internal_c32e0051344e2943a1b850eab04bb09f4baffb6e9de85d8fd87bb9746705d90c->leave($__internal_c32e0051344e2943a1b850eab04bb09f4baffb6e9de85d8fd87bb9746705d90c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig";
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
        return new Twig_Source("{{ headers.default(resource.product.name, configuration.vars.icon|default('plus'), configuration.vars.subheader|default(header)|trans) }}
", "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Create/_headerTitle.html.twig");
    }
}
