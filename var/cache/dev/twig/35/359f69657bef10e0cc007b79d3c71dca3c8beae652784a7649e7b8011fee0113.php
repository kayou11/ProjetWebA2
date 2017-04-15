<?php

/* SyliusAdminBundle:Order/Grid/Field:total.html.twig */
class __TwigTemplate_5e32e2141468fb05548582de27df2aa53e8c1d868847571fd5b7ae032f4effcf extends Twig_Template
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
        $__internal_7817fff1d56c4de53af5e9b6e75582a5c02766ae0986ce51c5f7de238012ad95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7817fff1d56c4de53af5e9b6e75582a5c02766ae0986ce51c5f7de238012ad95->enter($__internal_7817fff1d56c4de53af5e9b6e75582a5c02766ae0986ce51c5f7de238012ad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:total.html.twig"));

        $__internal_281557f410198755a31bc8b5510fce99ad53312ab9f5a8c40992b9a41b0da0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281557f410198755a31bc8b5510fce99ad53312ab9f5a8c40992b9a41b0da0b7->enter($__internal_281557f410198755a31bc8b5510fce99ad53312ab9f5a8c40992b9a41b0da0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:total.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Grid/Field:total.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["money"]->getformat($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "total", array()), $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "currencyCode", array()));
        echo "
";
        
        $__internal_7817fff1d56c4de53af5e9b6e75582a5c02766ae0986ce51c5f7de238012ad95->leave($__internal_7817fff1d56c4de53af5e9b6e75582a5c02766ae0986ce51c5f7de238012ad95_prof);

        
        $__internal_281557f410198755a31bc8b5510fce99ad53312ab9f5a8c40992b9a41b0da0b7->leave($__internal_281557f410198755a31bc8b5510fce99ad53312ab9f5a8c40992b9a41b0da0b7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:total.html.twig";
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
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{{ money.format(data.total, data.currencyCode) }}
", "SyliusAdminBundle:Order/Grid/Field:total.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Grid/Field/total.html.twig");
    }
}
