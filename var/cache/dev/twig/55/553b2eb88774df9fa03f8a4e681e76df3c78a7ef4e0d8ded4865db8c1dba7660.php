<?php

/* SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig */
class __TwigTemplate_88e9d155427dac9012761fbc9c661f27447612e27da56d369e41972e1edb22fa extends Twig_Template
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
        $__internal_24dea1f59fc082c15973fc2eb33a9075da6e46ba8647a819742645a7783742bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24dea1f59fc082c15973fc2eb33a9075da6e46ba8647a819742645a7783742bf->enter($__internal_24dea1f59fc082c15973fc2eb33a9075da6e46ba8647a819742645a7783742bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig"));

        $__internal_d38af7cd18b4e35ca903db8d7ea9940b2f610eecb4159089cae7c2f35ebcf821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38af7cd18b4e35ca903db8d7ea9940b2f610eecb4159089cae7c2f35ebcf821->enter($__internal_d38af7cd18b4e35ca903db8d7ea9940b2f610eecb4159089cae7c2f35ebcf821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "sourceCurrency", array()), "name", array()), "html", null, true);
        echo "
";
        
        $__internal_24dea1f59fc082c15973fc2eb33a9075da6e46ba8647a819742645a7783742bf->leave($__internal_24dea1f59fc082c15973fc2eb33a9075da6e46ba8647a819742645a7783742bf_prof);

        
        $__internal_d38af7cd18b4e35ca903db8d7ea9940b2f610eecb4159089cae7c2f35ebcf821->leave($__internal_d38af7cd18b4e35ca903db8d7ea9940b2f610eecb4159089cae7c2f35ebcf821_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig";
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
        return new Twig_Source("{{ data.sourceCurrency.name }}
", "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ExchangeRate/Grid/Field/sourceCurrencyName.html.twig");
    }
}
