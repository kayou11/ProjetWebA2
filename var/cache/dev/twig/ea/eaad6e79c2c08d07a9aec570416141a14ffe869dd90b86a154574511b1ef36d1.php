<?php

/* SyliusUiBundle:Grid/Filter:date.html.twig */
class __TwigTemplate_0869758d60643b0bf93281652da61807a26a1128caed3cf0cbd8db9e1a1d5d2a extends Twig_Template
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
        $__internal_ddc329a6a18bd9e9bee06015a47a0e0f9460e4f728ba809bafc2db1706022704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc329a6a18bd9e9bee06015a47a0e0f9460e4f728ba809bafc2db1706022704->enter($__internal_ddc329a6a18bd9e9bee06015a47a0e0f9460e4f728ba809bafc2db1706022704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:date.html.twig"));

        $__internal_cd85b50a7bfd23e2fce905ecb3ad7dea508fe2b814d9177ae2ed63394dcae16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd85b50a7bfd23e2fce905ecb3ad7dea508fe2b814d9177ae2ed63394dcae16e->enter($__internal_cd85b50a7bfd23e2fce905ecb3ad7dea508fe2b814d9177ae2ed63394dcae16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:date.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "from", array()), 'row', array("label" => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "label", array())) . " | ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "from", array()), "vars", array()), "label", array())))));
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "to", array()), 'row');
        echo "
";
        
        $__internal_ddc329a6a18bd9e9bee06015a47a0e0f9460e4f728ba809bafc2db1706022704->leave($__internal_ddc329a6a18bd9e9bee06015a47a0e0f9460e4f728ba809bafc2db1706022704_prof);

        
        $__internal_cd85b50a7bfd23e2fce905ecb3ad7dea508fe2b814d9177ae2ed63394dcae16e->leave($__internal_cd85b50a7bfd23e2fce905ecb3ad7dea508fe2b814d9177ae2ed63394dcae16e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{{ form_row(form.from, {'label': filter.label|trans ~ ' | ' ~ form.from.vars.label|trans }) }}
{{ form_row(form.to) }}
", "SyliusUiBundle:Grid/Filter:date.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Filter/date.html.twig");
    }
}
