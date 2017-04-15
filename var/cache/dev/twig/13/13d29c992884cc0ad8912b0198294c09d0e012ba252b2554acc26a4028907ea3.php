<?php

/* SyliusAdminBundle:TaxRate:_form.html.twig */
class __TwigTemplate_be4f6139c9ecf0a9704a4eed60394326a69ad7af9a668280837b1136e1d8bd6e extends Twig_Template
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
        $__internal_7b595ee81b21ec5d6d42c09839d7a1836006ef94992208051c64665bf2a529a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b595ee81b21ec5d6d42c09839d7a1836006ef94992208051c64665bf2a529a8->enter($__internal_7b595ee81b21ec5d6d42c09839d7a1836006ef94992208051c64665bf2a529a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxRate:_form.html.twig"));

        $__internal_92e3d9afd4c2918d1a06f9973a1b7c56b14439d0e79bac7ff8bff32c3ec17c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e3d9afd4c2918d1a06f9973a1b7c56b14439d0e79bac7ff8bff32c3ec17c81->enter($__internal_92e3d9afd4c2918d1a06f9973a1b7c56b14439d0e79bac7ff8bff32c3ec17c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxRate:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.general_info"), "html", null, true);
        echo "</h4>
    <div class=\"two fields\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.criteria"), "html", null, true);
        echo "</h4>
    <div class=\"two fields\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zone", array()), 'row');
        echo "
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
        echo "</h4>
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "calculator", array()), 'row');
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "amount", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "includedInPrice", array()), 'row');
        echo "
</div>
";
        
        $__internal_7b595ee81b21ec5d6d42c09839d7a1836006ef94992208051c64665bf2a529a8->leave($__internal_7b595ee81b21ec5d6d42c09839d7a1836006ef94992208051c64665bf2a529a8_prof);

        
        $__internal_92e3d9afd4c2918d1a06f9973a1b7c56b14439d0e79bac7ff8bff32c3ec17c81->leave($__internal_92e3d9afd4c2918d1a06f9973a1b7c56b14439d0e79bac7ff8bff32c3ec17c81_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:TaxRate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  73 => 22,  69 => 21,  65 => 20,  57 => 15,  53 => 14,  48 => 12,  40 => 7,  36 => 6,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.general_info'|trans }}</h4>
    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.name) }}
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.criteria'|trans }}</h4>
    <div class=\"two fields\">
        {{ form_row(form.category) }}
        {{ form_row(form.zone) }}
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h4>
    {{ form_row(form.calculator) }}
    {{ form_row(form.amount) }}
    {{ form_row(form.includedInPrice) }}
</div>
", "SyliusAdminBundle:TaxRate:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/TaxRate/_form.html.twig");
    }
}
