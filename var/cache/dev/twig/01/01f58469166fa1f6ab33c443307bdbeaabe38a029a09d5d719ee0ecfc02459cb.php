<?php

/* SyliusAdminBundle:Country/Grid/Field:name.html.twig */
class __TwigTemplate_aa138e10c2cf69cfbc6055d2fbba1f626fcccf6c4918e96a4bb2428db453fc4a extends Twig_Template
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
        $__internal_d9580fbf1312e642337558ac5bd5a7e6ef5d91b3f26d65d761f7e502d5661534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9580fbf1312e642337558ac5bd5a7e6ef5d91b3f26d65d761f7e502d5661534->enter($__internal_d9580fbf1312e642337558ac5bd5a7e6ef5d91b3f26d65d761f7e502d5661534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country/Grid/Field:name.html.twig"));

        $__internal_cb2fa4dacae2b108d2bacb1c087307f2ea5484d95238444da217dbf03a41e32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2fa4dacae2b108d2bacb1c087307f2ea5484d95238444da217dbf03a41e32d->enter($__internal_cb2fa4dacae2b108d2bacb1c087307f2ea5484d95238444da217dbf03a41e32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country/Grid/Field:name.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Country/Grid/Field:name.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["flags"]->getfromCountryCode($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "code", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension')->translateCountryIsoCode($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "code", array())), "html", null, true);
        echo "
";
        
        $__internal_d9580fbf1312e642337558ac5bd5a7e6ef5d91b3f26d65d761f7e502d5661534->leave($__internal_d9580fbf1312e642337558ac5bd5a7e6ef5d91b3f26d65d761f7e502d5661534_prof);

        
        $__internal_cb2fa4dacae2b108d2bacb1c087307f2ea5484d95238444da217dbf03a41e32d->leave($__internal_cb2fa4dacae2b108d2bacb1c087307f2ea5484d95238444da217dbf03a41e32d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Country/Grid/Field:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

{{ flags.fromCountryCode(data.code) }} {{ data.code|sylius_country_name }}
", "SyliusAdminBundle:Country/Grid/Field:name.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Country/Grid/Field/name.html.twig");
    }
}
